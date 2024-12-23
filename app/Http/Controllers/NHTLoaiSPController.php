<?php

namespace App\Http\Controllers;
use App\Models\NHT_Loai_SP;
use Illuminate\Http\Request;

class NHTLoaiSPController extends Controller
{
    //list/ create/ update/ delete
    //admin :CRUD
    //list
    public function NHTlist()
    {
        $nhtloaisps = NHT_Loai_SP::all();
        return view('NHTadmins.NHTLoaiSP.NHT-list',['nhtloaisps'=>$nhtloaisps]);
    }

    //create
    public function NHTcreate()
    {
        return view('NHTadmins.NHTLoaiSP.NHT-create');
    }

    public function NHTcreateSubmit(Request $request)

    {
        $validationdate = $request->validate([
            'NHTMaLoai'=>'required|unique:NHTLoaiSanPham',
            'NHTTenLoai'=>'required',
            'NHTTrangThai'=>'required',
        ]);
        //ghi dữ liệu xuống db
        $nhtloaisps = new NHT_Loai_SP;
        $nhtloaisps->NHTMaLoai = $request->NHTMaLoai;
        $nhtloaisps->NHTTenLoai = $request->NHTTenLoai;
        $nhtloaisps->NHTTrangThai = $request->NHTTrangThai;
        $nhtloaisps->save();
        return redirect()->route('NHTadmins.NHTloaisp.nhtcreatesubmit');
    }
    //edit 
    public function NHTedit($id)
    {
        return view('NHTadmins.NHTLoaiSP.NHT-edit');
    }
    //get nht-edit submit


    public function NHTeditsubmit(Request $request)
    {
        $validationdate = $request->validate([
            'NHTMaLoai'=>'required',
            'NHTTenLoai'=>'required',
        ]);
        $nhtloaisps = NHT_Loai_SP::find($request->id);
        $nhtloaisps->NHTMaLoai = $request->NHTMaLoai;
        $nhtloaisps->NHTTenLoai = $request->NHTTenLoai;
        $nhtloaisps->NHTTrangThai = $request->NHTTrangThai;
        $nhtloaisps->save();
        return redirect()->route('NHTadmins.NHTloaisp.NHTeditsubmit
        ',[$id])->with('Thông báo','Sửa thành công');
    }
    //delete
    public function NHTdelete()
    {
        return view('NHTadmins.NHTLoaiSP.NHT-delete');
    }
    //get nht-delete submit
    public function NHTdeletesubmit($id){
        $nhtloaisps = NHT_Loai_SP::find($id);
        $nhtloaisps->remove();
        return redirect()->route('NHTadmins.NHTloaisp.NHTList',
        [$id])->with('Thông báo','Xóa thành công');

    }
}
