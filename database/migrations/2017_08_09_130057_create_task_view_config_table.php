<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskViewConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_view_config', function (Blueprint $table) {
            $table->integer('task_id')->unsigned()->nullable();
            $table->foreign('task_id')->references('id')->on('view_configs')->onDelete('cascade');

            $table->integer('view_config_id')->unsigned()->nullable();
            $table->foreign('view_config_id')->references('id')->on('view_configs')->onDelete('cascade');
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
        Schema::dropIfExists('task_viewconfig');
    }
}
