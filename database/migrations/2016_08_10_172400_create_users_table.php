<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('users',function(Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->string('email',50)->unique();
            $table->string('password',100);
            $table->string('avatar',100)->nullable();
            $table->string('username',100)->nullable()->unique();
            $table->enum('status',['pending','active','forbidden'])->default('pending');
            $table->text('sign',200)->nullable();
            $table->rememberToken();

            $table->timestamps();
            $table->softDeletes();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('users');
    }
}
