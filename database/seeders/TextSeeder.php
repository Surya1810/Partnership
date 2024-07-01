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
        // $text = Text::create([
        //     'category' => 'contact',
        //     'content' => '',
        // ]);
        // $text = Text::create([
        //     'category' => 'contact',
        //     'content' => '',
        // ]);
        // $text = Text::create([
        //     'category' => 'contact',
        //     'content' => '',
        // ]);
        // $text = Text::create([
        //     'category' => 'contact',
        //     'content' => '',
        // ]);
        // $text = Text::create([
        //     'category' => 'rekening',
        //     'content' => '4377878328,BCA,PT. PARTNERSHIP PROCUREMENT SOLUTION',
        // ]);
        // $text = Text::create([
        //     'category' => 'rekening',
        //     'content' => '',
        // ]);
        // $text = Text::create([
        //     'category' => 'rekening',
        //     'content' => '',
        // ]);
        // $text = Text::create([
        //     'category' => 'rekening',
        //     'content' => '',
        // ]);
        // $text = Text::create([
        //     'category' => 'sosmed',
        //     'content' => '',
        // ]);
        // $text = Text::create([
        //     'category' => 'sosmed',
        //     'content' => '',
        // ]);
        // $text = Text::create([
        //     'category' => 'sosmed',
        //     'content' => '',
        // ]);
        // $text = Text::create([
        //     'category' => 'sosmed',
        //     'content' => '',
        // ]);
    }
}
