<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::select('id', 'name')->get();

        return view('categories.index', data: ['categories' => $categories]);
    }

    public function showCategory($categoryId)
    {
        $category = Category::select('id', 'name')->where('id', $categoryId)->first();

        return view('categories.index', ['category' => $category]);

    }
}
