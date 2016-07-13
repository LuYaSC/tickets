<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->truncateTables(array(
    		'users',
    		'password_resets',
    		'tickets',
    		'employs',
    		'ticket_votes',
    		'ticket_comments'
    		));
    	
        $this->call(UserTableSeeder::class);
        $this->call(TicketTableSeeder::class);

    }
    private function truncateTables(array $tables)
    {
    	
    	$this->checkForeignKeys(false);
    	
    	foreach ($tables as $table)
        {
    		DB::table($table)->truncate();
    	}
    	

    	DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
    private function checkForeignKeys($check)
    {
    	$check = $check ? '1':'0';
    	DB::statement("SET FOREIGN_KEY_CHECKS = $check;");
    }
}
