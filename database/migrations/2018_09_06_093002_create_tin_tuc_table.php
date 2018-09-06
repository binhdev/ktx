<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTinTucTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tin_tuc', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tieu_de');
            $table->string('tom_tat');
            $table->string('noi_dung');
            $table->string('anh_minh_hoa');
            $table->string('file_dinh_kem');
            $table->timestamp('ngay_dang_tin');
            $table->unsignedInteger('the_loai_tin_id');
            $table->foreign('the_loai_tin_id')->references('id')->on('the_loai_tin');
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
        Schema::dropIfExists('tin_tuc');
    }
}
