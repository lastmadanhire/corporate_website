<?php

namespace Database\Seeders;

use App\Models\Showcase;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShowcaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Showcase::create([
            'title' => 'Corporate Website',
            'slug' => 'Corporate-Website',
            'description' => 'We are a digital agency that helps brands to achieve thier business outcomes. We see technology as a tool to create amazing things',
            'image' => 'frontend/assets/img/showcase.jpg',
        ]);
    }
}
