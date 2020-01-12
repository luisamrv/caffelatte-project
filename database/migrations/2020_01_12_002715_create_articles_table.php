<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('article_type_id')->index()->unsigned();
            $table->foreign('article_type_id')->references('id')->on('article_types');
            $table->string('slug')->index();
            $table->string('issue_code');
            $table->boolean('is_active');
            $table->boolean('is_deleted');
            $table->date('published_at');
            $table->text('key_words');
            $table->text('meta_description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
