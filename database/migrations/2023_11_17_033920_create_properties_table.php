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
        Schema::create('properties', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->text('description')->nullable();
            $table->string('duration')->nullable();
            $table->string('type')->nullable();
            $table->string('price')->nullable();
            $table->string('agency_fee')->nullable();
            $table->string('initial_fees')->nullable();
            $table->string('no_bedrooms')->nullable();
            $table->string('no_bathrooms')->nullable();
            $table->string('no_floors')->nullable();
            $table->string('status')->nullable();
            $table->text('images')->nullable();
            $table->string('image')->nullable();
            $table->text('video')->nullable();
            $table->string('address')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('landmark')->nullable();
            $table->text('extra_info')->nullable();
            $table->string('valid_till')->nullable();
            $table->string('reviews')->nullable();
            $table->boolean('sold');
            $table->json('amenities')->nullable();
            $table->integer('views');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
