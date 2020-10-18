<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id_transaction');
            $table->bigInteger('total_price');
            $table->string('status_payment');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('payment_id');

            $table->foreign('user_id')->references('id_user')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('payment_id')->references('id_payment')->on('type_payments')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('transactions');
    }
}
