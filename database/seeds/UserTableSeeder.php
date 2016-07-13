<?php

use Faker\Generator;
use Tickets\Entities\User;
use Faker\Factory as Faker;

/**
* 
*/
class UserTableSeeder extends BaseSeeder
{
	public function getModel()
	{
		return new User();
	}
	public function getDummyData(Generator $faker, array $customValues = array())
	{
		return [
		'name' => $faker->name,
		'email'=> $faker->email,
		'password'=>bcrypt('secret'),
				];
	}
	public function run()
	{
		
		$this->createAdmin();
		$this->createMultiple(100);
		
		
	}
	private function createAdmin()
	{
		User::create([
			'name'=>'Luis Jimenez',
			'email'=>'i@jimpe.com',
			'password'=>bcrypt('admin'),

			]);
	}
	

}

 ?>