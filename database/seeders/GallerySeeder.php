<?php

namespace Database\Seeders;

use App\Models\Gallery;
use App\Models\Gellery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = [
            'images/gallery/1.webp',
            'images/gallery/2.webp',
            'images/gallery/8.webp',
            'images/gallery/4.webp',
            'images/gallery/5.webp',
            'images/gallery/3.webp',
            'images/gallery/6.webp',
            'images/gallery/7.webp',
            'images/gallery/9.webp',
        ];

        foreach ($images as $image) {
            Gallery::create([
                'image' => $image,
            ]);
        }
    }
}
