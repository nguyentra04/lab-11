<?php

namespace App\Http\Controllers;
use App\Models\NHTQuanTri;
use Illuminate\Http\Request;

class NHTQuanTriController extends Controller
{
    //hien thi danh sach
    public function list()
    {
        $nhtquantris = NHTQuanTri::all();
        return view('nhtquantri.list', [$nhtquantris=>'nhtquantris']);
    }

    //hien thi trang them
    public function add()
    {
        return view('nhtquantri.add');

    }

    //luu du lieu
    public function store(Request $request)
    {
        $nhtquantris = new NHTQuanTri();
        $nhtquantris->NHTTaiKhoan = $request->NHTTaiKhoan;
        $nhtquantris->NHTMatKhau = $request->NHTMatKhau;
        $nhtquantris->NHTTrangThai = $request->NHTTrangThai;
        $nhtquantris->save();
        return redirect()->route('nhtquantris.list');
    }

    //hien thi trang sua
    public function edit($id)
    {
        $nhtquantris = NHTQuanTri::find($id);
        return view('nhtquantris.edit', [$nhtquantris=>'nhtquantris']);

    }
}