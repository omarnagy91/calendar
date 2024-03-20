<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    public function run()
    {
        // Create sample events
        Event::create([
            'name' => 'Sample Event 1',
            'start_time' => now(),
            'end_time' => now()->addHours(2),
        ]);
        // Add more events as needed
    }
}
