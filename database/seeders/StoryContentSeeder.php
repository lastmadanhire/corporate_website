<?php

namespace Database\Seeders;

use App\Models\StoryContent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoryContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StoryContent::create([
            'title' => 'Our Story',
            'image' => 'frontend/assets/img/stories.jpg',
            'subtitle' => 'Our team comes with the experience and knowledge',
            'who_we_are' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis totam dolorum nemo ratione, odio illo quis modi deserunt repudiandae consequatur delectus dolore voluptas necessitatibus dignissimos perferendis nam recusandae obcaecati rem. Quam recusandae dolor corrupti quas.',
            'our_vision' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis totam dolorum nemo ratione, odio illo quis modi deserunt repudiandae consequatur delectus dolore voluptas necessitatibus dignissimos perferendis nam recusandae obcaecati rem. Quam recusandae dolor corrupti quas.',
            'our_history' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis totam dolorum nemo ratione, odio illo quis modi deserunt repudiandae consequatur delectus dolore voluptas necessitatibus dignissimos perferendis nam recusandae obcaecati rem. Quam recusandae dolor corrupti quas.',
        ]);
    }
}
