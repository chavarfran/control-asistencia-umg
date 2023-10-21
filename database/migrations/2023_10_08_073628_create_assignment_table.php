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
        Schema::create('tb_assignment', function (Blueprint $table) {
            $table->id();
            $table->boolean('activo')->default(true);
            $table->integer('id_usuario')->nullable();

            $table->foreignId('id_curso')
                  ->references('id')
                  ->on('tb_course')
                  ->onDelete('cascade');
            
            $table->foreignId('id_catedratico')
                  ->references('id')
                  ->on('tb_profesor')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_assignment');
    }
};
