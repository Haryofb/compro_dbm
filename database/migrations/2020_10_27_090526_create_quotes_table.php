<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_id')->unsigned();
            $table->integer('divition_id')->unsigned();
            $table->integer('position_id')->unsigned();
            $table->integer('picture_id')->unsigned();
            $table->string('quote');
            $table->softDeletes();
            $table->timestamps();
            });

        Schema::table('quotes', function (Blueprint $table) {
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('divition_id')->references('id')->on('divitions');
            $table->foreign('position_id')->references('id')->on('positions');
            $table->foreign('picture_id')->references('id')->on('employees');
        });
        }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quotes');
    }
}