<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtistConcertTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artist_concert', function (Blueprint $table) {

            $table->integer('artist_id')->unsigned();
			$table->integer('concert_id')->unsigned();
        });

		Schema::table('artist_concert', function($table) {

			$table->primary(['artist_id', 'concert_id']);

			$table->foreign('artist_id')->references('id')->on('artists');
			$table->foreign('concert_id')->references('id')->on('concerts');
 		});

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artist_concert');
    }
}
