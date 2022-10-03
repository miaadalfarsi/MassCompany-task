<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        $class_ids = DB::table('classes')->pluck('class_id');
        $country_ids = DB::table('countries')->pluck('country_id');
        foreach(range(1,50) as $index){
        DB::table('students')->insert([
            'class_id'=>$faker->randomElement($class_ids),
            'country_id'=>$faker->randomElement($country_ids),
            'name'=>$faker->name,
            'date_of_birth'=>$faker->dateTimeBetween('1990-01-01', '2012-12-31')->format('Y/m/d')// outputs something like 17/09/2001
        ]);
    }
    }
}
