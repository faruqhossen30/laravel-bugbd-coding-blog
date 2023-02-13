<?php

namespace App\Http\Controllers\Userend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{

    public function index(){

        return view('user.settings.setting-page');
    }
}
