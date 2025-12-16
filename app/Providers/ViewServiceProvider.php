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
                50 => [
                    'level' => 11,
                    'title' => 's-tier goated six-seven',
                ],
                45 => [
                    'level' => 10,
                    'title' => 'a slaaaay queen',
                ],
                40 => [
                    'level' => 9,
                    'title' => 'almost as cool as a millennial',
                ],
                35 => [
                    'level' => 8,
                    'title' => "you're giving fire",
                ],
                30 => [
                    'level' => 7,
                    'title' => 'ok bet',
                ],
                25 => [
                    'level' => 6,
                    'title' => 'generating that rizz',
                ],
                20 => [
                    'level' => 5,
                    'title' => 'kinda mid',
                ],
                15 => [
                    'level' => 4,
                    'title' => 'low-key ohio',
                ],
                10 => [
                    'level' => 3,
                    'title' => 'casual',
                ],
                5 => [
                    'level' => 2,
                    'title' => 'baby bronze',
                ],
                0 => [
                    'level' => 1,
                    'title' => 'a noob',
                ],
            ];


            $title = 'noob';
            $level = 0;
            foreach ($userTitles as $threshold => $data) {
                if ($userStatesCount >= $threshold) {
                                        
                    $level = $data['level'];
                    $title = $data['title'];
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
