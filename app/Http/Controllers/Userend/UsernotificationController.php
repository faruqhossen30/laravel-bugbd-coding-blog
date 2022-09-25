<?php

namespace App\Http\Controllers\Userend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsernotificationController extends Controller
{
    public function readnotification(Request $request, $id)
    {
        Auth::user()->notifications->where('id', $id)->markAsRead();

        return back();
    }
}
