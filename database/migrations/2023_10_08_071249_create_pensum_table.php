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
            $table->unsignedBigInteger('id_facultad');
            $table->string('nombre_pensum');
            $table->boolean('activo')->default(true);
            $table->unsignedBigInteger('id_usuario')->nullable();

            $table->foreign('id_facultad')
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
