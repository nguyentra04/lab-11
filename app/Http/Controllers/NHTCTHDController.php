<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NHTCTHDController extends Controller
{
    //list/ create/ update/ delete

    public function list()
    {
        //lấy dữ liệu từ database orm
        $nhtct = NHTCTHD::all();
        //trả về view
        return view('nhtcthd.list', ['nhct' => $nhtct]);
    }
}
