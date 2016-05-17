<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('form')->default('无名氏');
            $table->integer('formuid')->default(0)->index();
            $table->integer('touid')->default(0)->index();
            $table->integer('new')->default(1);
            $table->string('subject')->default('');
            $table->time('time')->default(0);
            $table->text('content');
            $table->integer('status')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('messages');
    }
}
