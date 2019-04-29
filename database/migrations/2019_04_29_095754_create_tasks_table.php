<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('created_uid')->unsigned();
            $table->foreign('created_uid')
              ->references('id')
              ->on('users')->onDelete('cascade');

            $table->bigInteger('perform_uid')->unsigned();
            $table->foreign('perform_uid')
              ->references('id')
              ->on('users')->onDelete('cascade');

            $table->string('title');
            $table->string('description');

            $table->bigInteger('project_id')->unsigned();
            $table->foreign('project_id')
              ->references('id')
              ->on('projects')->onDelete('cascade');

            $table->boolean('status');
            $table->integer('priority');

            $table->timestamp('start_at');
            $table->timestamp('end_at');

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
        Schema::dropIfExists('tasks');
    }
}
