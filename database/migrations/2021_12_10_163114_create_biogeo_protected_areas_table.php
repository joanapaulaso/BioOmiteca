<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiogeoProtectedAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biogeo_protected_areas', function (Blueprint $table) {
            $table->bigIncrements('id_biogeo_protected_areas');
            $table->string('project_id')->nullable();
            $table->string('total')->nullable();
            $table->string('federal')->nullable();
            $table->string('estadual')->nullable();
            $table->string('municipal')->nullable();
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
        Schema::dropIfExists('biogeo_protected_areas');
    }
}
