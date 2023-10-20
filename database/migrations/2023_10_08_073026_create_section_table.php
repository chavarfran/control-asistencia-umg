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
        Schema::create('tb_section', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->unsignedBigInteger('id_carrera');
            $table->unsignedBigInteger('id_semestre');
            $table->boolean('activo')->default(true);
            $table->unsignedBigInteger('id_usuario')->nullable();

            $table->foreign('id_carrera')
                  ->references('id')
                  ->on('tb_career')
                  ->onDelete('cascade');

            $table->foreign('id_semestre')
                  ->references('id')
                  ->on('tb_semester')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_section');
    }
};
