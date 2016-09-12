<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDonhang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('don_hang');
        Schema::create('don_hang', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nhanvien_id')->nullable();
            $table->integer('dichvu_id')->nullable();
            $table->integer('sanpham_id')->nullable();
            $table->integer('khachhang_id')->nullable();
            $table->string('author')->nullable();
            $table->timestamps();

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
