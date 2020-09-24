<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title');
            $table->string('slug')->unique();
            $table->text('sub_title')->nullable();
            $table->unsignedBigInteger('guest_id')->nullable();
            $table->foreign('guest_id')
                ->references('id')
                ->on('guests');
            $table->unsignedBigInteger('reporter_id')->nullable();
            $table->foreign('reporter_id')->references('id')
                ->on('reporters');
            $table->string('tag_line')->nullable();
            $table->longText('description');
            $table->text('short_description')->nullable();
            $table->bigInteger('view_count')->default(0);
            $table->boolean('is_special')->default(0);
            $table->boolean('is_anchor')->default(0);
            $table->string('external_url')->nullable();
            $table->date('publish_date');
            $table->string('image')->nullable();
            $table->string('image_description')->nullable();
            $table->string('image_alt')->nullable();
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
        Schema::dropIfExists('news');
    }
}
