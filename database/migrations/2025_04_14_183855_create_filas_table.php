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
            $table->id('id_fila'); // Primary Key

            $table->unsignedBigInteger('id_paciente');
            $table->unsignedBigInteger('id_unidade');
            $table->unsignedBigInteger('id_medico')->nullable(); // Médico pode ser opcional

            $table->string('status');
            $table->integer('prioridade');

            $table->timestamps(); // Se quiser controlar created_at e updated_at

            // Foreign keys
            $table->foreign('id_paciente')
                ->references('id_paciente')
                ->on('pacientes')
                ->onDelete('cascade');

            $table->foreign('id_unidade')
                ->references('id_unidade')
                ->on('unidades_de_saude')
                ->onDelete('cascade');

            $table->foreign('id_medico')
                ->references('id_medico')
                ->on('medicos')
                ->onDelete('set null'); // Se o médico for excluído, seta como null na fila
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
