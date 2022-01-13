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

            $table->bigIncrements('id_molecule');
            $table->string('name_molecule')->index();
            $table->float('mass');
            $table->string('adduct');
            $table->string('formula');
            $table->integer('IDPubChem');
            $table->longText('applicability');
            $table->longText('biblio_ref');
            $table->string('spectra_file')->index();
            $table->timestamps();

            // FOREIGN FROM NEW PROJECTS
            $table->unsignedBigInteger('id_project');
            $table->foreign('id_project')->references('id_project')->on('new_projects')->onUpdate('cascade')->onDelete('cascade');
            $table->string('species');
            $table->foreign('species')->references('species')->on('new_projects')->onUpdate('cascade')->onDelete('cascade');
            $table->string('species_popular');
            $table->foreign('species_popular')->references('species_popular')->on('new_projects')->onUpdate('cascade')->onDelete('cascade');
            $table->string('family');
            $table->foreign('family')->references('family')->on('new_projects')->onUpdate('cascade')->onDelete('cascade');
            $table->string('SISGEN');
            $table->foreign('SISGEN')->references('SISGEN')->on('new_projects')->onUpdate('cascade')->onDelete('cascade');
            $table->string('institution');
            $table->foreign('institution')->references('institution')->on('new_projects')->onUpdate('cascade')->onDelete('cascade');
            $table->string('coordination');
            $table->foreign('coordination')->references('coordination')->on('new_projects')->onUpdate('cascade')->onDelete('cascade');
            $table->string('financial_support');
            $table->foreign('financial_support')->references('financial_support')->on('new_projects')->onUpdate('cascade')->onDelete('cascade');
            $table->string('publication_mols');
            $table->foreign('publication_mols')->references('publication_mols')->on('new_projects')->onUpdate('cascade')->onDelete('cascade');
            $table->string('repository_mols');
            $table->foreign('repository_mols')->references('repository_mols')->on('new_projects')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('status');
            $table->foreign('status')->references('status')->on('new_projects')->onUpdate('cascade')->onDelete('cascade');

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
        // Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('new_molecules');
    }
}
