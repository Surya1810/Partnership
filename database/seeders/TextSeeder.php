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
            'category' => 'about',
            'content' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
        ]);
        $text = Text::create([
            'category' => 'contact',
            'content' => '6282126000126,0821-2600-0126,Firkie',
        ]);
        $text = Text::create([
            'category' => 'contact',
            'content' => '6282117108850,0821-1710-8850,Firkie',
        ]);
        $text = Text::create([
            'category' => 'contact',
            'content' => '6289626309580,0896-2630-9580,Enza',
        ]);
        $text = Text::create([
            'category' => 'contact',
            'content' => '6289512776878,0895-1277-6878,Surya',
        ]);
        $text = Text::create([
            'category' => 'email',
            'content' => 'partnershipsolution28@gmail.com,hi@partnership.co.id',
        ]);
        $text = Text::create([
            'category' => 'rekening',
            'content' => '4377878328,BCA,PT. PARTNERSHIP PROCUREMENT SOLUTION',
        ]);
        $text = Text::create([
            'category' => 'rekening',
            'content' => '1300015275707,Mandiri,PT. PARTNERSHIP PROCUREMENT SOLUTION',
        ]);
        $text = Text::create([
            'category' => 'rekening',
            'content' => '0723660614,BNI,FIRKIE APRILIZA RAMADHANI',
        ]);
        $text = Text::create([
            'category' => 'rekening',
            'content' => '210501007453503,BRI,FIRKIE APRILIZA RAMADHANI',
        ]);
        $text = Text::create([
            'category' => 'sosmed',
            'content' => 'Instagram,link,@username',
        ]);
        $text = Text::create([
            'category' => 'sosmed',
            'content' => 'Linkedin,link,@username',
        ]);
        $text = Text::create([
            'category' => 'sosmed',
            'content' => 'Youtube,link,@username',
        ]);
        $text = Text::create([
            'category' => 'sosmed',
            'content' => 'Facebook,link,@username',
        ]);
    }
}
