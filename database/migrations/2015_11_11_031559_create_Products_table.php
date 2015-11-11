<?php

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
        Schema::create('Products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item_name');
            $table->string('item_price');
            $table->string('item_Image_Link');
            $table->string('Category');
            $table->string('SubCategory');
            $table->string('Condition');
            $table->string('Seller_id');

            $table->string('Seller_Name');
            $table->string('Seller_Address');
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
        Schema::drop('Products');
    }
}
