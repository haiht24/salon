<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCuaHangNhanVien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('cuahang_nhanvien');
        Schema::create('cuahang_nhanvien', function (Blueprint $table) {
            $table->unsignedInteger('id_cuahang');
            $table->unsignedInteger('id_nhanvien');

            $table->timestamps();

            $table->primary(['id_cuahang','id_nhanvien']);
            $table->foreign('id_cuahang')->references('id')->on('cua_hang');
            $table->foreign('id_nhanvien')->references('id')->on('nhan_vien');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
