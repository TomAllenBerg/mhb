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
            $table->string('name');
            $table->integer('dosage');
            $table->float('dosage_amt', 5, 2);
            $table->enum('dosage_unit', ['g', 'mg', 'kg', 'L', 'mL', 'tablets', 'drops']);
            // From https://www.merckmanuals.com/home/drugs/administration-and-kinetics-of-drugs/drug-administration
            $table->enum('route', ['oral', 'subcutaneous injection', 'intramuscular injection', 'intravenous injection', 'inhalation', 'ocular', 'topical']);
            $table->string('frequency');
            $table->string('side_effects');
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
