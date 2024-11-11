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


        return view('notice-details.index', [
            'notice' => $notice,
            'user' => $user,
            'commune' => $commune,
            'attributes' => $attributes
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

        if ($request->has('submit_gallery')) {
            $request->validate([
                'gallery_duration' => 'required|in:1,2,3,4',
            ]);

            $duration = $request->input('gallery_duration');

            $start_date = Carbon::now();

            $end_date = $start_date->copy();

            switch ($duration) {
                case 1:
                    $end_date->addWeek();
                    break;
                case 2:
                    $end_date->addWeeks(2);
                    break;
                case 3:
                    $end_date->addWeeks(3);
                    break;
                case 4:
                    $end_date->addMonth();
                    break;
            }

            $highlighted_notice = new HighlightedNotice;
            $highlighted_notice->notice_id = $noticeId;
            $highlighted_notice->highlighted_id = 2;
            $highlighted_notice->start_date = $start_date;
            $highlighted_notice->end_date = $end_date;
            $highlighted_notice->amount_paid = 2000;
            $highlighted_notice->is_active = TRUE;
            $highlighted_notice->save();

            return redirect()->route('dashboard')
                ->withSuccess(__('Anuncio subido a la galería exitosamente'));
        }

        if ($request->has('submit_boost')) {
            // Lógica de boost
        } else {
            $notice->status = $request->input('status');
            $notice->save();
            return redirect()->route('dashboard')
                ->withSuccess(__('Anuncio modificado correctamente'));
        }
    }

    public function upToGalleryNotice($noticeId, Request $request)
    {
        $notice = Notice::where('id', $noticeId)->first();


    }

}
