<?php

namespace Database\Seeders;

use App\Models\Community;
use App\Models\Family;
use Database\Factories\FamilyFactory;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FamilySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $family =Family::factory(100)->create()->each(function ($family){
            $community =Community::factory(50)->make();
            $family->community()->saveMany($family);
        });
      
        
    
       
    }
}
