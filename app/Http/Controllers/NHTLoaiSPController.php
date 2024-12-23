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
        $nhtloaisps = new NHT_Loai_SP();
        $nhtloaisps->NHTMaLoai = $request->NHTMaLoai;
        $nhtloaisps->NHTTenLoai = $request->NHTTenLoai;
        $nhtloaisps->NHTTrangThai = $request->NHTTrangThai;
        $nhtloaisps->save();
        return redirect()->route('NHTadmins.NHTloaisp.nhtcreatesubmit');
    }
    //edit 
    public function NHTedit()
    {
        return view('NHTadmins.NHTLoaiSP.NHT-edit');
    }
    //get nht-edit submit
    public function NHTeditsubmit($id){
        $nhtloaisps = NHT_Loai_SP::find($id);
        return view('NHTadmins.NHTLoaiSP.NHT-edit',['nhtloaisps'=>$nhtloaisps]);
    }
    //update

    public function NHTupdatesubmit(Request $request,$id)
    {
        $nhtloaisps = NHT_Loai_SP::find($id);
        $nhtloaisps->NHTMaLoai = $request->NHTMaLoai;
        $nhtloaisps->NHTTenLoai = $request->NHTTenLoai;
        $nhtloaisps->NHTTrangThai = $request->NHTTrangThai;
        $nhtloaisps->save();
        return redirect()->route('NHTadmins.NHTloaisp.nhteditsubmit
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
        return view('NHTadmins.NHTLoaiSP.NHT-delete',['nhtloaisps'=>$nhtloaisps]);
    }
}
