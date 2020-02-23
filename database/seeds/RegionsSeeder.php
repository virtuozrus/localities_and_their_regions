<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->delete();

        DB::table('regions')->insert([
            [
                'id' => 1,
                'name' => 'Краснодарский край',
                'name_translit' => 'Krasnodarskiy kray',
            ],
            [
                'id' => 2,
                'name' => 'Красноярский край',
                'name_translit' => 'Krasnoyarskiy kray',
            ],
            [
                'id' => 3,
                'name' => 'Республика Крым',
                'name_translit' => 'Respublica Krim',
            ],
        ]);
    }
}
