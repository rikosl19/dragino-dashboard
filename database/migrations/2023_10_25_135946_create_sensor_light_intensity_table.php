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
        Schema::create('sensor_light_intensity', function (Blueprint $table) {
            $table->id();
            $table->string('device')->nullable(false);
            $table->float('lumen')->nullable(false);
            $table->timestamp('datetime')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sensor_light_intensity');
    }
};
