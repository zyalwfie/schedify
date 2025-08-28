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
                'day_name' => 'Sunday'
            ],
            [
                'day_name' => 'Monday'
            ],
            [
                'day_name' => 'Tuesday'
            ],
            [
                'day_name' => 'Wednesday'
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

        Day::insertBatch($data);
    }
}
