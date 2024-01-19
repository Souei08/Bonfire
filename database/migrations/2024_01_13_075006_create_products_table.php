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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->longText('prodName');
            $table->longText('category');
            $table->longText('thumbnail');
            $table->longText('description');
            $table->longText('varation');
            $table->longText('weight');
            $table->longText('length')->nullable();
            $table->longText('width')->nullable();
            $table->longText('height')->nullable();
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
        Schema::dropIfExists('products');
    }
};
