<?php

use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
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
                    'name' => 'Deni Sri Wardana',
                    'divition_id' => '1',
                    'position_id' => '1',
                    'picture' => 'Stakeholder',
                ],
                [
                    'name' => 'Agung Sudarsono',
                    'divition_id' => '2',
                    'position_id' => '2',
                    'picture' => 'Stakeholder',
                ],
                [
                    'name' => 'Nurcholis',
                    'divition_id' => '3',
                    'position_id' => '2',
                    'picture' => 'Stakeholder',
                ],
                [
                    'name' => 'Dadan Darmawan',
                    'divition_id' => '4',
                    'position_id' => '2',
                    'picture' => 'Stakeholder',
                ],
                [
                    'name' => 'Haryo Febrima Yudha',
                    'divition_id' => '5',
                    'position_id' => '2',
                    'picture' => 'Stakeholder',
                ],
                [
                    'name' => 'Rakhmat Budi W',
                    'divition_id' => '6',
                    'position_id' => '2',
                    'picture' => 'Stakeholder',
                ],
                [
                    'name' => 'Rheiny P Dewi',
                    'divition_id' => '7',
                    'position_id' => '2',
                    'picture' => 'Stakeholder',
                ],

            ];
            foreach ($data as $d) {
                DB::table('employees')->insert([
                    'name'    => $d['name'],
                    'divition_id'    => $d['divition_id'],
                    'position_id'    => $d['position_id'],
                    'picture'    => $d['picture'],

                ]);
            }
        }
    }
}