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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('EventID')->unique();
            $table->string('EventDay');
            $table->string('EventMonth');
            $table->string('EventYear');
            $table->string('EventTitle')->unique();
            $table->string('EventLocation');
            $table->string('EventStartTime');
            $table->string('EventEndTime');
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
        Schema::dropIfExists('events');
    }
};
