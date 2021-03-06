<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuidesLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guide_language', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->unsignedBigInteger('language_id');
             $table->unsignedBigInteger('guide_id');
              $table->foreign('guide_id')->references('id')->on('guides')->onDelete('cascade');
              $table->foreign('language_id')->references('id')->on('languages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guides_languages');
    }
}
