<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists', function (Blueprint $table) {
            $table->increments('id');

			$table->string('name');
			$table->string('slug');
			$table->string('image');
			$table->text('info');
			$table->string('web');
			$table->string('spotify');
			$table->string('youtube');
			$table->string('instagram');
			$table->string('twitter');
			$table->string('facebook');

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
        Schema::dropIfExists('artists');
    }
}
