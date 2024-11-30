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
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lectivo_id');
            $table->unsignedBigInteger('user_id');
            $table->string('user_name');
            $table->dateTime('fecha');
            $table->unsignedBigInteger('lapso')->default(1);
            $table->string('type')->default('test');
            $table->decimal('percentage', 8, 2)->default(100);
            $table->decimal('result', 8, 2)->default(0);
            $table->decimal('final', 8, 2)->default(0);
            $table->string('scale')->nullable();
            $table->foreign('lectivo_id')->references('id')->on('lectivos')
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
        Schema::dropIfExists('tests');
    }
};
