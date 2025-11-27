<?php

declare(strict_types=1);

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
        Schema::create('categories', function (Blueprint $table): void {
            $table->id();
            $table->uuid()->unique();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->string('featured_image');
            $table->longText('description')->nullable();
            $table->string('status')->default('active');
            $table->timestamps();
        });
    }
};
