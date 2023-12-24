<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address');
            $table->string('zip_code');
            $table->string('city');
            $table->string('state');
            $table->string('email');
            $table->string('phone');
            $table->date('checkin_date');
            $table->date('checkout_date');
            $table->string('checkin_time');
            $table->string('checkout_time');
            $table->string('numberof_adults');
            $table->string('numberof_children');
            $table->string('numberof_rooms');
            $table->string('room_1_type');
            $table->string('room_2_type');
            $table->text('special_instructions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
