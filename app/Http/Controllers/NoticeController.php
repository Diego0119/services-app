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


        if (!empty($attributes)) {
            foreach ($attributes as $attribute) {
                $attribute_value = new AttributeValue();
                $attribute_value->attribute_id = $attribute->id;
                $attribute_value->value = $attribute->name;
                $attribute_value->save();
            }
        }

        redirect('/my-notices');
    }

    public function showNotice($noticeId)
    {
        $notice = Notice::where('id', $noticeId)->first();
        $user = User::where('id', $notice->user_id)->first();
        $commune = Commune::where('id', $notice->commune_id)->first();

        return view('details.index', [
            'notice' => $notice,
            'user' => $user,
            'commune' => $commune,
        ]);

    }
}
