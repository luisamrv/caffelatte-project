<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('brands', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->string('email_brand');
            $table->string('website_url');
            $table->boolean('is_active');
            $table->boolean('is_deleted');
        });

        DB::table('brands')->insert(
            [
                ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo', 'email_brand' => 'info@bocadolobo.com', 'website_url' => 'https://www.bocadolobo.com', 'is_active' => 1, 'is_deleted' => 0],
               ['name' => 'Delightfull', 'slug' => 'delightfull', 'email_brand' => 'info@delightfull.eu', 'website_url' => 'https://www.delightfull.eu/en', 'is_active' => 1, 'is_deleted' => 0],
               ['name' => 'Brabbu', 'slug' => 'brabbu', 'email_brand' => 'info@brabbu.com', 'website_url' => 'https://www.brabbu.com', 'is_active' => 1, 'is_deleted' => 0],
               ['name' => 'Essential Home', 'slug' => 'essential-home', 'email_brand' => 'info@essentialhome.eu', 'website_url' => 'https://essentialhome.eu', 'is_active' => 1, 'is_deleted' => 0],
                ['name' => 'Covet House', 'slug' => 'covet-house', 'email_brand' => 'info@covethouse.eu', 'website_url' => 'https://www.covethouse.eu', 'is_active' => 1, 'is_deleted' => 0]
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
        Schema::dropIfExists('brands');
    }
}
