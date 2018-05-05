\<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('gender');
            $table->string('street_number')->nullable();
            $table->string('barangay');
            $table->string('municipality');
            $table->string('province');
            $table->string('zip')->nullable();
            $table->string('religion')->nullable();
            $table->string('nationality');
            $table->string('occupation')->nullable();
            $table->date('birth_date');
            $table->integer('age');
            $table->string('birth_place')->nullable();
            $table->string('civil_status');
            $table->string('blood_group');
            $table->string('contact');
            $table->string('other_address')->nullable();
            $table->string('emergency_name')->nullable();
            $table->string('relationship')->nullable();
            $table->string('emergency_address')->nullable();
            $table->string('emergency_contact')->nullable();
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
        Schema::dropIfExists('patients');
    }
}
