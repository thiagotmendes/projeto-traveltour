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
            $table->string('nome');
            $table->string('tel');
            $table->string('email');
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
