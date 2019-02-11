<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Factory(App\Concert::class, 25)->create();
		Factory(App\Artist::class, 15)->create();
    }
}
