<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NHTLoaiSPController extends Controller
{
    //list/ create/ update/ delete
    public function list()
    {
        $nhtloaisp = NHTLoaiSP::all();
        return view('nhtloaisp.list', ['nhtloaisp' => $nhtloaisp]);
        }
}
