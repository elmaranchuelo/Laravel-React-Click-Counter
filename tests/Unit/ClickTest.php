<?php

namespace Tests\Unit;

use App\Models\Click;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ClickTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_a_click_record()
    {
        $click = Click::create([
            'date' => Carbon::today(),
            'count' => 5,
        ]);

        $this->assertInstanceOf(Click::class, $click);
        $this->assertDatabaseHas('clicks', [
            'id' => $click->id,
            'date' => $click->date,
            'count' => $click->count,
        ]);
    }
}
