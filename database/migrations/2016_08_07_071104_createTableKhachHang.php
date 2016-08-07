<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKhachHang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('khach_hang');
        Schema::create('khach_hang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name');
            $table->dateTime('birthday')->nullable();
            $table->string('address')->nullable();
            $table->string('mobile')->nullable();
            $table->timestamps();

            $table->unique('mobile');
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
