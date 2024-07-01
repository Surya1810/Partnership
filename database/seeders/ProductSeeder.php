<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Product::create([
            'name' => 'Partnership Workshop',
            'pic_id' => '1',
            'logo' => 'logo/workshop.png',
            'desc' => 'Belum Ada',
        ]);
        $admin = Product::create([
            'name' => 'Partnership Contractor',
            'pic_id' => '1',
            'logo' => 'logo/contractor.png',
            'desc' => 'Belum Ada',
        ]);
        $admin = Product::create([
            'name' => 'Partnership Law Consultant',
            'pic_id' => '1',
            'logo' => 'logo/law.png',
            'desc' => 'Belum Ada',
        ]);
        $admin = Product::create([
            'name' => 'Partnership Technology',
            'pic_id' => '1',
            'logo' => 'logo/tech.png',
            'desc' => 'Belum Ada',
        ]);
        $admin = Product::create([
            'name' => 'Partnership Information System & Website',
            'pic_id' => '1',
            'logo' => 'logo/website.png',
            'desc' => 'Belum Ada',
        ]);
        $admin = Product::create([
            'name' => 'Partnership Event Organizer & Mice',
            'pic_id' => '1',
            'logo' => 'logo/eo.png',
            'desc' => 'Belum Ada',
        ]);
        $admin = Product::create([
            'name' => 'Partnership Building Maintanance & Cleaning',
            'pic_id' => '1',
            'logo' => 'logo/cleaning.png',
            'desc' => 'Belum Ada',
        ]);
    }
}
