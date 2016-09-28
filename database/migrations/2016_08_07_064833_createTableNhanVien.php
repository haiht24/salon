<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableNhanVien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('nhan_vien');
        Schema::create('nhan_vien', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name');
            $table->dateTime('birthday')->nullable();
            $table->string('mobile')->nullable();
            $table->string('address')->nullable();
            $table->integer('cuahang_id');
            $table->timestamps();

            $table->unique(['id','mobile']);
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
