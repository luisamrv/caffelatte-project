<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sub_category_id')->index()->unsigned();
            $table->foreign('sub_category_id')->references('id')->on('sub_categories');
            $table->string('name');
            $table->string('slug')->index();
            $table->boolean('is_bestseller');
            $table->text('key_words');
            $table->text('meta_description');
            $table->boolean('is_new');
            $table->boolean('is_partner');
            $table->boolean('is_active');
            $table->boolean('is_deleted');
            $table->integer('order');
        });


        DB::table('products')->insert(
            [

                ['sub_category_id' => 1, 'name' => 'Carver', 'slug' => 'carver-armchair',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 1, 'name' => 'Marco', 'slug' => 'marco-armchair',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 1, 'name' => 'Monroe', 'slug' => 'monroe-armchair',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 1, 'name' => 'Dandridge', 'slug' => 'dandridge-armchair',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 1, 'name' => 'Charlotte', 'slug' => 'charlotte-armchair',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 1, 'name' => 'Loren', 'slug' => 'loren-armchair',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 1, 'name' => 'Mansfield', 'slug' => 'mansfield-armchair',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 1, 'name' => 'Grace', 'slug' => 'grace-armchair',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],

                ['sub_category_id' => 2, 'name' => 'Loren', 'slug' => 'loren-sofa',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 2, 'name' => 'Marco', 'slug' => 'marco-sofa',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 2, 'name' => 'Novak', 'slug' => 'novak-sofa',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 2, 'name' => 'Romero', 'slug' => 'romero-sofa',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],

                ['sub_category_id' => 3, 'name' => 'Macchiato', 'slug' => 'macchiato-stool',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 3, 'name' => 'Cocoa', 'slug' => 'cocoa-stool',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 3, 'name' => 'Florence', 'slug' => 'florence-stool',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],

                ['sub_category_id' => 5, 'name' => 'Collins', 'slug' => 'collins-dining-chair',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 5, 'name' => 'Marco', 'slug' => 'marco-dining-chair',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 5, 'name' => 'Loren', 'slug' => 'loren-dining-chair',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],

                ['sub_category_id' => 6, 'name' => 'Loren', 'slug' => 'loren-bar-chair',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],

                ['sub_category_id' => 8, 'name' => 'Aroma', 'slug' => 'aroma-console',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 0, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 8, 'name' => 'Liberica', 'slug' => 'liberica-console',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 0, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],

                ['sub_category_id' => 9, 'name' => 'Kafe', 'slug' => 'kafe-sideboard',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 0, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],

                ['sub_category_id' => 10, 'name' => 'Ristretto', 'slug' => 'ristretto-side-table',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 10, 'name' => 'Jacobsen', 'slug' => 'jacobsen-side-table',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 10, 'name' => 'Vinicius', 'slug' => 'vinicius-side-table',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 10, 'name' => 'Times', 'slug' => 'times-side-table',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 0, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 10, 'name' => 'Vanilla', 'slug' => 'vanilla-side-table',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 10, 'name' => 'Frappe', 'slug' => 'frappe-side-table',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],

                ['sub_category_id' => 11, 'name' => 'Launter', 'slug' => 'launter-center-table',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 11, 'name' => 'Florence', 'slug' => 'florence-center-table',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 11, 'name' => 'Robusta', 'slug' => 'robusta-center-table',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 0, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],

                ['sub_category_id' => 12, 'name' => 'Bertoia Oval', 'slug' => 'bertoia-oval-dining-table',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 12, 'name' => 'Bertoia', 'slug' => 'bertoia-dining-table',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 12, 'name' => 'Vinicius', 'slug' => 'vinicius-dining-table',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],

                ['sub_category_id' => 13, 'name' => 'Iris', 'slug' => 'iris-mirror',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 13, 'name' => 'Kilimanjaro', 'slug' => 'kilimanjaro-mirror',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 13, 'name' => 'Persia', 'slug' => 'persia-mirror',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],

                ['sub_category_id' => 14, 'name' => 'Simone', 'slug' => 'simone-suspension-lamp',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 14, 'name' => 'Kravitz', 'slug' => 'kravitz-suspension',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 0, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 14, 'name' => 'Abbey', 'slug' => 'abbey-suspension',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 0, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 15, 'name' => 'Marcus', 'slug' => 'marcus-pendant',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 0, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 14, 'name' => 'Marcus', 'slug' => 'marcus-suspension-lamp',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 14, 'name' => 'Duke', 'slug' => 'duke-pendant-lamp',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 14, 'name' => 'Charles', 'slug' => 'charles-suspension',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 0, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 14, 'name' => 'Ella', 'slug' => 'ella-suspension',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 0, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 14, 'name' => 'Coltrane', 'slug' => 'coltrane-suspension-lamp',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 14, 'name' => 'Ike', 'slug' => 'ike-suspension-lamp',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 15, 'name' => 'Ike', 'slug' => 'ike-pendant',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 0, 'is_deleted' => 0, 'order' => 1],

                ['sub_category_id' => 18, 'name' => 'Neil', 'slug' => 'neil-wall-lamp',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 18, 'name' => 'Evans', 'slug' => 'evans-wall-lamp',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 18, 'name' => 'Charles', 'slug' => 'charles-wall-lamp',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 18, 'name' => 'Galliano', 'slug' => 'galliano-wall',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 0, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 18, 'name' => 'Marcus', 'slug' => 'marcus-wall',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 0, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 18, 'name' => 'Ella', 'slug' => 'ella-wall',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 0, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 18, 'name' => 'Miles', 'slug' => 'miles-wall-lamp',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 18, 'name' => 'Piazzolla', 'slug' => 'piazzolla-wall',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 0, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 18, 'name' => 'Simone', 'slug' => 'simone-wall-lamp',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],

                ['sub_category_id' => 17, 'name' => 'Apache', 'slug' => 'apache-table-lamp',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 17, 'name' => 'Miles', 'slug' => 'miles-table-lamp',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 17, 'name' => 'Bombon', 'slug' => 'bombon-table-lamp',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 17, 'name' => 'Winnow', 'slug' => 'winnow-table-lamp',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 0, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],

                ['sub_category_id' => 16, 'name' => 'Herbie', 'slug' => 'herbie-floor',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 0, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 16, 'name' => 'Cole', 'slug' => 'cole-floor',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 0, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 16, 'name' => 'Coleman', 'slug' => 'coleman-floor',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 0, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 16, 'name' => 'Armstrong', 'slug' => 'armstrong-floor',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 0, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 16, 'name' => 'Ike', 'slug' => 'ike-floor-lamp',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 16, 'name' => 'Miles', 'slug' => 'miles-floor-lamp',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 16, 'name' => 'Simone', 'slug' => 'simone-floor',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 0, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 16, 'name' => 'Duke', 'slug' => 'duke-floor-lamp',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 16, 'name' => 'Evans', 'slug' => 'evans-floor',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 0, 'is_deleted' => 0, 'order' => 1],
                ['sub_category_id' => 16, 'name' => 'Espresso', 'slug' => 'espresso-floor-lamp',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 1, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1],

                ['sub_category_id' => 19, 'name' => 'Jute', 'slug' => 'jute-rug',  'is_bestseller' => 0, 'key_words' => '', 'meta_description' => '', 'is_new' => 0, 'is_partner' => 0, 'is_active' => 1, 'is_deleted' => 0, 'order' => 1]

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
        Schema::dropIfExists('products');
    }
}
