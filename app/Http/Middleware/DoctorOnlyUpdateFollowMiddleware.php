<?php

namespace App\Http\Middleware;

use App\Models\Follower;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorOnlyUpdateFollowMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $followId = $request->route('follow_id');
        $follow = Follower::whereId($followId)->where('doctor_id', Auth::user()->id)->first();

        if ($follow) {
            return $next($request);
        }else {
            return redirect()->route('follow.details', $followId);
        }

    }
}
