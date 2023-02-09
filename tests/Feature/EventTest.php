<?php

namespace Tests\Feature;

use App\Models\Room;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EventTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('db:seed', ['--class' => 'TestDatabaseSeeder']);
    }

    /**
     * @return void
     */
    public function testCanGetEvents()
    {
        $response = $this->get('events');
        $response->assertStatus(200);
    }

    /**
     * @return void
     */
    public function testCanGetEventsCreate()
    {
        $response = $this->get('events/create');
        $response->assertStatus(200);
    }

    /**
     * @return void
     */
    public function testCanPostEvents()
    {
        $room = Room::select('id')->first();
        $room_id = $room->id;
        $user = User::select('id')->first();
        $user_id = $user->id;
        $event = [
            'room_id' => $room_id,
            'user_id' => $user_id,
            'start_at' => '2023-02-01 09:00:00',
            'end_at' => '2023-02-01 10:00:00',
        ];
        $response = $this->post('events', $event);
        $this->assertDatabaseHas('events', $event);
    }

    /**
     * @return void
     */
    public function testCanGetSpecifiedEvent()
    {
        $response = $this->get('events/1');
        $response->assertStatus(200);
    }

    /**
     * @return void
     */
    public function testCanGetSpecifiedEventEdit()
    {
        $response = $this->get('events/1/edit');
        $response->assertStatus(200);
    }

    /**
     * @return void
     */
    public function testCanPutSpecifiedEvent()
    {
        $response = $this->put('events/1');
        $response->assertStatus(200);
    }

    /**
     * @return void
     */
    public function testCanDeleteSpecifiedEvent()
    {
        $response = $this->delete('events/1');
        $response->assertStatus(200);
    }
}
