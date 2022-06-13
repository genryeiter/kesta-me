<?php

namespace Tests\Unit;

use App\Models\Category;
use App\Models\Challenge;
use App\Models\Event;
use App\Models\Initiative;
use Tests\TestCase;

class HasCategoryTest extends TestCase
{
    /**
     * @return void
     */
    public function test_event_can_have_categoies()
    {
        $event = Event::factory()->create();
        $category = Category::factory()->create();

        $event->categories()->attach($category->id);
        $this->assertCount(1, $event->categories);
    }

    /**
     * @return void
     */
    public function test_initiative_can_have_categoies()
    {
        $initiative = Initiative::factory()->create();
        $category = Category::factory()->create();

        $initiative->categories()->attach($category->id);
        $this->assertCount(1, $initiative->categories);
    }

     /**
     * @return void
     */
    public function test_challenge_can_have_categoies()
    {
        $challenge = Challenge::factory()->create();
        $category = Category::factory()->create();
        $category2 = Category::factory()->create();

        $challenge->categories()->attach([$category->id, $category2->id]);
        $this->assertCount(2, $challenge->categories);
    }
}
