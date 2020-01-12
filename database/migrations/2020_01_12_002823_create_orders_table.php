<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id')->index()->unsigned();
            $table->foreign('client_id')->references('id')->on('clients');
            $table->dateTime('requested_at');
            $table->dateTime('processed_at');
            $table->dateTime('closed_at');
            $table->string('track_link');
            $table->decimal('iva');
            $table->decimal('ship_tax');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
