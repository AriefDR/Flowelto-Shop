<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImgFlowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('img_flowers', function (Blueprint $table) {
            $table->increments('id_img_flower');
            $table->string('img_flower');
            $table->unsignedInteger('flower_id');

            $table->foreign('flower_id')->references('id_flower')->on('flowers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('img_flowers');
    }
}
