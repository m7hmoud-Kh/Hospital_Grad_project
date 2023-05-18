<?php

namespace App\Http\Controllers;

use App\Http\Requests\Dashboard\DoctorSecurityRequest;
use App\Models\User;
use App\Models\Surgery;
use App\Models\Follower;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Website\UpdateSurgeyRequest;
use Illuminate\Http\Request;


class HomeController extends Controller
{

    public function index()
    {
        return view('home');
    }

    public function allFollow()
    {
        $allFollow = Follower::with('doctor')->where('sick_id', Auth::user()->id)->get();
        return view('website.all_follow', compact('allFollow'));
    }

    public function followDetails($followId)
    {
        $follow = Follower::with('doctor', 'surgery', 'attachment')->whereId($followId)->first();
        return view('website.follow_detalis', compact('follow'));
    }

    public function changeStatus(UpdateSurgeyRequest $request, $surgeyId)
    {
        $surgey = Surgery::find($surgeyId);
        $surgey->update([
            'status' => $request->status
        ]);
        return redirect()->back();
    }


    public function changePassword()
    {
        return view('website.change_password');
    }

    public function updatePasswordSick(DoctorSecurityRequest $request)
    {
        if (password_verify($request->current_password, Auth::user()->password)) {
            $user = User::find(Auth::user()->id);
            $user->update([
                'password' => Hash::make($request->password),
            ]);
        }

        return redirect()->route('home');
    }
}
