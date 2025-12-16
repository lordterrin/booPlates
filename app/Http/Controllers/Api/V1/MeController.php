<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\State;

class MeController extends ApiController
{
    public function show(Request $request) {
        
        $userId = $request->query('userId');

        $user = User::where('id', $userId)->first();
        
        $stateCount = State::where('user_id', $userId)->count();


        if ( !$user ) {
            return $this->error(
                'USER_NOT_FOUND',
                'This user does not exist',
                [
                    'userId' => $userId
                ],
                404
            );            
        }
        
        $user = [
            'id'                   => $user->id,
            'name'                 => $user->name,        
            'avatar_url'           => $user->avatar,
            'total_state_photos'   => $stateCount ?? 0,
        ];

        $meta = [            
            'user'=> $userId,
            'purpose'=>'retrieve user-level data for an individual user'
        ];

        return $this->success($user, $meta);
    }
}
