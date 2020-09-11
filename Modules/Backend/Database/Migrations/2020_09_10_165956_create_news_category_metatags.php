<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsCategoryMetatags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_category_meta_tags', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('news_category_id')->references('id')->on('news_categories');
            $table->string('meta-title');
            $table->string('meta-keywords');
            $table->string('meta-description');
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
        Schema::dropIfExists('');
    }
}
