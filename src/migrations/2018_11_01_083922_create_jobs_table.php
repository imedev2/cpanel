<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order')->unsigned();
            $table->string('title');
            $table->string('ar_title');
            $table->longText('description');
            $table->longText('ar_description');
            $table->integer('no_reqs');
            $table->boolean('visible')->default(true);
            $table->integer('com_id')->unsigned()->index()->nullable();
            $table->timestamps();

            $table->foreign('com_id')->references('id')->on('companies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
