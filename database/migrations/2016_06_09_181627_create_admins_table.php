<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned(); //FK
            $table->integer('admin_num')->nullable();
            $table->string('admin_name')->nullable();
            $table->string('admin_gender')->nullable();
            $table->string('admin_phone')->unique()->nullable();
            $table->string('admin_email')->nullable();
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
        Schema::drop('admins');
    }
}
