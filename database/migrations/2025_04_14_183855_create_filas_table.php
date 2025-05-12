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
    Schema::create('filas', function (Blueprint $table) {
        $table->id('id_fila'); // PK
        $table->unsignedBigInteger('id_paciente');
        $table->unsignedBigInteger('id_unidade');
        $table->unsignedBigInteger('id_medico');

        $table->string('prioridade');
        $table->string('status');
        $table->dateTime('data_entrada');
        $table->dateTime('data_saida')->nullable();
        $table->timestamps();

        // Chaves estrangeiras
        $table->foreign('id_paciente')->references('id_paciente')->on('pacientes')->onDelete('cascade');
        $table->foreign('id_unidade')->references('id_unidade')->on('unidades_de_saude')->onDelete('cascade');
        $table->foreign('id_medico')->references('id_medico')->on('medicos')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filas');
    }
};
