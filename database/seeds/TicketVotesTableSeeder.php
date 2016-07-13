<?php

use Faker\Generator;
use Tickets\Entities\TicketVote;
use Faker\Factory as Faker;

/**
* 
*/
class TicketVotesTableSeeder extends BaseSeeder
{
	public function getModel()
	{
		return new TicketVote();
	}
	public function getDummyData(Generator $faker, array $customValues = array())
	{
		return [
		'title' => $faker->sentence(),
		'status'=> $faker->randomElement(['open','open', 'closed']),
		'user_id'=>1
				];
	}
	public function run()
	{
		
		$this->createMultiple(100);
		
		
	}
	

}

 ?>