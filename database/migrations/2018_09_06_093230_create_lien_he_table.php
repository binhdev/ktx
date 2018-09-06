<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLienHeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lien_he', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ho_ten');
            $table->string('dien_thoai');
            $table->string('dia_chi');
            $table->string('email');
            $table->string('noi_dung_lien_he');
            $table->string('noi_dung_tra_loi');
            $table->unsignedInteger('nguoi_dung_id');
            $table->foreign('nguoi_dung_id')->references('id')->on('users');
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
        Schema::dropIfExists('lien_he');
    }
}
