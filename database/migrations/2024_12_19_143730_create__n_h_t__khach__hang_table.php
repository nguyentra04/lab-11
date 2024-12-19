<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('NHTKhachHang', function (Blueprint $table) {
            $table->id();
            $table->string('NHTMaKH',255)->unique();
            $table->string('NHTTenKH',255);
            $table->string('NHTEmail',255);
            $table->string('NHTMatKhau',255);
            $table->string('NHTDienThoai',255);
            $table->string('NHTDiaChi',255);
            $table->date('NHTNgayDangKy');
            $table->tinyInteger('NHTTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('NHTKhachHang');
    }
};
