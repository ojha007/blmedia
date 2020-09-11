<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTypePivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts_type_pivot', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('contact_id');
            $table->unsignedBigInteger('contact_type_id');

            $table->foreign('contact_type_id')
                ->references('id')
                ->on('contact_types_id');
            $table->foreign('contact_id')
                ->references('id')
                ->on('contacts');

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
        Schema::dropIfExists('contacts_type_pivot');
    }
}
