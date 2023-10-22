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
        Schema::create('tb_pensum', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_pensum');
            $table->boolean('activo')->default(true);

            $table->foreignId('id_usuario')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreignId('id_carrera')
                ->references('id')
                ->on('tb_faculty')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pensum');
    }
};
