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
        Schema::create('tb_profesor', function (Blueprint $table) {
            $table->id();
            $table->string('primer_nombre');
            $table->string('segundo_nombre')->nullable();
            $table->string('primer_apellido');
            $table->string('segundo_apellido')->nullable();
            $table->string('dpi', 20);
            $table->string('email');
            $table->string('telefono', 20);
            $table->string('direccion')->nullable();
            $table->string('codigo_catedratico');
            $table->binary('foto')->nullable();
            $table->boolean('activo')->default(true);
            $table->integer('id_usuario')->nullable();

            $table->foreignId('id_municipio')
                  ->references('id_municipio')
                  ->on('tb_municipio')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_profesor');
    }
};
