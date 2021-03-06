<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description_short')->nullable();
            $table->text('description');
            $table->string('image')->nullable();
            $table->string('image_show')->nullable();
            $table->string('meta-title')->nullable();
            $table->string('meta-description')->nullable();
            $table->string('meta-keyworld')->nullable();
            $table->boolean('published');
            $table->integer('viewed')->nullable();
            $table->integer('created_up')->nullable();
            $table->integer('modified_by')->nullable();

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
        Schema::dropIfExists('articles');
    }
}
