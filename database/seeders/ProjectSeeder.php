<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $project = Project::create([
            'name' => 'Pemecahan 3 (TIGA REKOR MURI) MUSEUM REKOR DUNIA INDONESIA DALAM RANGKA HARI PENDIDIKAN NASIONAL',
            'company' => 'STIE EKUITAS',
            'year' => '2010',
            'desc' => 'Pekerjaan Selesai dengan baik lebih Cepat dari waktu yang ditentukan',
        ]);
    }
}
