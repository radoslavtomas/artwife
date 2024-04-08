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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('edition_id')->constrained();
            $table->foreignId('status_id')->constrained();
            $table->boolean('featured')->default(false);
            $table->string('image');
            $table->string('title');
            $table->string('slug');
            $table->date('date_start');
            $table->time('time_start');
            $table->date('date_end')->nullable();
            $table->time('time_end')->nullable();
            $table->string('place')->nullable();
            $table->text('teaser')->nullable();
            $table->longText('body');
            $table->string('language')->default('sk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
