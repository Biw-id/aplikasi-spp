<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
            
            $table->foreign('payment_id', 'orderdetails_payment_id_foreign')->references('id')->on('paymentdetails')->onDelete('cascade');
            $table->foreign('product_id', 'orderdetails_product_id_foreign')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('user_id', 'orderdetails_user_id_foreign')->references('id')->on('users')->onDelete('cascade');
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
