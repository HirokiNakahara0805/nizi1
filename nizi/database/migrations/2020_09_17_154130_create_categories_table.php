<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();   // created_at, updated_atが自動設定されるとのこと
            $table->string('is_deleted', 4)->default('0');
            $table->string('name');
            $table->string('teacher');
            $table->string('period');
            $table->string('department');
            $table->string('time');
            $table->string('book1');
            $table->string('book2');
            $table->string('book3');
            $table->text('link1');
            $table->text('link2');
            $table->text('link3');
            $table->string('code');
            $table->text('content');
            $table->integer('departmentcategory_id');
        });
    }
 
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}