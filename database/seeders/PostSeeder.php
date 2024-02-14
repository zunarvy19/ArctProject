<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'user_id' => '1',
            'title' => 'Judul Pertama',
            'slug' => 'Slug ke-1',
            'excerpt' => 'Contoh exercpt atau kutipan',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis voluptatibus sequi, eaque quaerat vero quos accusantium a, earum assumenda nam dolorem rem impedit iusto nesciunt et reiciendis possimus exercitationem hic fuga! Maiores reiciendis, facilis, porro libero harum possimus fugiat odit recusandae dolore veniam, reprehenderit at. Quidem magnam incidunt pariatur facere!
            '
        ]);
    }
}
