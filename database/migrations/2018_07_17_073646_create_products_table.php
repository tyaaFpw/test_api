<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::defaultStringLength(191);
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('prod_name');
            $table->integer('prod_price');
            $table->integer('prod_stock');
            $table->string('prod_type');
            $table->text('prod_desc');
            $table->integer('prod_discount');
            $table->timestamps();
        });
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
