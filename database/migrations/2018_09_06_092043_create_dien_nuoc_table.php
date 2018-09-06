<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDienNuocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dien_nuoc', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('phong_id');
            $table->foreign('phong_id')->references('id')->on('phong');

            $table->timestamp('tu_ngay')->nullable();;
            $table->timestamp('den_ngay')->nullable();;

            $table->integer('chi_so_dien_cu');
            $table->integer('chi_so_dien_moi');

            $table->double('don_gia_dien');

            $table->integer('chi_so_nuoc_cu');
            $table->integer('chi_so_nuoc_moi');

            $table->double('don_gia_nuoc');

            $table->double('tong_tien_dien_nuoc');
            $table->string('ghi_chu');

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
        Schema::dropIfExists('dien_nuoc');
    }
}
