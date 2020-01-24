<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_brands', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->index()->unsigned();
            $table->foreign('product_id')->references('id')->on('products');
            $table->integer('brand_id')->index()->unsigned();
            $table->foreign('brand_id')->references('id')->on('brands');
        });

        DB::table('product_brands')->insert(
            [

                ['product_id' => 1, 'brand_id' => 4],
                ['product_id' => 2, 'brand_id' => 4],
                ['product_id' => 3, 'brand_id' => 4],
                ['product_id' => 4, 'brand_id' => 4],
                ['product_id' => 5, 'brand_id' => 4],
                ['product_id' => 6, 'brand_id' => 4],
                ['product_id' => 7, 'brand_id' => 4],
                ['product_id' => 8, 'brand_id' => 4],

                ['product_id' => 9, 'brand_id' => 4],
                ['product_id' => 10, 'brand_id' => 4],
                ['product_id' => 11, 'brand_id' => 4],
                ['product_id' => 12, 'brand_id' => 4],

                ['product_id' => 13, 'brand_id' => 1],
                ['product_id' => 14, 'brand_id' => 1],
                ['product_id' => 15, 'brand_id' => 4],

                ['product_id' => 16, 'brand_id' => 4],
                ['product_id' => 17, 'brand_id' => 4],
                ['product_id' => 18, 'brand_id' => 4],

                ['product_id' => 19, 'brand_id' => 4],

                // ['product_id' => 20, 'brand_id' => 1],
                // ['product_id' => 21, 'brand_id' => 1],

                // ['product_id' => 22, 'brand_id' => 1],

                ['product_id' => 23, 'brand_id' => 1],
                ['product_id' => 24, 'brand_id' => 4],
                ['product_id' => 25, 'brand_id' => 4],
                ['product_id' => 26, 'brand_id' => 1],
                ['product_id' => 27, 'brand_id' => 1],
                ['product_id' => 28, 'brand_id' => 1],

                ['product_id' => 29, 'brand_id' => 4],
                ['product_id' => 30, 'brand_id' => 4],
                // ['product_id' => 31, 'brand_id' => 1],

                ['product_id' => 32, 'brand_id' => 4],
                ['product_id' => 33, 'brand_id' => 4],
                ['product_id' => 34, 'brand_id' => 4],

                ['product_id' => 35, 'brand_id' => 3],
                ['product_id' => 36, 'brand_id' => 1],
                ['product_id' => 37, 'brand_id' => 1],

                ['product_id' => 38, 'brand_id' => 2],
                ['product_id' => 39, 'brand_id' => 2],
                ['product_id' => 40, 'brand_id' => 2],
                ['product_id' => 41, 'brand_id' => 2],
                ['product_id' => 42, 'brand_id' => 2],
                ['product_id' => 43, 'brand_id' => 2],
                ['product_id' => 44, 'brand_id' => 2],
                ['product_id' => 45, 'brand_id' => 2],
                ['product_id' => 46, 'brand_id' => 2],
                ['product_id' => 47, 'brand_id' => 2],
                ['product_id' => 48, 'brand_id' => 2],

                ['product_id' => 49, 'brand_id' => 2],
                ['product_id' => 50, 'brand_id' => 2],
                ['product_id' => 51, 'brand_id' => 2],
                ['product_id' => 52, 'brand_id' => 2],
                ['product_id' => 53, 'brand_id' => 2],
                ['product_id' => 54, 'brand_id' => 2],
                ['product_id' => 55, 'brand_id' => 2],
                ['product_id' => 56, 'brand_id' => 2],
                ['product_id' => 57, 'brand_id' => 2],

                ['product_id' => 58, 'brand_id' => 3],
                ['product_id' => 59, 'brand_id' => 2],
                ['product_id' => 60, 'brand_id' => 1],
                // ['product_id' => 61, 'brand_id' => 1],

                ['product_id' => 62, 'brand_id' => 2],
                ['product_id' => 63, 'brand_id' => 2],
                ['product_id' => 64, 'brand_id' => 2],
                ['product_id' => 65, 'brand_id' => 2],
                ['product_id' => 66, 'brand_id' => 2],
                ['product_id' => 67, 'brand_id' => 2],
                ['product_id' => 68, 'brand_id' => 2],
                ['product_id' => 69, 'brand_id' => 2],
                ['product_id' => 70, 'brand_id' => 2],
                ['product_id' => 71, 'brand_id' => 1]

                // ['product_id' => 72, 'brand_id' => 1]

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
        Schema::dropIfExists('product_brands');
    }
}
