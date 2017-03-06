<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCamposAgencia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('agencia', function (Blueprint $table) {
          $table->string('slug');
          $table->string('cep');
          $table->longtext('descricao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('agencia', function (Blueprint $table) {
          $table->dropColumn('slug', 'cep', 'descricao');
        });
    }
}
