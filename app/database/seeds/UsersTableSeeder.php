<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
			DB::table('users')->delete();
			User::create(array(
				'name'=>'Yusuf Demir',
				'username'=>'4spannen',
				'email'=>'4yusufdemir@gmail.com',
				'password'=>Hash::make('asdasd'),
			));
		
	}

}