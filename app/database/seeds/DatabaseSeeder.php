<?php
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('FilesTableSeeder');
        $this->command->info('Files table seeded!');
        $this->call('UserTableSeeder');
        $this->command->info('User table seeded!');
	}

}


