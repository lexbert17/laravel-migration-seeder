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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company')->nullable();
            $table->string('from')->nullable();
            $table->string('to')->nullable();
            $table->time('departure_time')->nullable();
            $table->time('arrivals_time')->nullable();
            $table->string('code_train')->nullable();
            $table->tinyInteger('carriages_number')->nullable();
            $table->boolean('delay')->nullable();
            $table->boolean('cancelled')->nullable();
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
        Schema::dropIfExists('trains');
    }
};
