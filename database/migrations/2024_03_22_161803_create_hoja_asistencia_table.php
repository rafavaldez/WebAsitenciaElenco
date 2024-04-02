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
        Schema::create('hoja_asistencia', function (Blueprint $table) {
            $table->id(); // Agrega la columna de identificación
            $table->foreignId('estudiantes_id')->constrained('estudiantes')->onDelete('cascade'); // Referencia a la tabla 'estudiantes'
            $table->foreignId('dias_asistencia_id')->constrained('dias_asistencia')->onDelete('cascade'); // Referencia a la tabla 'dias_asistencia'
            $table->time('hora')->nullable();
            $table->string('codigo', 45)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hoja_asistencia');
    }
};
