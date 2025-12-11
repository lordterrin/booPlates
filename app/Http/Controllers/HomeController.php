<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\State;
use App\Models\StateName;


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


    public function LoadHome() {
                
        $message = "sup";

        if ( auth()->id() ) {
            $userId = auth()->id();
            
            $userStates = State::where('user_id', $userId)
                ->distinct()
                ->pluck('state_code');

            $userStatesCount = $userStates->count();
            $totalStates = StateName::count();

        }
        
        return view('home', [
            'message' => $message,
            // 'userStates' => $userStates ?? [],
            // 'userStatesCount' => $userStatesCount ?? 0,
            // 'totalStates' => $totalStates ?? 0,
            // 'title'         => $this->getUserTitle($userStatesCount) ?? 'Noob'
        ]);
    }
}

