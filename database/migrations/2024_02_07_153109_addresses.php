<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('addressline1', 100);
            $table->string('addressline2', 100)->nullable();
            $table->string('city', 100);
            $table->string('province', 20);
            $table->string('phone', 20);
            $table->string('postal', 20);
            $table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('addresses');
    }
};

