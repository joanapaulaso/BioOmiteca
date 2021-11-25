<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_projects', function (Blueprint $table) {
            $table->id('id_projeto')->index()->onUpdate('cascade');
            $table->bigInteger('user_id')->index()->onUpdate('cascade');
            $table->string('responsavel')->index()->onUpdate('cascade');
            $table->string('nome_projeto')->index()->onUpdate('cascade');
            $table->string('especie')->index()->onUpdate('cascade');
            $table->string('familia')->nullable();
            $table->string('nome_popular')->nullable();
            $table->string('publicacao')->nullable();
            $table->string('resumo')->nullable();
            $table->string('instituicao')->nullable();
            $table->string('coordenacao')->nullable();
            $table->string('financiamento')->nullable();
            $table->string('repositorio')->nullable();
            $table->string('experimento')->nullable();
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
        Schema::dropIfExists('new_projects');
    }
}
