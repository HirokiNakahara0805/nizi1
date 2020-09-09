<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneraltopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generaltops', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();   // created_at, updated_atが自動設定されるとのこと
            $table->string('is_deleted', 4)->default('0');
            $table->integer('category_id');
            $table->string('name');
            $table->string('teacher');
            $table->string('date');
            $table->string('period');
            $table->string('department');
            $table->string('date');
            $table->string('time');
            $table->string('book1');
            $table->string('book2');
            $table->string('book3');
            $table->string('link1');
            $table->string('link2');
            $table->string('link3');
            $table->string('code');
            $table->text('content');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('generaltops');
    }
}
