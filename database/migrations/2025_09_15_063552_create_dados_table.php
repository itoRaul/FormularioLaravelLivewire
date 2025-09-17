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
        Schema::create('dados', function (Blueprint $table) {
            $table->id();
            $table->string('nomecompleto');
            $table->string('nomesocial')->nullable();
            $table->string('cpf')->unique();
            $table->string('rg')->unique();
            $table->string('email');
            $table->string('telefone');
            $table->string('cep');
            $table->string('logradouro');
            $table->string('numero');
            $table->string('bairro');
            $table->string('complemento')->nullable();
            $table->foreignId('estado_civil_id')->constrained('estados_civis');
            $table->foreignId('grau_instrucao_id')->constrained('graus_instrucaos');
            $table->foreignId('sexo_id')->constrained('sexos');
            $table->foreignId('city_id')->constrained('cities');
            $table->enum('nacionalidade', ['Brasileira', 'Estrangeira']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dados');
    }
};
