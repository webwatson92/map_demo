<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ecole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecoles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_ecole');
            $table->string('categorie_ecole');
            $table->double('lattitude', 15, 8);
            $table->double('logitude', 15, 8);
            $table->string('site_internet');
            $table->boolean('deleted_at');
            $table->integer('id_ville')->unsigned()->index();
            $table->integer('id_pays')->unsigned()->index();
            $table->timestamps();
        });

        Schema::create('ecole_filiere', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ecole_id')->unsigned()->index();
            $table->integer('filiere_id')->unsigned()->index();
            $table->foreign('ecole_id')->references('id')->on('ecoles')->onDelete('cascade');
            $table->foreign('filiere_id')->references('id')->on('filieres')->onDelete('cascade');        
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ecoles');
    }
}
