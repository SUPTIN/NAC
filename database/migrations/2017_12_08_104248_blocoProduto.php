<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BlocoProduto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bloco_pr', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numeracao')->index();
            $table->string('quantidade')->default('0');
            $table->string('date');
            $table->string('autN');
            $table->integer('idProdutor')->unsigned();
            $table->foreign('idProdutor')->references('id')->on('ficha_p_rs')->onDelete('cascade');
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
