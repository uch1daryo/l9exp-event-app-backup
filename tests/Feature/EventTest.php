<?php

namespace Tests\Feature;

use Tests\TestCase;

class EventTest extends TestCase
{
    public function testCanGetEvents(): void
    {
        $response = $this->get('events');
        $response->assertStatus(200);
    }

    public function testCanGetEventsCreate(): void
    {
        $response = $this->get('events/create');
        $response->assertStatus(200);
    }

    public function testCanPostEvents(): void
    {
        $response = $this->post('events');
        $response->assertStatus(200);
    }

    public function testCanGetSpecifiedEvent(): void
    {
        $response = $this->get('events/1');
        $response->assertStatus(200);
    }

    public function testCanGetSpecifiedEventEdit(): void
    {
        $response = $this->get('events/1/edit');
        $response->assertStatus(200);
    }

    public function testCanPutSpecifiedEvent(): void
    {
        $response = $this->put('events/1');
        $response->assertStatus(200);
    }

    public function testCanDeleteSpecifiedEvent(): void
    {
        $response = $this->delete('events/1');
        $response->assertStatus(200);
    }
}
