<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'room_name' => 'Ps1.K1',
                'description' => 'Ruangan pasca sarjana 1 K1'
            ],
            [
                'room_name' => 'Ps1.K2',
                'description' => 'Ruangan pasca sarjana 1 K2'
            ],
            [
                'room_name' => 'Ps2.U2',
                'description' => 'Ruangan pasca sarjana 2 U2'
            ],
        ];

        Room::insert($data);
    }
}
