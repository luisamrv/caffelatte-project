<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->index()->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->string('slug')->index();
        });

        DB::table('sub_categories')->insert(
            [
                ['category_id' => 1, 'slug' => 'armchair'],
                ['category_id' => 1, 'slug' => 'sofa'],
                ['category_id' => 1, 'slug' => 'bench'],
                ['category_id' => 1, 'slug' => 'stool'],
                ['category_id' => 1, 'slug' => 'dining-chair'],
                ['category_id' => 1, 'slug' => 'bar-chair'],
                ['category_id' => 1, 'slug' => 'counter-stool'],
                
                ['category_id' => 2, 'slug' => 'console'],
                ['category_id' => 2, 'slug' => 'sideboard'],
                ['category_id' => 2, 'slug' => 'side-table'],
                ['category_id' => 2, 'slug' => 'center-table'],
                ['category_id' => 2, 'slug' => 'dining-table'],

                ['category_id' => 3, 'slug' => 'mirror'],

                ['category_id' => 4, 'slug' => 'suspension'],
                ['category_id' => 4, 'slug' => 'pendant'],
                ['category_id' => 4, 'slug' => 'floor'],
                ['category_id' => 4, 'slug' => 'table'],
                ['category_id' => 4, 'slug' => 'wall'],

                ['category_id' => 5, 'slug' => 'rug']
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
        Schema::dropIfExists('sub_categories');
    }
}
