<?php

namespace Database\Seeders;

use App\Models\Click;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ClickSeeder extends Seeder
{
    public function run()
    {
        // Get today's date
        $today = Carbon::today();

        // Check if a record already exists for today
        $click = Click::where('date', $today)->first();

        if (!$click) {
            // Create a new record with 0 count for today
            Click::create([
                'date' => $today,
                'count' => 0,
            ]);
        }
    }
}
