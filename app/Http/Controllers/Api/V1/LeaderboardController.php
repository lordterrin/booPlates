<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class LeaderboardController extends ApiController
{
    public function index(Request $request) {

        /* hitting the leaderboard API will return a list of users sorted descending by count of total states */
        $board = User::select('id', 'name')
        ->withCount('states')
        ->withMax('states', 'updated_at')
        ->orderByDesc('states_count')
        ->get();

        
        return($this->success($board));



    }
}
