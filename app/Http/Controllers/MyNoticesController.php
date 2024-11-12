<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;
use App\Models\User;

class MyNoticesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();

        $notices = Notice::select('id', 'title', 'description', 'price', 'status', 'commune_id', 'views', 'highlighted_id')->paginate(20);
        return view('my-notices.index', [
            'notices' => $notices,
            'user' => $user
        ]);
    }
}
