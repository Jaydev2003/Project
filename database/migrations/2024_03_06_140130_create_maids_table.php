<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatemaidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maids', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('city');
            $table->integer('experience');
            $table->string('working_type');
            $table->integer('hourly_rate');
            $table->string('status');
            $table->bigInteger('mobile');
            $table->bigInteger('alternate_mobile');
            $table->string('email');
            $table->bigInteger('idproof')->unique();
            $table->integer('monthly_rate');
            $table->integer('daily_rate');
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
        Schema::dropIfExists('maids');
    }
};
