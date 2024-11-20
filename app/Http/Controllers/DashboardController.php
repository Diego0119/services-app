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
        $total_notices = Notice::where('user_id', $user->id)->count();
        $notices_of_user = Notice::where('user_id', $user->id)->get();
        $number_of_views = 0;
        foreach ($notices_of_user as $notice_of_user) {
            $number_of_views += $notice_of_user->views;
        }

        return view('dashboard.index', [
            'total_notices' => $total_notices,
            'total_views' => $number_of_views
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
