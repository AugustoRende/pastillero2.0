<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');

            $table->string('username',50)->unique();
            $table->string('password',300);
            $table->string('name',50);
            $table->string('last_name',50);
            $table->dateTime('birth');
            $table->string('pathology',50);
            $table->timestamps();
            $table->softDeletes();
            $table->tinyInteger('active')->default(1);
            $table->tinyInteger('enabled')->default(1);
            $table->tinyInteger('visible')->default(1);

            $table->integer('organization_id')->unsigned()->default(1);
            $table->foreign('organization_id')->references('id')->on('organizations')->onDelete('cascade')->onUpdate('no action');
            $table->integer('doctor_id')->unsigned()->default(1);
            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade')->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
