<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Blog\User;

class UserTableSeeder extends Seeder{
	
	public function run(){
		User::create(
			[
				'name' => 'John Doe',
				'email' => 'johndoe@aol.com',
				'username'=> 'JonnyDonny',
				'password' => \Hash::make('secret')
			]
		);

	}
}