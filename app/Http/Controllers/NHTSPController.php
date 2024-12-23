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
        $validationdate = $request->validate([
            'NHTMaSP' => 'required|unique:NHTSanPham',
            'NHTTenSP' => 'required',
            'NHTHinhAnh' => 'required',
            'NHTDonGia' => 'required',
            'NHTSoLuong' => 'required',
            'NHTMaLoai' => 'required',
        ]);
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
    //update
    public function NHTedit($id)
    {
        $nhtsp = NHT_SanPham::find($id);
        return view('NHTadmins.NHTSanPham.NHT-edit', ['nhtsp' => $nhtsp]);
    }
    //edit-submi
    public function NHTeditSubmit(Request $request, $id)
    {
        $validationdate = $request->validate([
            'NHTMaSP' => 'required',
            'NHTTenSP' => 'required',
            'NHTHinhAnh' => 'required',
            'NHTDonGia' => 'required',
            'NHTSoLuong' => 'required',
            'NHTMaLoai' => 'required',
        ]);
        $nhtsp = NHT_SanPham::find($request->id);
        $nhtsp->NHTMaSP = $request->NHTMaSP;
        $nhtsp->NHTTenSP = $request->NHTTenSP;
        $filename = $request->NHtMaSP.'.'.$request->file('NHTHinhAnh')->extension();
        $imgaeUrl = 'images/';
        $request->file('NHTHinhAnh')->move(public_path('images\\'),$filename);
        $nhtsp->NHTHinhAnh = $imgaeUrl.$filename;
        $nhtsp->NHTDonGia = $request->NHTDonGia;
        $nhtsp->NHTSoLuong = $request->NHTSoLuong;
        $nhtsp->NHTMaLoai = $request->NHTMaLoai;
        $nhtsp->save();
        return redirect()->route('NHTadmins.NHTSanPham.NHTlist');
    }
    //delete
    public function NHTdelete($id)
    {
        $nhtsp = NHT_SanPham::find($id);
        $nhtsp->remove();
        return redirect()->route('NHTadmins.NHTSanPham.NHTlist',
        [$id])->with('Thông báo','Xóa thành công');
    }

}
