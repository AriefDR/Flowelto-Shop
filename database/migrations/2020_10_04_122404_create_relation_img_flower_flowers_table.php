<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelationImgFlowerFlowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relation_imgFlower_flowers', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('flower_id');
            $table->unsignedInteger('img_flower_id');

            $table->foreign('flower_id')->references('id_flower')->on('flowers');
            $table->foreign('img_flower_id')->references('id_img_flower')->on('img_flowers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relation_imgFlower_flowers');
    }
}
