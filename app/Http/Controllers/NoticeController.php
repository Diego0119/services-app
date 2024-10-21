<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;
use App\Models\User;
use App\Models\Commune;
use App\Models\Category;
use App\Models\Region;
use App\Models\Attribute;
use DB;
use App\Models\AttributeValue;

class NoticeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
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
        // $notice->region_id = $request->input('region');
        $notice->commune_id = $request->input('commune');
        $notice->status = 'EN_REVISION';
        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
        }

        $notice->save();
        $attributes = $request->input('attributes');
        // dd($attributes);
        if (!empty($attributes)) {
            foreach ($attributes as $attribute_key => $attribute_name) {
                $attribute_value = new AttributeValue();
                $attribute_value->attribute_id = $attribute_key;
                $attribute_value->value = $attribute_name;
                $attribute_value->notice_id = $notice->id;
                $attribute_value->save();
            }
        }
        // no esta funcionando la redirección, deberia hacer que se redirija a
        // la pantalla principal con un mensaje
        redirect('/my-notices');
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


        return view('notice-details.index', [
            'notice' => $notice,
            'user' => $user,
            'commune' => $commune,
            'attributes' => $attributes
        ]);

    }

    public function search_notices(Request $request)
    {

        $query = $request->input('query');
        $location = $request->input('location');

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
                    $output .= '<li class="p-2 border-b border-gray-300 cursor-pointer">' . $row->name . '</li>';
                }
                $output .= '</ul>';
            } else {
                $output = '<li class="p-2">Sin resultados</li>';
            }
            return response($output);
        }
    }


}
