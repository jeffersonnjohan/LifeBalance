<?php

namespace App\Http\Controllers;

use App\Models\Collect;
use App\Models\Challenge;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class ChallengesClaimController extends Controller
{
    public function index($challengeId) {
        $userId = Auth::id();
        // dd($userId);
        $user_point = User::where('id', $userId)->get()->pluck('points')->first();
        // dd($user_point);
        $challenge_point = Challenge::where('id', $challengeId)->pluck('points')->first();
        $newPoint = $user_point + $challenge_point;
        User::where('id', $userId)->update([
            'points' => $newPoint
        ]);
        Collect::create(
            ['challenge_id' => $challengeId, 'user_id' => $userId]
        );
        return redirect('/challenges');
    }
}
