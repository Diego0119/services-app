<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Notice;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $total_anuncios = Notice::where('user_id', $user->id)->count();

        return view('layouts.dashboard', [
            'total_anuncios' => $total_anuncios
        ]);
    }
    public function showStats()
    {
        $user = auth()->user();
    }

    public function showUsers()
    {
        $users = User::where('role_id', '!=', 1)->get();

        return view('users.index', [
            'users' => $users,
        ]);

    }
}
