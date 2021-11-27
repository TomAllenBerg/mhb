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
           //$table->bigInteger('user_id');
           //$table->bigInteger('doctor_id');
           $table->string('name')->nullable($value = false);
           $table->float('dosage_amt', 5, 2)->nullable($value = false);
           // From https://studyskills.southwales.ac.uk/maths/mathematics-learning-resources/maths-topic-locator-numbers/units-measurement-drug-calculations/
           $table->enum('dosage_unit', ['kg', 'g', 'mg', 'mcg', 'L', 'mL', 'cc', 'tablets', 'drops'])->nullable($value = false);
           // From https://www.merckmanuals.com/home/drugs/administration-and-kinetics-of-drugs/drug-administration
           $table->enum('route', ['oral', 'subcutaneous injection', 'intramuscular injection', 'intravenous injection', 'inhalation', 'ocular', 'topical'])->nullable($value = false);
           $table->string('instructions')->nullable($value = true);
           $table->string('side_effects')->nullable($value = true);
           $table->timestamps();
 
           //$table->primary(['user_id', 'doctor_id']);
           // $table->foreign('user_id')->references('id')->on('users');
           // $table->foreign('doctor_id')->references('id')->on('doctors');
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
