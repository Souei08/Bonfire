<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->longText('refnumber');
            $table->longText('firstname');
            $table->longText('lastname');
            $table->longText('address');
            $table->longText('email');
            $table->longText('number');
            $table->longText('shippingfirstname');
            $table->longText('shippinglastname');
            $table->longText('shippingState');
            $table->longText('shippingCity');
            $table->longText('shippingBarangay');
            $table->longText('shippingAddress');
            $table->longText('shippingNumber');
            $table->longText('payment_method');
            $table->longText('item');
            $table->longText('qty');
            $table->longText('totalPrice');
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
        Schema::dropIfExists('orders');
    }
};
