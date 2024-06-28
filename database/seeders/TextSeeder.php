<?php

namespace Database\Seeders;

use App\Models\Text;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $text = Text::create([
            'category' => 'tagline',
            'content' => 'One Vision, One Action',
        ]);

        $text = Text::create([
            'category' => 'profile',
            'content' => '',
        ]);
        $text = Text::create([
            'category' => 'contact',
            'content' => '',
        ]);
        $text = Text::create([
            'category' => 'contact',
            'content' => '',
        ]);
        $text = Text::create([
            'category' => 'contact',
            'content' => '',
        ]);
        $text = Text::create([
            'category' => 'contact',
            'content' => '',
        ]);
        $text = Text::create([
            'category' => 'rekening',
            'content' => '',
        ]);
        $text = Text::create([
            'category' => 'rekening',
            'content' => '',
        ]);
        $text = Text::create([
            'category' => 'rekening',
            'content' => '',
        ]);
        $text = Text::create([
            'category' => 'rekening',
            'content' => '',
        ]);
    }
}
