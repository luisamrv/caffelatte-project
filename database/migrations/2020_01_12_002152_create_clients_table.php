<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('country_id')->index()->unsigned();
            $table->foreign('country_id')->references('id')->on('countries');
            $table->integer('occupation_id')->index()->unsigned();
            $table->foreign('occupation_id')->references('id')->on('occupations');
            $table->string('city');
            $table->string('address');
            $table->string('zip_code');
            $table->string('phone');
            $table->string('company');
            $table->string('client_key')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
