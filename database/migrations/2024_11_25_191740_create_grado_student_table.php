<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('grado_student', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pivot_grado_sede_id')->nullable();
            $table->unsignedBigInteger('periodo_id');
            $table->unsignedBigInteger('sede_id');
            $table->unsignedBigInteger('grado_id');
            $table->string('periodo_name')->nullable();
            $table->string('grado_name')->nullable();
            $table->integer('numero')->default(1);
            $table->string('letra')->default('A');
            $table->string('name');
            $table->string('last_name')->nullable();
            $table->integer('cedula')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('grado_id')->references('id')->on('grados')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grado_student');
    }
};
