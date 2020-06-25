<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLevelSkillUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('level_skill_user', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('skill_id');
            $table->integer('level_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('skill_id')->references('id')->on('skills');
            $table->foreign('level_id')->references('id')->on('levels');
            $table->primary(['user_id','skill_id']);
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
        Schema::dropIfExists('level_skill_user');
    }
}
