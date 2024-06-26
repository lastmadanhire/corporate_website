<?php

namespace Database\Seeders;

use App\Models\Pricing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PricingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pricing::create([
                'title' => 'Starter',
                'price' => 15,
                'description' => 'Lorem ipsum dolor sit amet...',
                'features' => [
                    'Lorem Ipsum',
                    'Cras justo odio',
                    'Dapibus ac facilisis',
                ],
        ]);
        Pricing::create([
            'title' => 'Exclusive',
            'price' => 99,
            'description' => 'Lorem ipsum dolor sit amet...',
            'features' => [
                'Lorem Ipsum',
                'Cras justo odio',
                'Dapibus ac facilisis',
            ],
    ]);
    Pricing::create([
        'title' => 'Starter',
        'price' => 150,
        'description' => 'Lorem ipsum dolor sit amet...',
        'features' => [
            'Lorem Ipsum',
            'Cras justo odio',
            'Dapibus ac facilisis',
        ],
    ]);
    }
}
