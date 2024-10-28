<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('periodos', function (Blueprint $table) {
            $table->id();
            $table->date('start')->default(Carbon::now());
            $table->date('end')->default(Carbon::now());
            $table->integer('year')->default(Carbon::now()->year);
            $table->integer('current')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('periodos');
    }
};
