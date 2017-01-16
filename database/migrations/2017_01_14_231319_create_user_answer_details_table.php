<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAnswerDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_answer_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_answer_id')->unsigned()->index();
            $table->integer('question_id')->unsigned()->index();
            $table->integer('selected_num')->unsigned()->default(0);
            $table->integer('correct_flag')->unsigned();
            $table->integer('time')->unsigned();
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
        Schema::dropIfExists('user_answer_details');
    }
}
