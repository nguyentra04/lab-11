<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NHTSPController extends Controller
{
    //list/ create/ update/ delete

    public function list()
    {
        //lấy dữ liệu từ database orm
        $nhtsp = NHTSP::all();
        //trả về view
        return view('nhtsp.list', ['nhtsp' => $nhtsp]);
    }
}
