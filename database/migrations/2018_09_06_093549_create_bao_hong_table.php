<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaoHongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bao_hong', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('tai_san_id');
            $table->foreign('tai_san_id')->references('id')->on('tai_san');
            $table->string('mo_ta');

            $table->unsignedInteger('nguoi_bao_id');
            $table->foreign('nguoi_bao_id')->references('id')->on('users');
            $table->timestamp('ngay_bao')->nullable();;
            $table->timestamp('ngay_xu_ly')->nullable();;

            $table->unsignedInteger('nguoi_xu_ly_id');
            $table->foreign('nguoi_xu_ly_id')->references('id')->on('users');
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
        Schema::dropIfExists('bao_hong');
    }
}
