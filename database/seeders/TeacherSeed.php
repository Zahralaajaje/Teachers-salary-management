<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Seeder;

class Teacherseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'Ahmed Soultane', 'birth_date' => '1987-06-24', 'nationality_id' => 10,],
            ['id' => 2, 'name' => 'Zaza', 'birth_date' => '1985-02-05', 'nationality_id' => 188,],

        ];

        foreach ($items as $item) {
            Teacher::create($item);
        }
    }
}
