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
        Schema::create('tb_course', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion')->nullable();
            $table->unsignedBigInteger('id_pensum');
            $table->string('horario')->nullable();
            $table->boolean('activo')->default(true);
            $table->unsignedBigInteger('id_usuario')->nullable();

            $table->foreign('id_pensum')
                  ->references('id')
                  ->on('tb_pensum')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_course');
    }
};
