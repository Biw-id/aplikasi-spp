<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateOrderdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderdetails', function (Blueprint $table) {
            $table->id();
			$table->unsignedBigInteger('user_id');
			$table->unsignedBigInteger('product_id');
			$table->unsignedBigInteger('payment_id');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id') // user id
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('product_id')
                ->references('id') // product id
                ->on('products')
                ->onDelete('cascade');

            $table->foreign('payment_id')
                ->references('id') // payment id
                ->on('paymentdetails')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderdetails');
    }
}
