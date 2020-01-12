<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOccupationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('occupations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
        });

        DB::table('occupations')->insert(
            [
                ['name' =>'Agent'],
                ['name' =>'Architect'],
                ['name' =>'Blog'],
                ['name' =>'Contractor'],
                ['name' =>'Distributor'],
                ['name' =>'Final Buyer'],
                ['name' =>'Freelancer'],
                ['name' =>'Furniture store'],
                ['name' =>'Hotel'],
                ['name' =>'Interior Designer'],
                ['name' =>'Interior Designer/Architect'],
                ['name' =>'Magazine'],
                ['name' =>'Newspaper'],
                ['name' =>'Online Store'],
                ['name' =>'Publisher'],
                ['name' =>'Radio'],
                ['name' =>'Restaurant'],
                ['name' =>'TV'],
                ['name' =>'Other']
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('occupations');
    }
}
