<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->increments('photos_id');
            $table->integer('photos_post_id')->unsigned();
            $table->foreign('photos_post_id')->references('post_id')->on('posts')->onDelete('cascade')->onUpdate('cascade');
            $table->date('photos_date');
            $table->string('photos_title');
            $table->text('photos_text');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photos');
    }
}
