<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->string('slug');
            $table->boolean('in_front')->default(1);
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->foreign('parent_id')
                ->references('id')
                ->on('news_categories');
            $table->integer('position');
            $table->string('category_url');
            $table->enum('category_code', ['HM', 'LS', 'OT']);
            $table->boolean('is_active')->default(1);
            $table->auditableWithDeletes();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_categories');
    }
}
