<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Set default value for existing NULL penilaian
        DB::table('skms')->whereNull('penilaian')->update(['penilaian' => '']);

        Schema::table('skms', function (Blueprint $table) {
            $table->text('penilaian')->nullable(false)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('skms', function (Blueprint $table) {
            $table->text('penilaian')->nullable()->change();
        });
    }
};
