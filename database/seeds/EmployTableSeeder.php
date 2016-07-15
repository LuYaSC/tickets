<?php

use Faker\Generator;
use Tickets\Entities\Employ;
use Faker\Factory as Faker;

/**
* 
*/
class EmployTableSeeder extends BaseSeeder
{
	protected $total=100;
	public function getModel()
	{
		return new Employ();
	}
	public function getDummyData(Generator $faker, array $customValues = array())
	{
		return [
		'name' => $faker->name,
		'first_last_name'=>$faker->firstname,
		'second_last_name'=>$faker->lastname,
		'position'=>$faker->randomElement(['Gerente','Administrador','Obrero','Logistica']),
		'birth_date'=>$faker->date,
		'address'=>$faker->address,
		'civil_status'=>$faker->randomElement(['Soltero','Divorciado','Casado','Viudo']),
		'profession'=>$faker->randomElement(['Ingeniero','Arquitecto','Administrador']),
		'CI'=>$faker->unique()->randomDigitNotNull,
		'nacionality'=>$faker->city,
		'blood_type'=>$faker->randomElement(['ORH (+)','ORH (-)','A (+)','O (+)','O (-)']),
		'age'=>$faker->randomDigitNotNull,
		'emailcorpor'=>$faker->unique()->companyEmail,
		'status'=>$faker->randomElement(['f','m']),
		'user_id'=>$this->getRandom('User')->id
				];
	}
	

}

 ?>