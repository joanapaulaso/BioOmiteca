<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiogeoExperimentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biogeo_experiments', function (Blueprint $table) {
            $table->bigIncrements('id_biogeo_experiments');
            $table->string('project_id')->nullable();
            $table->string('resolution')->nullable();
            $table->string('imp_var_1')->nullable();
            $table->string('imp_var_2')->nullable();
            $table->string('imp_var_3')->nullable();
            $table->string('imp_var_4')->nullable();
            $table->string('imp_var_5')->nullable();
            $table->string('algorithms')->nullable();
            $table->string('ensemble')->nullable();
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
        Schema::dropIfExists('biogeo_experiments');
    }
}
