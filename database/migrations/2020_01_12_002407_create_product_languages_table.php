<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_languages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->index()->unsigned();
            $table->foreign('product_id')->references('id')->on('products');
            $table->integer('language_id')->index()->unsigned();
            $table->foreign('language_id')->references('id')->on('languages');
            $table->text('description')->nullable();
            $table->text('tec_info')->nullable();
            $table->text('dimensions')->nullable();
        });

        DB::table('product_languages')->insert(
            [

                ['product_id' => 1,  'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 2,  'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 3,  'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 4,  'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 5,  'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 6,  'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 7,  'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 8,  'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],

                ['product_id' => 9,  'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 10, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 11, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 12, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],

                ['product_id' => 13, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 14, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 15, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],

                ['product_id' => 16, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 17, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 18, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],

                ['product_id' => 19, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],

                ['product_id' => 20, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 21, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],

                ['product_id' => 22, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],

                ['product_id' => 23, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 24, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 25, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 26, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 27, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 28, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],

                ['product_id' => 29, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 30, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 31, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],

                ['product_id' => 32, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 33, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 34, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],

                ['product_id' => 35, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 36, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 37, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],

                ['product_id' => 38, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 39, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 40, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 41, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 42, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 43, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 44, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 45, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 46, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 47, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 48, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],

                ['product_id' => 49, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 50, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 51, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 52, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 53, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 54, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 55, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 56, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 57, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],

                ['product_id' => 58, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 59, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 60, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 61, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],

                ['product_id' => 62, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 63, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 64, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 65, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 66, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 67, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 68, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 69, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 70, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],
                ['product_id' => 71, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => ''],

                ['product_id' => 72, 'language_id' => 1,  'description' => '', 'tec_info' => '', 'dimensions' => '']

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
        Schema::dropIfExists('product_languages');
    }
}
