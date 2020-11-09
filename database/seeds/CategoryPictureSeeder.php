<?php

use Illuminate\Database\Seeder;

class CategoryPictureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            {
                $data = [
                    [
                        'name' => 'site',
                    ],
                    [
                        'name' => 'ho',
                    ],
                    [
                        'name' => 'pit',
                    ],
                    [
                        'name' => 'dasdas',
                    ],

                ];
                foreach ($data as $d) {
                    DB::table('category_pictures')->insert([
                        'name'    => $d['name'],
                    ]);
                }
            }
        }    }
}