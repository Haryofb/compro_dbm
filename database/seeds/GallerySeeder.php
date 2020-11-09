<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 8; $i++) {
            DB::table('pictures')->insert([
                'name' => 'picture_1.jpg',
                'category_id' =>$faker->numberBetween($min = 1, $max = 4),
            ]);
        }
    }
}