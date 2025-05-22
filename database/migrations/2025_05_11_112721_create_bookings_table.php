<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->unsignedTinyInteger('age');
            $table->enum('gender', ['Male', 'Female', 'Other']);
            $table->string('state');
            $table->string('nationality');
            $table->text('address');
            $table->string('emergency_contact_name');
            $table->string('emergency_contact_phone', 20);
            $table->text('medical_info')->nullable();
            $table->string('trek');
            $table->date('trek_date');
            $table->unsignedTinyInteger('participants')->default(1);
            $table->string('duration')->nullable();
            $table->decimal('total_amount', 10, 2);
            $table->boolean('porter')->default(false);
            $table->boolean('photography')->default(false);
            $table->boolean('insurance')->default(false);
            $table->decimal('total_payable_amount', 10, 2);
            $table->text('special_requests')->nullable();
            $table->enum('payment_method', ['UPI']);
            $table->timestamp('payment_date')->nullable();
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
        Schema::dropIfExists('bookings');
    }
}
