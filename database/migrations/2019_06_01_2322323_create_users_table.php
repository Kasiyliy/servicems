<?php

use Illuminate\Support\Facades\Schema;
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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            $table->string('middle_name', 255)->nullable();
            $table->string('phone_number', 255)->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');

            $table->bigInteger('role_id')->unsigned();
            $table->foreign('role_id')
                ->references('id')
                ->on('roles');

            $table->bigInteger('gender_id')->unsigned();
            $table->foreign('gender_id')
                ->references('id')
                ->on('genders');
            $table->date('birth_date');
            $table->rememberToken();
            $table->softDeletes();
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
        Schema::dropIfExists('users');
    }
}
