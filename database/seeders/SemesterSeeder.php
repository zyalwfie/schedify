<?php

namespace Database\Seeders;

use App\Models\Semester;
use Illuminate\Database\Seeder;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'semester_number' => '1'
            ],
            [
                'semester_number' => '2'
            ],
            [
                'semester_number' => '3'
            ],
            [
                'semester_number' => '4'
            ],
        ];

        Semester::insert($data);
    }
}
