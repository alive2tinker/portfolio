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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('icon')->nullable();
            $table->string('header_image')->nullable();
            $table->json('title');
            $table->json('excerpt');
            $table->decimal('price')->nullable();
            $table->foreignId('user_id');
            $table->boolean('is_featured')->default(0);
            $table->string('price_meta')->nullable();
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
        Schema::dropIfExists('services');
    }
};
