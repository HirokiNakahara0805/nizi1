<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePost2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post2s', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();   // created_at, updated_atが自動設定されるとのこと
            $table->string('is_deleted', 4)->default('0');
            $table->integer('category_id');
            $table->integer('year');
            $table->text('message');
            $table->string('name');
            $table->integer('good');
            $table->integer('difficulty');
            $table->integer('atmosphere');
            $table->integer('busyness');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post2s');
    }
}
