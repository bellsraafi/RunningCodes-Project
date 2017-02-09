<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTraineesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainees', function (Blueprint $table) {
            //$table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('username')->nullable();
            $table->string('trainee_id',10)->unique();
            $table->string('trainee_type')->nullable();
            $table->string('email')->unique();
            $table->date('dob');
            $table->string('profile_pic')->nullable();
            $table->integer('stateid')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->timestamps();
            $table->primary('trainee_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trainees');
    }
}
