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
            $table->integer('tai_san_id')->unsigned();
            $table->string('mo_ta');

            $table->integer('nguoi_bao_id')->unsigned();
            $table->timestamp('ngay_bao')->nullable();;
            $table->timestamp('ngay_xu_ly')->nullable();;

            $table->integer('nguoi_xu_ly_id')->unsigned();
            $table->integer('tinh_trang');

            $table->timestamps();

            $table->foreign('tai_san_id')->references('id')->on('tai_san');
            $table->foreign('nguoi_bao_id')->references('id')->on('users');
            $table->foreign('nguoi_xu_ly_id')->references('id')->on('users');
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
