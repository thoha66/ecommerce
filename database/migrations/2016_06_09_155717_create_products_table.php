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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('staff_id')->unsigned(); //FK
            $table->string('product_num');
            $table->string('product_name');
            $table->decimal('product_price',6,2);
            $table->string('product_brand');
            $table->string('product_type');
            $table->integer('product_warranty');
            $table->integer('product_quantity');
            $table->string('product_image');
            $table->timestamps();

            //Foreign Key Constraints
            $table->foreign('staff_id')
                ->references('id')
                ->on('staffs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
