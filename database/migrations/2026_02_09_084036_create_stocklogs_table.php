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
        Schema::create('tbl_stocklogs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('item_id')
                  ->constrained()
                  ->cascadeOnDelete();
            $table->foreignId('subbidang_id')
                  ->constrained('tbl_subbidang')
                  ->cascadeOnDelete();
            $table->foreignId('user_id')
                  ->constrained()
                  ->cascadeOnDelete();
            $table->enum('type', ['IN', 'OUT']);
            $table->integer('quantity');
            $table->text('note')->nullable();

            $table->timestamps();
                });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stocklogs');
    }
};
