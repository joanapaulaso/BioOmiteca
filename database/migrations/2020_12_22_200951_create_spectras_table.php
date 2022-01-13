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

            $table->bigIncrements('id_spectra');
            $table->json('mz');
            $table->json('int');
            $table->timestamps();

            // FOREIGN FROM NEW PROJECS
            $table->unsignedBigInteger('id_project');
            $table->foreign('id_project')->references('id_project')->on('new_projects')->onUpdate('cascade')->onDelete('cascade');

            // FOREIGN FROM NEW MOLECULES
            $table->unsignedBigInteger('id_molecule');
            $table->foreign('id_molecule')->references('id_molecule')->on('new_molecules')->onUpdate('cascade')->onDelete('cascade');
            $table->string('name_molecule');
            $table->foreign('name_molecule')->references('name_molecule')->on('new_molecules')->onUpdate('cascade')->onDelete('cascade');
            $table->string('spectra_file');
            $table->foreign('spectra_file')->references('spectra_file')->on('new_molecules')->onUpdate('cascade')->onDelete('cascade');

            // FOREIGN FROM USERS
            $table->unsignedBigInteger('main_researcher');
            $table->foreign('main_researcher')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('responsavel');
            $table->foreign('responsavel')->references('name')->on('users')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /* Schema::disableForeignKeyConstraints(); */
        Schema::dropIfExists('spectras');
    }
}
