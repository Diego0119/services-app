<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;
use App\Models\User;
use App\Models\Commune;

class NoticeController extends Controller
{
    public function index()
    {


    }

    public function showNotice($noticeId)
    {
        $notice = Notice::where('id', $noticeId)->first();
        $user = User::where('id', $notice->user_id)->first();
        $commune = Commune::where('id', $notice->commune_id)->first();

        return view('details.index', [
            'notice' => $notice,
            'user' => $user,
            'commune' => $commune,
        ]);

    }
}
