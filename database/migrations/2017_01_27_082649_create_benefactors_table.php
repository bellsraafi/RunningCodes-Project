<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBenefactorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('benefactors', function (Blueprint $table) {
            //$table->increments('id');
            $table->string('company_name');
            $table->string('company_type');
            $table->string('benefactor_id',10)->unique();
            $table->string('email');
            $table->rememberToken();
            $table->timestamps();
            $table->primary('benefactor_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('benefactors');
    }
}
