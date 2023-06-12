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
        Schema::create('cargo', function (Blueprint $table) {
            $table->id();
            $table->string('cbo');
            $table->string('cargo_nome')->nullable();
            $table->string('carga_horaria')->nullable();
            $table->string('descricao')->nullable();
            $table->enum('situacao', ['ATIVO','INATIVO'])->default('ATIVO');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cargo');
    }
};
