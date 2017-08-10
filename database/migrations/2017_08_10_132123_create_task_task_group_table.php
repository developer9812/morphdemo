<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskTaskGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_task_group', function (Blueprint $table) {
            $table->integer('task_id')->unsigned()->nullable();
            $table->foreign('task_id')->references('id')->on('tasks')->onDelete('cascade');
            $table->integer('task_group_id')->unsigned()->nullable();
            $table->foreign('task_group_id')->references('id')->on('task_groups')->onDelete('cascade');
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
        Schema::dropIfExists('task_task_group');
    }
}
