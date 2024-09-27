<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // Ejemplo de un array de categorías
        $categories = [
            ['name' => 'Tecnología', 'slug' => 'tecnologia'],
            ['name' => 'Ciencia', 'slug' => 'ciencia'],
            ['name' => 'Deportes', 'slug' => 'deportes'],
            ['name' => 'Arte', 'slug' => 'arte'],
        ];

        return view('categories.index', compact('categories'));
    }
}
