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
        Schema::create('tb_career', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',255);
            $table->text('descripcion')->nullable();
            $table->unsignedBigInteger('id_faculty');
            $table->boolean('activo')->default(true);
            $table->unsignedBigInteger('id_usuario')->nullable();

            $table->foreign('id_faculty')
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
        Schema::dropIfExists('tb_career');
    }
};
