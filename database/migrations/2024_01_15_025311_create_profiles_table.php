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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('uid');
            $table->longText('profile_picture');
            $table->longText('lastname');
            $table->longText('firstname');
            $table->longText('state')->nullable();
            $table->longText('city')->nullable();
            $table->longText('barangay')->nullable();
            $table->longText('address')->nullable();
            $table->longText('email')->nullable();
            $table->longText('number')->nullable();
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
        Schema::dropIfExists('profiles');
    }
};
