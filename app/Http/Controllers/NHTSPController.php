<?php

namespace App\Http\Controllers;
use App\Models\NHT_SanPham;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class NHTSPController extends Controller
{
    //list/ create/ update/ delete

    public function NHTlist()
    {
        //lấy dữ liệu từ database orm
        $nhtsp = NHT_SanPham::all();
        //trả về view
        return view('NHTadmins.NHTSanPham.NHT-list', ['nhtsp' => $nhtsp]);
    }

    public function NHTcreate()
    {
        return view('NHTadmins.NHTSanPham.NHT-create');
    }
    
    //create submit
    public function NHTcreateSubmit(Request $request)
    {
        $nhtsp = new NHT_SanPham();
        $nhtsp->NHTMaSP = $request->NHTMaSP;
        $nhtsp->NHTTenSP = $request->NHTTenSP;
        $nhtsp->NHTHinhAnh = $request->NHTHinhAnh;
        $nhtsp->NHTDonGia = $request->NHTDonGia;
        $nhtsp->NHTSoLuong = $request->NHTSoLuong;
        $nhtsp->NHTMaLoai = $request->NHTMaLoai;
        $nhtsp->save();
        return redirect()->route('NHTadmins.NHTSanPham.NHTlist');
    }

}
