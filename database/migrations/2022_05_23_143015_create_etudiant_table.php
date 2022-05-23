<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiant', function (Blueprint $table) {
            $table->integer('Id', true);
            $table->string('firstName');
            $table->string('lastName');
            $table->string('otherName');
            $table->string('admissionNumber');
            $table->string('password', 50);
            $table->string('classId', 10);
            $table->string('classArmId', 10);
            $table->string('dateCreated', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etudiant');
    }
}
