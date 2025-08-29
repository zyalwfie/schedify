<?php

namespace Database\Seeders;

use App\Models\Lecture;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LectureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Dr. Ir. Hayati, M.Hum.'
            ],
            [
                'name' => 'Prof. Ir. Taslim Sjah, M.App., Sc., Ph.D.'
            ],
            [
                'name' => 'Dr. Ir. A.A. Sudharmawan, M.P.'
            ],
            [
                'name' => 'Prof Ir. M. Taufik Fauzi, M.Sc., Ph.D.'
            ],
            [
                'name' => 'Prof. Dr. Ir. I Wayan Sutresna, M.P.'
            ],
            [
                'name' => 'Prof. Ir. Suwardji, M.App., Sc., Ph.D.'
            ],
            [
                'name' => 'Prof. Ir. Mulyati, SU., Ph.D.'
            ],
            [
                'name' => 'Prof. Dr. Ir. Lolita Endang Susilowati, M.P.'
            ],
            [
                'name' => 'Prof. Dr. Ir. Sukartono, M.Agr.'
            ],
            [
                'name' => 'Dr. Misbahuddin, S.T., M.T.'
            ],
            [
                'name' => 'Prof. Ir. M. Sarjan, M.Agr., C.P., Ph.D.'
            ],
            [
                'name' => 'Ir. Pending Dadih Permana, M.Dev.'
            ],
            [
                'name' => 'Prof. Dr. Ir. I G Putu Muliartha Aryana, M.P.'
            ],
            [
                'name' => 'Dr. Ir. Kisman, M.Sc.'
            ],
            [
                'name' => 'Prof. Dr. Ir. A. Farid Hemon, M.Sc'
            ],
            [
                'name' => 'Ir. Ketut Budastra, M.RP., Ph.D.'
            ],
            [
                'name' => 'Prof. Ir. I Komang Damar Jaya, M.Sc., Agr., Ph.D.'
            ],
            [
                'name' => 'Prof. Ir. Wayan Wangiyana, M.Sc.(Hons.), Ph.D.'
            ],
            [
                'name' => 'Prof. Dr. Ir. Lalu Wiresapta Karyadi, M.Si.'
            ],
            [
                'name' => 'Prof. Dr. Ir. I Wayan Sudika, M.S.'
            ],
        ];

        Lecture::insert($data);
    }
}
