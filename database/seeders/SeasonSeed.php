<?php

namespace Database\Seeders;

use App\Models\Season;
use Illuminate\Database\Seeder;

class SeasonSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'season' => '2013-2014',],
            ['id' => 2, 'season' => '2014-2015',],
            ['id' => 3, 'season' => '2015-2016',],
            ['id' => 4, 'season' => '2016-2017',],
            ['id' => 5, 'season' => '2017-2018',],
            ['id' => 6, 'season' => '2018-2019',],
            ['id' => 7, 'season' => '2019-2020',],
            ['id' => 8, 'season' => '2020-2021',],
            ['id' => 9, 'season' => '2021-2022',],
            ['id' => 10, 'season' => '2022-2023',],

            

        ];

        foreach ($items as $item) {
            Season::create($item);
        }
    }
}
