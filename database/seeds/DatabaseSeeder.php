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
        $concerts = Factory(App\Concert::class, 25)->create();
		$artists = Factory(App\Artist::class, 15)->create();
		$users = Factory(App\User::class, 50)->create();

		$concerts->each(function(App\Concert $concert) use ($artists){
			$concert->artists()->attach(
				$artists->random(random_int(1,15))
			);
		});

		$concerts->each(function(App\Concert $concert) use ($users){
			$concert->users()->attach(
				$users->random(random_int(1,25))
			);
		});
    }
}
