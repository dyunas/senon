<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignmentsReceivedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignments_received', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date_assigned');
            $table->string('insurer', 20);
            $table->string('broker');
            $table->string('ref_no', 32);
            $table->string('name_insured');
            $table->string('adjuster', 50);
            $table->string('pol_no');
            $table->string('pol_type', 50);
            $table->string('risk_location');
            $table->string('nature_loss', 50);
            $table->date('date_loss');
            $table->string('contact_person');
            $table->decimal('loss_reserve', 10, 2);
            $table->string('status', 100);
            $table->string('encoded_by', 100);
            $table->string('updated_by', 100);
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
        Schema::dropIfExists('assignments_received');
    }
}
