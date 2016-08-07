<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSanPham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('san_pham');
        Schema::create('san_pham', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description')->nullable();
            $table->integer('price_in')->nullable(); // gia nhap vao
            $table->integer('price_out')->nullable(); // gia ban ra
            $table->integer('quantity')->nullable(); // so luong
            $table->string('unit')->nullable(); // don vi tinh: thung,hop,chiec...
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
