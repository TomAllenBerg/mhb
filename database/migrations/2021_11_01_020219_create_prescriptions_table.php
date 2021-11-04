<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create schema for prescriptions
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->id();
            $table->string('p_name');
            //$table->string('name');
            //$table->integer('strength');
            $table->integer('dosage');
            //$table->string('side_effects');
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
        Schema::dropIfExists('prescriptions');
    }
}
