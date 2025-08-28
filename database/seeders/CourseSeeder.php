<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'course_name' => 'Topik Khusus Agribisnis',
                'is_mandatory_interest' => true,
                'course_credit' => 3,
                'semester_id' => 2
            ],
            [
                'course_name' => 'Topik Khusus Teknik Budaya',
                'is_mandatory_interest' => true,
                'course_credit' => 3,
                'semester_id' => 2
            ],
            [
                'course_name' => 'Ilmu Filasafat',
                'is_mandatory_interest' => false,
                'course_credit' => 2,
                'semester_id' => 1
            ],
            [
                'course_name' => 'Budidaya Tanaman Lahan Kering',
                'is_mandatory_interest' => true,
                'course_credit' => 3,
                'semester_id' => 1
            ],
            [
                'course_name' => 'Pengelolaan Sumber Daya Lahan Kering Pulau-pulau kecil',
                'is_mandatory_interest' => false,
                'course_credit' => 4,
                'semester_id' => 1
            ],
            [
                'course_name' => 'Pengelolaan Sumber Daya Lahan Kering',
                'is_mandatory_interest' => true,
                'course_credit' => 3,
                'semester_id' => 2
            ],
            [
                'course_name' => 'Sistem Pertanian Lahan Kering',
                'is_mandatory_interest' => true,
                'course_credit' => 3,
                'semester_id' => 2
            ],
            [
                'course_name' => 'Pengelolaan OPT (Organisme Pengganggu Tanaman) Terpadu',
                'is_mandatory_interest' => false,
                'course_credit' => 4,
                'semester_id' => 1
            ],
            [
                'course_name' => 'Pemuliaan Tanaman Lahan Kekeringan',
                'is_mandatory_interest' => true,
                'course_credit' => 3,
                'semester_id' => 2
            ],
            [
                'course_name' => 'Manajemen Agribisnis Lahan Kering',
                'is_mandatory_interest' => false,
                'course_credit' => 4,
                'semester_id' => 1
            ],
            [
                'course_name' => 'Manajemen Agribisnis',
                'is_mandatory_interest' => true,
                'course_credit' => 3,
                'semester_id' => 2
            ],
            [
                'course_name' => 'Ekofisiologi Tanaman Lahan Kering',
                'is_mandatory_interest' => false,
                'course_credit' => 4,
                'semester_id' => 1
            ],
            [
                'course_name' => 'Metodologi Penelitian',
                'is_mandatory_interest' => false,
                'course_credit' => 4,
                'semester_id' => 1
            ],
            [
                'course_name' => 'Praktikum Metodologi Penelitian',
                'is_mandatory_interest' => false,
                'course_credit' => 1,
                'semester_id' => 1
            ],
        ];

        Course::insert($data);
    }
}
