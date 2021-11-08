<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDenunciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('denuncias', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('id_usuario');

            $table->string('titulo');
            $table->string('descricao');
            $table->string('imagem');
            $table->string('estado');
            $table->string('municipio');
            $table->string('bairro');
            $table->string('pntReferencia');
            $table->enum('problema',['acessibilidade','agua','esgoto','alagamento','arvores','buracos','lixo']);
            $table->enum('resolvido',['Sim','Não'])->default('Não');
            
            $table->timestamps();

            $table->foreign('id_usuario')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('denuncias');
    }
}