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
            $table->increments('id');
            $table->string('username',50)->unique();
            $table->string('password',300);
            $table->string('email',50)->unique();
            $table->string('group',50);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
            $table->tinyInteger('active')->default(1);
            $table->tinyInteger('enabled')->default(1);
            $table->tinyInteger('visible')->default(1);
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
