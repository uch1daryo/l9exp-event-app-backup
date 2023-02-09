<?php

namespace Database\Seeders;

use App\Models\Room;
use App\Models\User;
use Illuminate\Database\Seeder;

class TestDatabaseSeeder extends Seeder
{
    /**
     * @return void
     */
    public function run()
    {
        User::factory()->count(3)->create();
        Room::factory()->count(3)->create();
    }
}
