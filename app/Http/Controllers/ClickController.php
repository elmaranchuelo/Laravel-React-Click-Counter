<?php

namespace App\Http\Controllers;

use App\Models\Click;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ClickController extends Controller
{
    public function index()
    {
        $click = Click::where('date', Carbon::today())->first();

        if (!$click) {
            $click = Click::create([
                'date' => Carbon::today(),
                'count' => 0,
            ]);
        }

        return response()->json(['count' => $click->count]);
    }

    public function store()
    {
        $click = Click::where('date', Carbon::today())->firstOrFail();
        $click->count++;
        $click->save();

        return response()->json(['count' => $click->count]);
    }
}
