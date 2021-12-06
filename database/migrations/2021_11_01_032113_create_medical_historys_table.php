<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalHistorysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_historys', function (Blueprint $table) {
            //$table->id();
            $table->string('name');
            $table->string('DOB');
            $table->string('bloodType');
            $table->string('allergies');
            $table->string('conditions');
            $table->string('surgeryName');
            $table->string('surgeon');
            $table->string('surgeryDate');
            $table->text('surgeryDesc');
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
        Schema::dropIfExists('medical_historys');
    }
}
