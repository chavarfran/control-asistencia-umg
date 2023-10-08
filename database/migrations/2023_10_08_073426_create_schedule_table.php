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
        Schema::create('tb_schedule', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_curso');
            $table->time('hora');
            $table->string('dia', 255);
            $table->boolean('activo')->default(true);
            $table->unsignedBigInteger('id_usuario')->nullable();

            $table->foreign('id_curso')
                  ->references('id')
                  ->on('tb_course')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_schedule');
    }
};
