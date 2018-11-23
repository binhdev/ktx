<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phong', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_phong');
            $table->integer('danh_muc_id')->unsigned();
            $table->integer('so_khach_hien_tai')->default(0);
            $table->string('ghi_chu');
            $table->timestamps();
            
            $table->foreign('danh_muc_id')->references('id')->on('danh_muc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phong');
    }
}
