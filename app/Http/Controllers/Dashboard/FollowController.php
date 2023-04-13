<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Follower;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowController extends Controller
{
    public function index()
    {
        $allFollow = Follower::with('doctor', 'sick','surgery')->latest()->get();
        $data = [
            'allFollow' => $allFollow
        ];
        return view('dashboard.follow.index', compact('data'));
    }
    public function create($sickId)
    {
        $sickInfo = User::role('sick')->find($sickId);
        return view('dashboard.follow.create', compact('sickInfo'));
    }

    public function store(Request $request, $sickId)
    {
        Follower::create([
            'doctor_id' => Auth::user()->id,
            'sick_id' => $sickId,
            'desc' => $request->description,
        ]);

        return redirect()->route('follow.index');
    }
}
