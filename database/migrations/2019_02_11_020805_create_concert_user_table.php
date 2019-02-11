<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConcertUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concert_user', function (Blueprint $table) {

            $table->integer('concert_id')->unsigned();
			$table->integer('user_id')->unsigned();
        });

		Schema::table('concert_user', function($table) {

			$table->primary(['concert_id', 'user_id']);

			$table->foreign('concert_id')->references('id')->on('concerts');
			$table->foreign('user_id')->references('id')->on('users');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('concert_user');
    }
}
