<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('uid'); // 提问者id
            $table->string('title');
            $table->longText('content');
            $table->bigInteger('money')->default(0);
            $table->integer('type')->default(0); // 问题分类
            $table->integer('adoption')->default(0)->index(); // 采纳问题
            // $table->integer('type');
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
        Schema::drop('questions');
    }
}
