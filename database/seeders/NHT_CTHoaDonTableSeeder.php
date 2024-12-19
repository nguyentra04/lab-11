<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NHT_CTHoaDonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('NHTCTHoaDon')->insert([
            'NHTHoaDonID'=>1,
            'NHTSanPhamID'=>1,
            'NHTSoLuongMua'=>1,
            'NHTDonGiaMua'=>10000,
            'NHTThanhTien'=>10000,
            'NHTTrangThai'=>0
        ]);
        DB::table('NHTCTHoaDon')->insert([
            'NHTHoaDonID'=>1,
            'NHTSanPhamID'=>2,
            'NHTSoLuongMua'=>1,
            'NHTDonGiaMua'=>10000,
            'NHTThanhTien'=>10000,
            'NHTTrangThai'=>0
        ]);
        DB::table('NHTCTHoaDon')->insert([
            'NHTHoaDonID'=>1,
            'NHTSanPhamID'=>3,
            'NHTSoLuongMua'=>1,
            'NHTDonGiaMua'=>10000,
            'NHTThanhTien'=>10000,
            'NHTTrangThai'=>0
        ]);
    }
}
