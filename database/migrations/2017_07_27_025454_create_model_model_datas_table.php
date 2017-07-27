<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelModelDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_model_data', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('model_id')->unsigned()->index();
            $table->foreign('model_id')->references('id')->on('models')->onDelete('cascade');

            $table->integer('model_data_id')->unsigned()->index();
            $table->foreign('model_data_id')->references('id')->on('model_datas')->onDelete('cascade');

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
        Schema::dropIfExists('model_model_datas');
    }
}
