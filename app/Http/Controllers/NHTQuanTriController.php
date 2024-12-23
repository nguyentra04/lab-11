<?php

namespace App\Http\Controllers;
use App\Models\NHTQuanTri;
use Illuminate\Http\Request;

class NHTQuanTriController extends Controller
{
    public function nhtlogin()
    {
        return view ('nhtlogin.nht-login');
    }
    public function nhtloginsubmit(Request $request)
    {
        return view ('nhtlogin.nht-loginsubmit');
    }
}