<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhachLuuTruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khach_luu_tru', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ho_ten');
            $table->string('cmnd');
            $table->string('dien_thoai');
            $table->string('dia_chi');
            $table->timestamp('ngay_vao')->nullable();
            $table->timestamp('ngay_ra')->nullable();

            $table->unsignedInteger('phong_id');
            $table->foreign('phong_id')->references('id')->on('phong');

            $table->unsignedInteger('loai_khac_id');
            $table->foreign('loai_khac_id')->references('id')->on('loai_khach');

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
        Schema::dropIfExists('khach_luu_tru');
    }
}
