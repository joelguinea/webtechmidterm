<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelManagementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_management', function (Blueprint $table) {
            $table->id();
            $table->string('hotel_name');
            $table->string('address');
            $table->dateTime('date_time_of_checkin');
            $table->dateTime('date_time_of_checkout');
            $table->decimal('room_price',10,2);
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
        Schema::dropIfExists('hotel_management');
    }
}
