<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FichaProdutorRuralTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichaProdutorRural', function (Blueprint $table) {
            $table->increments('id');
            $table->string('contribuintes')->index();
            $table->string('cond');
            $table->string('culturas');
            $table->string('area');
            $table->string('inscEstadual');
            $table->string('cpf');
            $table->string('endereco');
            $table->string('incra');
            $table->string('vencContrato');
            $table->string('nirf');
            $table->string('telefone');
            $table->string('pontoRef');
            $table->string('ultFuncFazerMudanca');
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
        Schema::drop('fichaProdutorRural');
    }
}
