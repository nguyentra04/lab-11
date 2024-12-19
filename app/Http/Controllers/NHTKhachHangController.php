<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NHTKhachHangController extends Controller
{
    //list/ create/ update/ delete
    public function list()
    {
        //lấy dữ liệu từ database orm
        $nhtkh = NHTKhachHang::all();
        //trả về view
        return view('nhtkh.list', ['nhth' => $nhtkh]);
    }
}
 