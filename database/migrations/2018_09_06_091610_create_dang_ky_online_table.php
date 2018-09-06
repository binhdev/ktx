<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDangKyOnlineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dang_ky_online', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ho_ten');
            $table->string('lop');
            $table->string('cmnd');
            $table->string('dien_thoai');
            $table->string('dia_chi');
            $table->unsignedInteger('loai_khach_id');
            $table->foreign('loai_khach_id')->references('id')->on('loai_khach');
            $table->integer('tinh_trang');
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
        Schema::dropIfExists('dang_ky_online');
    }
}
