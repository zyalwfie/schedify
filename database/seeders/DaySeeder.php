<?php

namespace Database\Seeders;

use App\Models\Day;
use Illuminate\Database\Seeder;

class DaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'day_name' => 'sunday'
            ],
            [
                'day_name' => 'monday'
            ],
            [
                'day_name' => 'tuesday'
            ],
            [
                'day_name' => 'wednesday'
            ],
            [
                'day_name' => 'thursday'
            ],
            [
                'day_name' => 'friday'
            ],
            [
                'day_name' => 'saturday'
            ],
        ];

        Day::insert($data);
    }
}
