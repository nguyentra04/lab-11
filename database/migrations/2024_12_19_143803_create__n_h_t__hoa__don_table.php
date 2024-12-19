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
        Schema::create('NHTHoaDon', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('NHTMaHD',255)->unique();
            $table->bigInteger('NHTMaKH')->references('id')->on('NHTKhachHang');
            $table->date('NHTNgayHD');
            $table->string('NHTHoTenKH',255);
            $table->string('NHTEmail',255);
            $table->string('NHTDienThoai',255);
            $table->string('NHTDiaChi',255);
            $table->float('NHTTongTriGia');
            $table->tinyInteger('NHTTrangThai');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('NHTHoaDon');
    }
};
