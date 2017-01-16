<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManagementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('managements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id')->index();
            $table->integer('category_id')->unsigned()->index();
            $table->string('question_name');
            $table->text('description');
            $table->integer('open_flag')->unsigned()->default(0);
            $table->integer('type_flag')->unsigned()->default(0);
            $table->string('img_id')->nullable()->default(null)->index();
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
        Schema::dropIfExists('managements');
    }
}
