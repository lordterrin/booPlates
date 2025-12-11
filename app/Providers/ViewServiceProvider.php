<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\State;
use App\Models\StateName;

class ViewServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Run this composer only for the sidebar partial
        View::composer(['sidebar', 'home'], function ($view) {
            $userId = auth()->id();

            $userStates      = collect();
            $userStatesCount = 0;

            if ($userId) {
                $userStates = State::where('user_id', $userId)
                    ->distinct()
                    ->pluck('state_code');

                $userStatesCount = $userStates->count();
            }

            $totalStates = StateName::count();
            
            $userTitles = [
                50 => "s-tier goated six-seven",
                45 => "a slaaaay queen",
                40 => "almost as cool as a millenial",
                35 => "you're giving fire",
                30 => "ok bet",
                25 => "generating that rizz",
                20 => "kinda mid",
                15 => "low-key ohio",
                10 => "casual",
                5  => "baby bronze",
                0  => "a noob",
            ];

            $title = 'noob';
            $level = 1;
            foreach ($userTitles as $threshold => $label) {
                if ($userStatesCount >= $threshold) {
                    $level++;
                    $title = $label;
                    break;
                }
            }

            $view->with([
                'userStates'      => $userStates,
                'userStatesCount' => $userStatesCount,
                'totalStates'     => $totalStates,
                'title'           => $title,
                'level'           => $level,
            ]);
        });
    }
}
