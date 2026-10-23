<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Room;
class RoomSeeder extends Seeder
{
    public function run(): void
    {
        $ruang = 
        [['nama_ruangan' => 'Lap Komputer A', 'kapasitas' => 40], 
        ['nama_ruangan' => 'Lab Jaringan', 'kapasitas' => 30], 
        ['nama_ruangan' => 'Lab MES', 'kapasitas' => 30]]; 

        foreach ($ruang as $data) {
            Room::create($data);
        }
    }
}
