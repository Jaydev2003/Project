<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class CreateBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('client_address');
            $table->string('client_landmark')->nullable();
            $table->date('booking_date');
            $table->dateTime('start_date_time');
            $table->dateTime('end_date_time');
            $table->unsignedBigInteger('maid_id');

            $table->integer('booking_type');
            $table->integer('booking_rate');
            $table->integer('status');
            $table->string('remarks')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
