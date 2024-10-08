<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Region;
use App\Models\Attribute;
use DB;
use App\Models\Commune;
use App\Models\Notice;


class UploadNoticeController extends Controller
{
    public function index()
    {

        $categories = Category::select('id', 'name')->get();
        $regions = Region::select('id', 'name')->get();
        $attributes = Attribute::select('id', 'name', 'type')->get();
        $category_attribute = DB::table('category_attribute')->get();
        $communes = Commune::select('id', 'name', 'region_id')->get();

        return view(
            'upload_notice.index',
            [
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
        // aca debo hacer que se relacione el aviso con los atributos adicionales
        dd($request->attributes);
        $titulo = $request->input('titulo');
        $descripcion = $request->input('descripcion');
        $precio = $request->input('precio');
        $categoria = $request->input('categoria');
        $region = $request->input('region');
        $commune = $request->input('commune');
        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
        }


    }
}
