<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConcertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concerts', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('name');
            $table->text('artists');
            $table->decimal('price', 8, 2); //double
            $table->string('city');
            $table->string('location');
            $table->string('address');
            $table->date('date');
            $table->text('schedule');
            $table->text('ticket');
            $table->text('info');

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
        Schema::dropIfExists('concerts');
    }
}
