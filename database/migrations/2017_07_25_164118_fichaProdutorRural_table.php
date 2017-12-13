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
        Schema::create('ficha_p_rs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ativo')->default('sim');
            $table->string('contribuinte')->index();
            $table->string('cond')->default('');
            $table->string('inscEstadual');
            $table->string('cpf')->default('Dado desconhecido');
            $table->longtext('endereco')->default('Dado desconhecido');
            $table->string('nIncra')->default('Dado desconhecido');
            $table->string('vencContrato')->default('Dado desconhecido');
            $table->string('nirf')->default('Dado desconhecido');
            $table->string('telefone')->default('Dado desconhecido');
            $table->longtext('pontoReferencia')->default('Dado desconhecido');
            $table->longtext('notasEntregue')->default('Dado desconhecido');
            $table->string('ultFuncFazerMudanca')->default('sem_funcionario');
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
        Schema::drop('ficha_p_rs');
    }
}
