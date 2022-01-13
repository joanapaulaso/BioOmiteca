<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewMapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_maps', function (Blueprint $table) {

            $table->bigIncrements('id_maps');
            $table->longText('maps_abstract')->nullable();
            $table->string('map1_file')->nullable();
            $table->string('map2_file')->nullable();
            $table->string('map3_file')->nullable();
            $table->string('map4_file')->nullable();
            $table->string('map5_file')->nullable();
            $table->longText('map1_desc')->nullable();
            $table->longText('map2_desc')->nullable();
            $table->longText('map3_desc')->nullable();
            $table->longText('map4_desc')->nullable();
            $table->longText('map5_desc')->nullable();
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
            $table->string('publication_maps');
            $table->foreign('publication_maps')->references('publication_maps')->on('new_projects')->onUpdate('cascade')->onDelete('cascade');
            $table->string('repository_maps');
            $table->foreign('repository_maps')->references('repository_maps')->on('new_projects')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('new_maps');
    }
}
