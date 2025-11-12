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
        Schema::create('skms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');

            // 9 pertanyaan survei
            $table->string('pertanyaan1');
            $table->string('pertanyaan2');
            $table->string('pertanyaan3');
            $table->string('pertanyaan4');
            $table->string('pertanyaan5');
            $table->string('pertanyaan6');
            $table->string('pertanyaan7');
            $table->string('pertanyaan8');
            $table->string('pertanyaan9');

            // saran
            $table->text('saran')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skms');
    }
};
