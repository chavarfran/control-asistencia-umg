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
        Schema::create('tb_assistance', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_catedratico');
            $table->unsignedBigInteger('id_curso');
            $table->unsignedBigInteger('id_tema');
            $table->boolean('activo')->default(true);
            $table->time('hora_entrada')->nullable();
            $table->time('hora_salida')->nullable();
            $table->string('ubicacion', 255)->nullable();
            $table->unsignedBigInteger('id_usuario')->nullable();

            $table->foreign('id_catedratico')
                  ->references('id')
                  ->on('tb_profesor')
                  ->onDelete('cascade');

            $table->foreign('id_curso')
                  ->references('id')
                  ->on('tb_course')
                  ->onDelete('cascade');

            $table->foreign('id_tema')
                  ->references('id')
                  ->on('tb_topics')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_assistance');
    }
};
