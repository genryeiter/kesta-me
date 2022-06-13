<?php

namespace Tests\Unit;

use App\Models\Challenge;
use App\Models\Event;
use App\Models\Initiative;
use App\Models\Sdg;
use Tests\TestCase;

class HasSdgTest extends TestCase
{
    /**
     * @return void
     */
    public function test_event_can_have_sdgs()
    {
        $event = Event::factory()->create();
        $sdg = Sdg::factory()->create();

        $event->sdgs()->attach($sdg->id);
        $this->assertCount(1, $event->sdgs);
    }

    /**
     * @return void
     */
    public function test_initiative_can_have_sdgs()
    {
        $initiative = Initiative::factory()->create();
        $sdg = Sdg::factory()->create();

        $initiative->sdgs()->attach($sdg->id);
        $this->assertCount(1, $initiative->sdgs);
    }

    /**
     * @return void
     */
    public function test_challenge_can_have_sdgs()
    {
        $challenge = Challenge::factory()->create();
        $sdg = Sdg::factory()->create();
        $sdg2 = Sdg::factory()->create();

        $challenge->sdgs()->attach([$sdg->id, $sdg2->id]);
        $this->assertCount(2, $challenge->sdgs);
    }
}
