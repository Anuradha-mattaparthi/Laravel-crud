<?php

namespace Database\Seeders;
use Database\Seeders\Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Facker;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Facker::create();
        foreach(range(1,20) as $index){
            DB::table('products') -> insert([
                'name' => $faker->word(),
                'price' => $faker->randomFloat(2,10,1000),
                'description' => $faker-> sentence(),
                'stock' => $faker-> numberBetween(1,100),
                'image' => $faker->imageUrl(),
                 'created_at' => now(),
                 'updated_at' => now(),

            ]);

        }
        

    }
}
