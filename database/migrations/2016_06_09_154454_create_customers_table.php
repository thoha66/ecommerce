<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned(); //FK
            $table->integer('customer_num')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('customer_gender')->nullable();
            $table->string('customer_phone')->nullable();
            $table->string('customer_email')->unique()->nullable();
            $table->timestamps();

            //Foreign Key Constraints
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('customers');
    }
}
