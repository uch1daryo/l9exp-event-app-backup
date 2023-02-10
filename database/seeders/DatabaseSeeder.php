<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Room;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * @return void
     */
    public function run()
    {
        User::factory()->count(3)->create();
        Room::factory()->count(3)->create();
        Event::create([
            'room_id' => 1,
            'user_id' => 1,
            'start_at' => '2023-02-10 10:00:00',
            'end_at' => '2023-02-10 11:30:00',
        ]);
        Event::create([
            'room_id' => 2,
            'user_id' => 3,
            'start_at' => '2023-02-13 15:00:00',
            'end_at' => '2023-02-13 17:15:00',
        ]);
        Event::create([
            'room_id' => 3,
            'user_id' => 2,
            'start_at' => '2023-02-14 08:00:00',
            'end_at' => '2023-02-14 10:30:00',
        ]);
    }
}
