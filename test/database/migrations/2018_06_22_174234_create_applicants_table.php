<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('f_name');
            $table->string('s_name');
            $table->date('birth_date');
            $table->integer('place_id');
            $table->integer('school_id');
            $table->integer('faculty_id');
            $table->integer('specialty_id');
            $table->string('type_of_study');
            $table->string('address');
            $table->string('phone');
            $table->integer('point');
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
        Schema::dropIfExists('applicants');
    }
}
