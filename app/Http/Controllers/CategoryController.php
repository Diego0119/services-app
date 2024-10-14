<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Notice;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::select('id', 'name')->get();
        $notices = Notice::select('id', 'name')->get();

        return view('categories.index', data: [
            'categories' => $categories,
            'notices' => $notices
        ]);
    }

    public function showCategory($categoryId)
    {

        $category = Category::select('id', 'name')->where('id', $categoryId)->first();
        $notices = Notice::where('category_id', $categoryId)->get();
        return view('categories.index', data: [
            'category' => $category,
            'notices' => $notices
        ]);

    }
}
