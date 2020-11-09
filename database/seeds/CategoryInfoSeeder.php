<?php

use Illuminate\Database\Seeder;

class CategoryInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $data = [
                [
                    'name' => 'site',
                ],
                [
                    'name' => 'ho',
                ]
            ];
            foreach ($data as $d) {
                DB::table('category_infos')->insert([
                    'name'    => $d['name'],
                ]);
            }
        }
    }
}