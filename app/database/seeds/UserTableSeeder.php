<?php

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->delete();
                User::create(array(
                        'email' => 'hasan@example.com', 'password' => Hash::make('1234')
                ));
                User::create(array(
                        'email' => 'mishel@example.com', 'password' => Hash::make('1234')
                ));
	}

}

