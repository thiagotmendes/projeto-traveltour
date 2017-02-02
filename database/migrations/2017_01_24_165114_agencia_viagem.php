<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgenciaViagem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agencia', function (Blueprint $table) {
            $table->increments('idagencia');
            // dados referente à agencia
            $table->string('CNPJ');
            $table->string('data_abertura');
            $table->string('nome_fantasia');
            $table->string('razao_social');
            $table->string('cadastour');
            $table->string('inscrição_estadual');
            $table->string('isento');
            $table->string('inscricao_municipal');
            $table->string('porte');
            $table->string('representante');
            $table->string('cpf_representante');
            $table->string('data_nasc_representante');
            // bloco referente ao contato
            $table->string('tel');
            $table->string('cel');
            $table->string('email');
            $table->string('telefonia_gratuita');
            $table->string('logo');
            $table->string('certificado');
            $table->date('data_inicio_cert');
            $table->date('data_fim_cert');
            $table->string('endereco');
            $table->integer('num');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            $table->integer('idstatus');
            $table->integer('idplano');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agencia');
    }
}
