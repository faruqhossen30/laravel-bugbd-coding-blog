<?php

namespace App\Http\Controllers\Userend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserdashboardController extends Controller
{
    public function dashboard()
    {
        return view('userend.dashboard');
    }
}
