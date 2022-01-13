<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetaboExperimentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metabo_experiments', function (Blueprint $table) {
            $table->bigIncrements('id_metabo_experiments');
            $table->string('project_id')->nullable();
            $table->string('plant_organ')->nullable();
            $table->longText('extraction_summary')->nullable();
            $table->string('instrument')->nullable();
            $table->string('approach')->nullable();
            $table->string('ion_mode')->nullable();
            $table->string('id_software')->nullable();
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
        Schema::dropIfExists('metabo_experiments');
    }
}
