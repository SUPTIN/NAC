<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DadosFichaPRTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dadosNunFichaPR', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idProdutor');
            $table->string('data');
            $table->integer('numercaoInic');
            $table->integer('numercaoFin');
            $table->integer('quantidade');
            $table->integer('autNumeracaoInic');
            $table->integer('autNumeracaoFin');
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
        Schema::drop('dadosNunFichaPR');
    }
}
