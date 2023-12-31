<?php

namespace Database\Seeders;

use App\Models\Teacher;
use App\Models\Salary;
use Illuminate\Database\Seeder;

class SalarySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'teacher_id' => 1, 'team_id' => 1, 'season_id' => 1, 'salary' => '13000000.00',],
            ['id' => 2, 'teacher_id' => 1, 'team_id' => 1, 'season_id' => 2, 'salary' => '20000000.00',],
            ['id' => 3, 'teacher_id' => 1, 'team_id' => 1, 'season_id' => 3, 'salary' => '21000000.00',],

        ];

        foreach ($items as $item) {
            Salary::create($item);
        }
    }
}
