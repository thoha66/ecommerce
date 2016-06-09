<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned(); //FK
            $table->integer('staff_num')->nullable();
            $table->string('staff_name')->nullable();
            $table->string('staff_gender')->nullable();
            $table->string('staff_phone')->unique()->nullable();
            $table->string('staff_email')->nullable();
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
        Schema::drop('staffs');
    }
}
