<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('qid')->default(0)->index();
            $table->string('title');
            $table->varchar('author');
            $table->bigInteger('authorid')->default(0)->index();
            $table->time('time')->index();
            $table->time('adopttime')->index();
            $table->mediumText('content');
            $table->integer('comments')->default(0);
            $table->integer('status')->default(0);
            $table->varchar('ip')->default('');
            $table->Integer('supports')->default(0);

            // $table->longText('content');
            // $table->integer('qid'); // 回答的问题id
            // $table->integer('uid'); // 回答者id
            // // $table->integer('isGood')->default(0); // 是否采纳,0 否，1是
            // $table->integer('up')->default(0);  // 上级评论id
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('answers');
    }
}
