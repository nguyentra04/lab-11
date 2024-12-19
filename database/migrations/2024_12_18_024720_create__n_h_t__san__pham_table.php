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
        Schema::create('NHTSanPham', function (Blueprint $table) {
            $table->id();
            $table->string('NHTMaSP',255)->unique();
            $table->string('NHTTenSP', 255);
            $table->string('NHTHinhAnh', 255);
            $table->float('NHTDonGia');
            $table->integer('NHTSoLuong');
            $table->bigInteger('NHTMaLoai')->references('id')->on('NHTLoaiSanPham');
            $table->tinyInteger('NHTTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('NHTSanPham');
    }
};
