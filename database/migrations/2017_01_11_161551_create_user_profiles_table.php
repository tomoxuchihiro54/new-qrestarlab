<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->string('name')->nullable()->default(null);
            $table->integer('gender')->unsigned()->default(0);
            $table->integer('marriage')->unsigned()->default(0);
            $table->integer('occupation')->unsigned()->default(0);
            $table->date('birthday')->nullable()->default(null);
            $table->text('introduction')->nullable()->default(null);
            $table->string('photo_id')->nullable()->default(null)->index();
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
        Schema::dropIfExists('user_profiles');
    }
}
