<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		$this->call('SentrySeeder'); // panggil SentrySeeder yang baru dibuat

		// $this->call('UserTableSeeder');
	}

}
