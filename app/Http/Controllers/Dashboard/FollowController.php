<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Attachment;
use App\Models\Follower;
use App\Models\Surgery;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowController extends Controller
{
    public function index()
    {
        $allFollow = Follower::with('doctor', 'sick')->latest()->get();
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

    public function edit($followId)
    {
        $follow = Follower::with('sick')->find($followId);

        return view('dashboard.follow.edit', compact('follow'));
    }

    public function update(Request $request, $followId)
    {
        $follow = Follower::find($followId);
        if ($follow) {
            $follow->update([
                'desc' => $request->description
            ]);
        }
        return redirect()->route('follow.details', $followId);

    }

    public function getDetails($followId)
    {
        $detailsFollow = Follower::with('doctor', 'sick')->find($followId);
        $surgeryByFollowId = Surgery::where('follower_id', $followId)->get();
        $attachmentByFollowId = Attachment::where('follower_id', $followId)->get();
        return view('dashboard.follow.details', compact('detailsFollow', 'surgeryByFollowId', 'attachmentByFollowId'));
    }
}
