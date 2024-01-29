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
        Schema::create('shippinginfos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('uid');
            $table->longText('firstname');
            $table->longText('lastname');
            $table->longText('state');
            $table->longText('city');
            $table->longText('barangay');
            $table->longText('address');
            $table->longText('email');
            $table->longText('number');
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
        Schema::dropIfExists('shippinginfos');
    }
};
