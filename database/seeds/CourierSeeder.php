<?php

use App\Courier;
use Illuminate\Database\Seeder;

class CourierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Courier::insert([
            [
                'code' => 'jne',
                'title' => 'Jalur Nugraha Eka Kurir (JNE)'
            ],
            [
                'code' => 'pos',
                'title' => 'POS Indonesia'
            ],
            [
                'code' => 'tiki',
                'title' => 'Citra Van Titipan Kilat'
            ]
        ]);
    }
}
