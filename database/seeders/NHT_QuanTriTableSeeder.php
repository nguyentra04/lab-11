<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NHT_QuanTriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $NHTMatKhau = md5('123456');
        DB::table('NHT_QuanTri')->insert
        ([ 
            'NHTTaiKhoan' => 'nht@gmail.com',
            'NHTMatKhau' => md5('123456'),
            'NHTTrangThai' => 0
        ]);
        DB::table('NHT_QuanTri')->insert(
        [
            'NHTTaiKhoan' => 'EMAIL',
            'NHTMatKhau' => md5('123456'),
            'NHTTrangThai' => 1
        ]);

    }
}
