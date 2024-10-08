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
        Schema::create('devices', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('category_id')->nullable();

            $table->unsignedBigInteger('brand_id')->nullable();

            $table->string('model_number');

            $table->string('series');

            $table->string('name');            

            $table->string('description');

            $table->string('image_path')->default('no_image_available.jpg')->nullable();

            // ASIN for the product
            // a ten-digit alphanumeric code that identifies products on Amazon
            $table->string('asin')->nullable();

            $table->string('amazon_url')->nullable();

            $table->string('ifixit_url')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devices');
    }
};
