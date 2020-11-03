<?php

use Illuminate\Database\Seeder;

class QouteSeeder extends Seeder
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
                    'employee_id' => '1',
                    'divition_id' => '1',
                    'position_id' => '1',
                    'picture_id' => '1',
                    'quote' => 'Selamat datang di website kami, harapan kami agar website ini dapat memberikan informasi relevan kepada Anda, disertai pengertian yang memadai mengenai PT. Djava Berkah Mineral.'
                ],
                [
                    'employee_id' => '2',
                    'divition_id' => '2',
                    'position_id' => '2',
                    'picture_id' => '2',
                    'quote' => 'Terima kasih telah mengakses website kami, kami berharap website ini dapat memberikan kesempatan kepada user untuk melihat profil perusahaan kami.'
                ],
                [
                    'employee_id' => '3',
                    'divition_id' => '3',
                    'position_id' => '2',
                    'picture_id' => '3',
                    'quote' => 'Selamat datang di website kami, semoga website kami dapat memberikan informasi tentang perusahaan dan kegiatan yang kami lakukan untuk perusahaan ini.'
                ],
                [
                    'employee_id' => '4',
                    'divition_id' => '4',
                    'position_id' => '2',
                    'picture_id' => '4',
                    'quote' => 'Terima kasih telah mengunjungin website kami karena kami berharap informasi yang kami bagikan adalah yang Anda harapkan ada di website kami.'
                ],
                [
                    'employee_id' => '5',
                    'divition_id' => '5',
                    'position_id' => '2',
                    'picture_id' => '5',
                    'quote' => 'Terima kasih telah mengunjungi website kami, kami berharap website kami menjadi penghubung kami dengan user kami. Sehingga user mendapatkan informasi perusahaan melalui website ini.'
                ],
                [
                    'employee_id' => '6',
                    'divition_id' => '6',
                    'position_id' => '2',
                    'picture_id' => '6',
                    'quote' => 'Terima kasih telah mengunjungi website PT. Djava Berkah Mineral kiranya website ini bisa menjadi referensi bagi Anda yang ingin mendapatkan informasi tentang perusahaan kami.'
                ],
                [
                    'employee_id' => '7',
                    'divition_id' => '7',
                    'position_id' => '2',
                    'picture_id' => '7',
                    'quote' => 'Selamat datang di website kami, melalui website ini kami bisa berbagi mengenai profil perusahaan ini.',
                ],

            ];
            foreach ($data as $d) {
                DB::table('quotes')->insert([
                    'employee_id'    => $d['employee_id'],
                    'divition_id'    => $d['divition_id'],
                    'position_id'    => $d['position_id'],
                    'picture_id'    => $d['picture_id'],
                    'quote'    => $d['quote'],

                ]);
            }
        }
    }
}