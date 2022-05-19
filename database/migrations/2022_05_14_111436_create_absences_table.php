<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absences', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('etat');
            $table->integer('seance');
            $table->timestamps();
            // $table->foreign('nom')->references('nom')->on('students');
            // $table->foreign('prenom')->references('prenom')->on('students');
            // $table->foreign('code')->references('code')->on('students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absences');
    }
};
