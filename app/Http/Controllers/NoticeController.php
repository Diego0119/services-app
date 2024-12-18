<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;
use App\Models\User;
use App\Models\Commune;
use App\Models\Category;
use App\Models\Region;
use App\Models\Attribute;
use App\Models\HighlightedNotice;
use DB;
use App\Models\AttributeValue;
use Carbon\Carbon;

class NoticeController extends Controller
{

    public function __construct()
    {
        // Aplicar middleware a métodos específicos
        $this->middleware('auth')->only(['uploadNotice', 'store']);
    }
    public function index()
    {


    }
    public function uploadNotice()
    {

        $categories = Category::select('id', 'name')->get();
        $regions = Region::select('id', 'name')->get();
        $attributes = Attribute::select('id', 'name', 'type')->get();
        $category_attribute = DB::table('category_attribute')->get();
        $communes = Commune::select('id', 'name', 'region_id')->get();

        return view(
            'upload_notice.index',
            data: [
                'categories' => $categories,
                'regions' => $regions,
                'attributes' => $attributes,
                'category_attribute' => $category_attribute,
                'communes' => $communes,
            ]
        );
    }

    public function store(Request $request)
    {
        $user = auth()->user();
        $notice = new Notice;
        $notice->user_id = $user->id;
        $notice->title = $request->input('titulo');
        $notice->description = $request->input('descripcion');
        $notice->price = $request->input('precio');
        $notice->category_id = $request->input('categoria');
        $notice->phone = +56912345678;
        $notice->highlighted_id = 1;
        $notice->url = "";
        $notice->commune_id = $request->input('commune');
        $notice->status = 'EN_REVISION';

        if ($request->hasFile('imagen')) {
            $path = $request->file('imagen');
            str_replace('public/', 'storage/', $path);
        }

        $notice->save();
        $attributes = $request->input('attributes');
        if (!empty($attributes)) {
            foreach ($attributes as $attribute_key => $attribute_name) {

                $attribute_value = new AttributeValue();
                $attribute_value->attribute_id = $attribute_key;
                $attribute_value->value = $attribute_name;
                $attribute_value->notice_id = $notice->id;
                $attribute_value->save();
            }
        }
        return redirect()->route('dashboard')
            ->withSuccess(__('El aviso se encuentra en revisión, seras notificado cuando se haya aprobado.'));
    }

    public function showNotice($noticeId)
    {
        $notice = Notice::where('id', $noticeId)->first();
        $user = User::where('id', $notice->user_id)->first();
        $commune = Commune::where('id', $notice->commune_id)->first();
        $attributes = DB::table('attribute_values')
            ->join('attributes', 'attribute_values.attribute_id', '=', 'attributes.id')
            ->where('attribute_values.notice_id', $noticeId)
            ->select('attributes.name as name', 'attribute_values.value as value', 'attributes.type as type')
            ->get();
        $notice->increment('views');
        $related_notices = Notice::where('category_id', $notice->category_id)
            ->where('id', '!=', $notice->id)
            ->whereRaw('LOWER(title) LIKE ?', ['%' . strtolower($notice->title) . '%'])
            ->take(10)
            ->get();

        // dd($related_notices);
        return view('notice-details.index', [
            'notice' => $notice,
            'user' => $user,
            'commune' => $commune,
            'attributes' => $attributes,
            'related_notices' => $related_notices,
        ]);

    }

    public function searchNotices(Request $request)
    {
        $locationId = $request->input('location_id');
        $query = $request->input('query');
        $locationId = $request->input('location_id');
        $results = Notice::where('title', 'LIKE', "%{$query}%")
            // ->where('location', 'LIKE', "%{$location}%")
            ->get();

        return view('search.index', [
            'results' => $results,
            'query' => $query
        ]);
    }

    public function search(Request $request)
    {
        if ($request->ajax()) {
            $data = Commune::where('id', 'like', '%' . $request->search . '%')
                ->orWhere('name', 'like', '%' . $request->search . '%')->get();

            $output = '';
            if (count($data) > 0) {
                $output .= '<ul class="list-none p-0 m-0">';
                foreach ($data as $row) {
                    $output .= '<li class="p-2 border-b border-gray-300 cursor-pointer" data-id="' . $row->id . '" data-name="' . $row->name . '">' . $row->name . '</li>';

                }
                $output .= '</ul>';
            } else {
                $output = '<li class="p-2">Sin resultados</li>';
            }
            return response($output);
        }
    }

    public function modifyNotice($noticeId)
    {
        $notice = Notice::where('id', $noticeId)->first();
        return view(
            'modify-notice.index'
            ,
            [
                'notice' => $notice
            ]
        );
    }

    public function storeModifiedNotice($noticeId, Request $request)
    {
        $notice = Notice::where('id', $noticeId)->first();

        $notice->status = $request->input('status');
        $notice->save();
        return redirect()->route('dashboard')
            ->withSuccess(__('Anuncio modificado correctamente'));

    }

    public function getAllNotices()
    {


        $notices = Notice::paginate(20);
        $user = User::get();

        return view('published-notices.index', [
            'notices' => $notices,
            'user' => $user
        ]);
    }
}
