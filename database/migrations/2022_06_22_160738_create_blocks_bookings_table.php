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
        Schema::create('blocks_bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('blocks_id')->constrained('blocks')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('bookings_id')->constrained('bookings')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('blocks_bookings');
    }
};
