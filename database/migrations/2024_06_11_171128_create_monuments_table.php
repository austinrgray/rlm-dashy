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
        Schema::create('monuments', function (Blueprint $table) {
            $table->id();
            $table->string('manufacturer')->nullable();
            $table->text('inscription')->nullable();
            $table->string('type')->nullable();
            $table->string('color')->nullable();
            $table->string('base_dimensions')->nullable();
            $table->string('die_dimensions')->nullable();
            $table->string('foundation_dimensions')->nullable();
            $table->boolean('is_installed')->default(false);
            $table->foreignId('order_id')->constrained()->onDelete('cascade');
            $table->foreignId('invoice_id')->constrained()->onDelete('cascade');
            $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monuments');
    }
};
