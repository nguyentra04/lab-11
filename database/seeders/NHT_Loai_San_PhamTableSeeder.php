<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NHT_Loai_San_PhamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('NHTLoaiSanPham')->insert([
            'NHTMaLoai'=>'l011',
            'NHTTenLoai'=>'cay canh van phong',
            'NHTTrangThai'=>0
        ]);
        DB::table('NHTLoaiSanPham')->insert([
            'NHTMaLoai'=>'l02',
            'NHTTenLoai'=>'cay de ban',
            'NHTTrangThai'=>0
        ]);
        DB::table('NHTLoaiSanPham')->insert([
            'NHTMaLoai'=>'l03',
            'NHTTenLoai'=>'cay phong thuy',
            'NHTTrangThai'=>0
        ]);

    }
}
