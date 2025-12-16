<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\State;
use App\Models\StateName;
use App\Models\User;


class HomeController extends Controller
{
    
    protected $userTitles = [
        0  => "a noob",
        5  => "baby bronze",
        10 => "casual",
        15 => "low-key ohio",
        20 => "kinda mid, ngl",
        25 => "generating that rizz",
        30 => "ok bet",
        35 => "you're giving fire",
        40 => "almost as cool as a millenial",
        45 => "slaaaay queen",
        50 => "s-tier goated six-seven",
    ];

    public function getUserTitle(int $uploadCount): string
    {        

        foreach ($this->userTitles as $threshold => $label) {
            if ($uploadCount >= $threshold) {
                return $label;
            }
        }

        return "Noob"; // fallback
    }


    public function LoadHome(Request $request) {

        $message = 'Welcome to Costco. I love you.';

        /* A user may load this page having come from booBoards, where they'd be passing over the ID that they're looking to see */
        $guestId = $request->query('id') ?? '';

        if ( $guestId ) {            
            $guestStates = State::where('user_id', $guestId)
                ->distinct()
                ->pluck('state_code');

            $guestStatesCount = $guestStates->count();
            $totalStates = StateName::count();

            //$guestName = User::select('name')->where('id', $guestId)->first();
            $guestName = User::where('id', $guestId)->value('name');
        }
        
        return view('home', [
            'message' => $message,
            'guestId' => $guestId,
            'guestStates' => $guestStates ?? [],
            'guestStatesCount' => $guestStatesCount ?? 0,
            'guestName' => $guestName ?? '',
            // 'title'         => $this->getUserTitle($userStatesCount) ?? 'Noob'
        ]);
    }
}

