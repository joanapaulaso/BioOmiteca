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

            $table->bigIncrements('id_project')->index();
            $table->string('species')->index();
            $table->string('species_popular')->index();
            $table->string('world_flora_link');
            $table->string('family')->index();
            $table->string('SISGEN')->index();
            $table->string('institution')->index();
            $table->string('coordination')->index();
            $table->string('financial_support')->index();
            $table->string('publication_mols')->index()->nullable();
            $table->string('publication_maps')->index()->nullable();
            $table->longText('abstract');
            $table->string('repository_mols')->index()->nullable();
            $table->string('repository_maps')->index()->nullable();
            $table->integer('status')->index();
            $table->timestamps();

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
        Schema::dropIfExists('new_projects');
    }
}
