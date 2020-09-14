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
//            $table->string('slug');
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
            $table->string('external_url')->nullable();
            $table->dateTime('publish_date');
            $table->date('expiry_date');
            $table->boolean('is_fixed');
            $table->boolean('is_special');
            $table->boolean('is_anchor');
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
