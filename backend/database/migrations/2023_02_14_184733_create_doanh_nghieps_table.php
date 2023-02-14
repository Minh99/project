<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoanhNghiepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doanh_nghieps', function (Blueprint $table) {
            $table->id();
            $table->string('ten');
            $table->string('ma_so');
            $table->string('dia_chi');
            $table->string('loai_thong_bao');
            $table->string('thoi_gian');
            $table->string('link_pdf');
            $table->integer('category_id');
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
        Schema::dropIfExists('doanh_nghieps');
    }
}
