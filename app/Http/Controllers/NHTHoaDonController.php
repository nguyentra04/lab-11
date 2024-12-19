<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NHTHoaDonController extends Controller
{
    //list/ create/ update/ delete

    public function list()
    {
        //lấy dữ liệu từ database orm
        $hoadons = NHTHoaDon::all();
        //trả về dữ liệu
        return view('nhthoadon.list', ['hoadons' => $hoadons]);
    }
}
