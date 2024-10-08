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
        $category = Category::where('id', $categoryId)->get();

        return view('categories.index', data: ['category' => $category]);

    }
}
