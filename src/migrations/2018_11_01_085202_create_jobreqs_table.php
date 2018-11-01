<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobreqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobreqs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('job_id')->unsigned()->index()->nullable();
            $table->integer('order')->unsigned();
            $table->string('name');
            $table->string('message');
            $table->string('filename');
            $table->boolean('review')->default(false);

            $table->timestamps();

            $table->foreign('job_id')->references('id')->on('jobs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobreqs');
    }
}
