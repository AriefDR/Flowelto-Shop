<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelationCategoryFlowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relation_category_flowers', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('flower_id');
            $table->unsignedInteger('category_id');

            $table->foreign('flower_id')->references('id_flower')->on('flowers');
            $table->foreign('category_id')->references('id_category')->on('category_flowers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relation_category_flowers');
    }
}
