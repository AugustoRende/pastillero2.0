<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apms', function (Blueprint $table) {
            $table->increments('id');

            $table->string('code',50)->unique();
            $table->string('description',50);
            $table->timestamps();
            $table->softDeletes();
            $table->tinyInteger('active')->default(1);
            $table->tinyInteger('enabled')->default(1);
            $table->tinyInteger('visible')->default(1);

            $table->integer('organization_id')->unsigned()->default(1);
            $table->foreign('organization_id')->references('id')->on('organizations')->onDelete('cascade')->onUpdate('no action');
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apms');
    }
}
