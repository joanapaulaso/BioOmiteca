<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewMoleculesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_molecules', function (Blueprint $table) {
            $table->id('id_molecula')->index();
            $table->bigInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('new_projects');
            $table->string('responsavel');
            $table->foreign('responsavel')->references('responsavel')->on('new_projects');
            $table->string('nome_projeto')->nullable();
            $table->foreign('nome_projeto')->references('nome_projeto')->on('new_projects');
            $table->string('especie');
            $table->foreign('especie')->references('especie')->on('new_projects');
            $table->integer('status');
            $table->foreign('status')->references('status')->on('new_projects')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nome_molecula')->index()->nullable();
            $table->string('espectro')->index()->nullable();
            $table->string('formula')->nullable();
            $table->string('massa')->nullable();
            $table->string('IDPubChem')->nullable();
            $table->string('aplicabilidade')->nullable();
            $table->string('referencia')->nullable();
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
        Schema::dropIfExists('new_molecules');
    }
}
