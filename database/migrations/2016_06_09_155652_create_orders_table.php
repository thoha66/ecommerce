<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->integer('customer_id')->unsigned(); //FK
            $table->string('order_total_payment')->nullable();
            $table->enum('order_status', ['BELUM BAYAR','DALAM PENGESAHAN PEMBAYARAN', 'SUDAH BAYAR'])->nullable();
            $table->string('order_address')->nullable();
            $table->timestamps();

            //Foreign Key Constraints
            $table->foreign('customer_id')
                ->references('id')
                ->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
    }
}
