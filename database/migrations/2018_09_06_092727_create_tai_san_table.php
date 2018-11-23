<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaiSanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tai_san', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_tai_san');
            $table->string('don_vi_tinh');
            $table->integer('so_luong');
            $table->integer('tinh_trang');
            $table->integer('phong_id')->unsigned();
            $table->timestamps();
            $table->foreign('phong_id')->references('id')->on('phong');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tai_san');
    }
}
