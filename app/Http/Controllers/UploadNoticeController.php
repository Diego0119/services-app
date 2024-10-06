<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Region;
use App\Models\Attribute;


class UploadNoticeController extends Controller
{
    public function index()
    {

        $categories = Category::select('id', 'name')->get();
        $regions = Region::select('id', 'name')->get();
        $attributes = Attribute::select('id', 'name')->get();

        return view(
            'upload_notice.index',
            [
                'categories' => $categories,
                'regions' => $regions,
                'attributes' => $attributes
            ]
        );
    }
}
