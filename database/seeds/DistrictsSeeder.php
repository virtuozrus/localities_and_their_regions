<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('districts')->delete();

        DB::table('districts')->insert([
            [
                'id' => 1,
                'name' => 'Советский',
                'name_translit' => 'Sovetskiy',
                'locality' => 4,
            ],
            [
                'id' => 2,
                'name' => 'Прикубанский',
                'name_translit' => 'Prikubanskiy',
                'locality' => 1,
            ],
            [
                'id' => 3,
                'name' => 'Карасунский',
                'name_translit' => 'Karasunskiy',
                'locality' => 1,
            ],
            [
                'id' => 4,
                'name' => 'Алексеевка',
                'name_translit' => 'Alekseevka',
                'locality' => 3,
            ],
            [
                'id' => 5,
                'name' => 'Центральный',
                'name_translit' => 'Tsentralniy',
                'locality' => 5,
            ],
            [
                'id' => 6,
                'name' => 'Киевский',
                'name_translit' => 'Kievskiy',
                'locality' => 2,
            ],
            [
                'id' => 7,
                'name' => 'Центральный',
                'name_translit' => 'Tsentralniy',
                'locality' => 6,
            ],
            [
                'id' => 8,
                'name' => 'Центральный',
                'name_translit' => 'Tsentralniy',
                'locality' => 1,
            ],
            [
                'id' => 9,
                'name' => 'Южный',
                'name_translit' => 'Uzhniy',
                'locality' => 6,
            ],
            [
                'id' => 10,
                'name' => 'Западный',
                'name_translit' => 'Zapadniy',
                'locality' => 7,
            ],
            [
                'id' => 11,
                'name' => 'Железнодорожный',
                'name_translit' => 'Zheleznodorozhniy',
                'locality' => 2,
            ],
            [
                'id' => 12,
                'name' => 'Западный',
                'name_translit' => 'Zapadniy',
                'locality' => 8,
            ],
            [
                'id' => 13,
                'name' => 'Железнодорожный',
                'name_translit' => 'Zheleznodorozhniy',
                'locality' => 7,
            ],
        ]);
    }
}
