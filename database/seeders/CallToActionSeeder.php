<?php

namespace Database\Seeders;

use App\Models\Call_to_action;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CallToActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Call_to_action::create([
            'title' => 'We love to make perfect solutions for your business',
            'slug' => 'We-love-to-make-perfect-solutions-for-your-business',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, est ratione doloribus maxime nam odit officia laboriosam quam, molestiae, assumenda ipsam dolores. Quos, similique officiis',
            'image' => 'frontend/assets/img/cta.png',
        ]);
    }
}
