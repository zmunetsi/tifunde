<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('coach_id')
                ->comment('Foreign key for the coach')
                ->references('id')->on('users');
            $table->unsignedBigInteger('job_seeker_id')
                 ->comment('Foreign key for the job seeker')
                  ->references('id')->on('users');
            $table->string('status');
            $table->string('appointment_type');
            $table->string('appointment_topics');
            $table->string('notes')->nullable();
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
        Schema::dropIfExists('appointments');
    }
}
