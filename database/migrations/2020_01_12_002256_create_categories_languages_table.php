<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_languages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->index()->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->integer('language_id')->index()->unsigned();
            $table->foreign('language_id')->references('id')->on('languages');
            $table->string('name');
        });

        DB::table('category_languages')->insert(
            [
                ['category_id' => 1 , 'language_id' => 1 , 'name' => 'upholstery'],
                ['category_id' => 2 , 'language_id' => 1 , 'name' => 'tables'],
                ['category_id' => 3 , 'language_id' => 1 , 'name' => 'mirrors'],
                ['category_id' => 4 , 'language_id' => 1 , 'name' => 'lighting'],
                ['category_id' => 5 , 'language_id' => 1 , 'name' => 'rugs']
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
        Schema::dropIfExists('categories_languages');
    }
}
