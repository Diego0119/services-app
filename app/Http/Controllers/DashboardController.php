<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();


        return view('layouts.dashboard');
    }

    public function showUsers()
    {
        $users = User::where('role_id', '!=', 1)->get();

        return view('users.index', [
            'users' => $users,
        ]);

    }
}
