<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalHistroysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_histroys', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('DOB');
            $table->string('bloodtype');
            $table->string('allergies');
            $table->string('conditions');
            $table->string('surgeries'); 
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
        Schema::dropIfExists('medical_histroys');
    }
}
