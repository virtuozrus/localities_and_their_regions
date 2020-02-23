<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocalitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('localities')->delete();

        DB::table('localities')->insert([
            [
                'id' => 1,
                'name' => 'Краснодар',
                'name_translit' => 'Krasnodar',
                'region' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Симферополь',
                'name_translit' => 'Simferopol',
                'region' => 3,
            ],
            [
                'id' => 3,
                'name' => 'Анапа',
                'name_translit' => 'Anapa',
                'region' => 1,
            ],
            [
                'id' => 4,
                'name' => 'Красноярск',
                'name_translit' => 'Krasnoyarsk',
                'region' => 2,
            ],
            [
                'id' => 5,
                'name' => 'Ялта',
                'name_translit' => 'Yalta',
                'region' => 3,
            ],
            [
                'id' => 6,
                'name' => 'Новороссийск',
                'name_translit' => 'Novorossiysk',
                'region' => 1,
            ],
            [
                'id' => 7,
                'name' => 'Ачинск',
                'name_translit' => 'Achinsk',
                'region' => 2,
            ],
            [
                'id' => 8,
                'name' => 'Емельяново',
                'name_translit' => 'Emelyanovo',
                'region' => 2,
            ],
        ]);
    }
}
