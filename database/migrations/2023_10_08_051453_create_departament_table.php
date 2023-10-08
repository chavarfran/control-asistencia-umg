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
        Schema::create('tb_departament', function (Blueprint $table) {

            $table->id('id_Depto');
            $table->string('nombre_depto');
            $table->boolean('activo')->default(true);
            $table->unsignedBigInteger('id_usuario')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_departament');
    }
};
