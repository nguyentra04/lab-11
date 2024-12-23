<?php
namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            NHT_QuanTriTableSeeder::class,
            NHT_CTHoaDonTableSeeder::class,
            NHT_HoaDonTableSeeder::class,
            NHT_KhachHangTableSeeder::class,
            NHT_SanPhamTableSeeder::class,
            NHT_LoaiSanPhamTableSeeder::class,
            
            
        ]);
        
    }
}
