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
        Schema::create('NHT_QuanTri', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('NHTTaiKhoan',255)->unique();
            $table->string('NHTMatKhau',255);
            $table->tinyInteger('NHTTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('NHT_QuanTri');
    }
};
