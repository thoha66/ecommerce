<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id')->unsigned();
            $table->integer('staff_id')->unsigned()->nullable();
            $table->integer('order_id')->unsigned();
            $table->string('payment_approve_by_staff_name')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('bank_type')->nullable();
            $table->decimal('payment_total')->nullable();
            $table->string('payment_transaction_id')->nullable();
            $table->timestamp('payment_transaction_date')->nullable();
            $table->string('payment_resit_image')->nullable();
            $table->string('payment_status')->nullable();
            $table->timestamps();

            //Foreign Key Constraints
            $table->foreign('customer_id')
                ->references('id')
                ->on('customers');

            $table->foreign('staff_id')
                ->references('id')
                ->on('staffs');

            $table->foreign('order_id')
                ->references('id')
                ->on('orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('payments');
    }
}
