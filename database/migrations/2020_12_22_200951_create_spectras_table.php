<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpectrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spectras', function (Blueprint $table) {
            $table->bigInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('new_projects')->onDelete('cascade');
            $table->string('nome_projeto');
            $table->foreign('nome_projeto')->references('nome_projeto')->on('new_projects')->onDelete('cascade');
            $table->string('espectro')->nullable();
            $table->foreign('espectro')->references('espectro')->on('new_molecules')->onDelete('cascade');
            $table->string('nome_molecula')->nullable();
            $table->foreign('nome_molecula')->references('nome_molecula')->on('new_molecules')->onDelete('cascade');
            $table->json('mz')->nullable();
            $table->json('int')->nullable();
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
        Schema::dropIfExists('spectras');
    }
}
