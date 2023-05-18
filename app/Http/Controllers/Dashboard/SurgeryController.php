<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Surgery;
use Illuminate\Http\Request;

class SurgeryController extends Controller
{
    public function store(Request $request, $followId)
    {
        Surgery::create([
            'name' => $request->name,
            'operation_time' => $request->operation_time,
            'follower_id' => $followId
        ]);

        return redirect()->route('follow.details', $followId);
    }
}
