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
        
        
        DB::table('NHT_Loai_San_Pham')->insert([
            'NHTMaLoai'=>'L001',
            'NHTTenLoai'=>'cay canh van phong',
            'NHTTrangThai'=>0
        ]);
        DB::table('NHT_Loai_San_Pham')->insert([
            'NHTMaLoai'=>'L002',
            'NHTTenLoai'=>'cay de ban',
            'NHTTrangThai'=>0
        ]);
        DB::table('NHT_Loai_San_Pham')->insert([
            'NHTMaLoai'=>'L003',
            'NHTTenLoai'=>'cay phong thuy',
            'NHTTrangThai'=>0
        ]);

    }
}
