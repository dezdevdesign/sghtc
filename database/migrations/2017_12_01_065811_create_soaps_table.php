<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soaps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('chief_complaint')->nullable();
            $table->string('history_present_illness')->nullable();
            $table->string('med_condition')->nullable();
            $table->string('medications')->nullable();
            $table->string('allergies')->nullable();
            $table->string('past_sx')->nullable();
            $table->string('social_hx')->nullable();
            $table->string('blood_pressure')->nullable();
            $table->string('heart_rate')->nullable();
            $table->string('temperature')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('extraoral')->nullable();
            $table->string('intraoral')->nullable();
            $table->string('radiology')->nullable();
            $table->string('test1')->nullable();
            $table->string('test2')->nullable();
            $table->string('test3')->nullable();
            $table->string('test4')->nullable();
            $table->string('cold')->nullable();
            $table->string('ept')->nullable();
            $table->string('perc')->nullable();
            $table->string('palp')->nullable();
            $table->string('prob')->nullable();
            $table->string('mob')->nullable();
            $table->string('assessment')->nullable();
            $table->string('plan')->nullable();
            $table->string('treatment_rendered')->nullable();
            $table->bigInteger('appointment_id')->nullable();
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
        Schema::dropIfExists('soaps');
    }
}
