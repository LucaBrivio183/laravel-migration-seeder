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
            $table->timestamps();
            $table->string('company', 25);
            $table->string('departure_station', 25);
            $table->string('arrival_station', 25);
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->string('train_code', 15);
            $table->unsignedTinyInteger('wagons');
            $table->boolean('on_time')->default(1);
            $table->boolean('cancelled')->default(0);
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
