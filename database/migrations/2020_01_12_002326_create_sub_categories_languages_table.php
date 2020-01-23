<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubCategoriesLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_category_languages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sub_category_id')->index()->unsigned();
            $table->foreign('sub_category_id')->references('id')->on('sub_categories');
            $table->integer('language_id')->index()->unsigned();
            $table->foreign('language_id')->references('id')->on('languages');
            $table->string('name');
        });

        DB::table('sub_category_languages')->insert(
            [

                ['sub_category_id' => 1 , 'language_id' => 1 , 'name' => 'armchair'],
                ['sub_category_id' => 2 , 'language_id' => 1 , 'name' => 'sofa'],
                ['sub_category_id' => 3 , 'language_id' => 1 , 'name' => 'bench'],
                ['sub_category_id' => 4 , 'language_id' => 1 , 'name' => 'stool'],
                ['sub_category_id' => 5 , 'language_id' => 1 , 'name' => 'dining chair'],
                ['sub_category_id' => 6 , 'language_id' => 1 , 'name' => 'bar chair'],
                ['sub_category_id' => 7 , 'language_id' => 1 , 'name' => 'counter stool'],

                ['sub_category_id' => 8 , 'language_id' => 1 , 'name' => 'console'],
                ['sub_category_id' => 9 , 'language_id' => 1 , 'name' => 'sideboard'],
                ['sub_category_id' => 10 , 'language_id' => 1 , 'name' => 'side table'],
                ['sub_category_id' => 11 , 'language_id' => 1 , 'name' => 'center table'],
                ['sub_category_id' => 12 , 'language_id' => 1 , 'name' => 'dining table'],

                ['sub_category_id' => 13 , 'language_id' => 1 , 'name' => 'mirror'],

                ['sub_category_id' => 14 , 'language_id' => 1 , 'name' => 'suspension'],
                ['sub_category_id' => 15 , 'language_id' => 1 , 'name' => 'pendant'],
                ['sub_category_id' => 16 , 'language_id' => 1 , 'name' => 'floor'],
                ['sub_category_id' => 17 , 'language_id' => 1 , 'name' => 'table'],
                ['sub_category_id' => 18 , 'language_id' => 1 , 'name' => 'wall'],

                ['sub_category_id' => 19 , 'language_id' => 1 , 'name' => 'rug']

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
        Schema::dropIfExists('sub_categories_languages');
    }
}
