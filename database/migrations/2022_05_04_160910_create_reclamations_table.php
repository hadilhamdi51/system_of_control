<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReclamationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reclamations', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->boolean('etat');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('composant_id');
            $table->unsignedBigInteger('classroom_id');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('classroom_id')->references('id')->on('classroomss');
            $table->foreign('composant_id')->references('id')->on('composants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reclamations');
    }
}
