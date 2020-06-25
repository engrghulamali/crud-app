<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$faker=Faker::create();
    	foreach (range(1,1000) as $index) 
    	{
    		DB::table('articles')->insert([
    			//'img'->$faker->img,
    			'title'->$faker->title,
    			'description'->$faker->description
    		]);
    	}
        // $this->call(UsersTableSeeder::class);
       
    }
}
