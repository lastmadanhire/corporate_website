<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'title' => 'Refreshing Design',
            'slug' => 'Refreshing-Design',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita magni debitis sapiente autem nobis sit!',
            'icon' => 'bi bi-bootstrap-fill',
        ]);
        Service::create([
            'title' => 'Refreshing Design',
            'slug' => 'Refreshing-Design',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita magni debitis sapiente autem nobis sit!',
            'icon' => 'bi bi-stack',
        ]);
        Service::create([
            'title' => 'Refreshing Design',
            'slug' => 'Refreshing-Design',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita magni debitis sapiente autem nobis sit!',
            'icon' => 'bi bi-speedometer2',
        ]);
        Service::create([
            'title' => 'Refreshing Design',
            'slug' => 'Refreshing-Design',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita magni debitis sapiente autem nobis sit!',
            'icon' => 'bi bi-bootstrap-fill',
        ]);
        Service::create([
            'title' => 'Refreshing Design',
            'slug' => 'Refreshing-Design',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita magni debitis sapiente autem nobis sit!',
            'icon' => 'bi bi-bootstrap-fill',
        ]);
        Service::create([
            'title' => 'Refreshing Design',
            'slug' => 'Refreshing-Design',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita magni debitis sapiente autem nobis sit!',
            'icon' => 'bi bi-bootstrap-fill',
        ]);

    }
}
