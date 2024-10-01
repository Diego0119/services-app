<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyNoticesController extends Controller
{
    public function index()
    {
        return view('my-notices.index');
    }
}
