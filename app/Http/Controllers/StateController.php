<?php

namespace App\Http\Controllers;

use App\Models\State;

use Illuminate\Http\Request;

class StateController extends Controller
{
    public function checkState(Request $request) {

        $state = $request->input('id');  //would use $request->query() if it were a $_GET query parameter

        $record = State::where( 'user_id', auth()->id() )->where('state_code', $state)->first(); 
                
        $data = [
            'api-version '  => 1,
            'state'         => $state,
            'image_url'     => $record ?? null,
        ];

        return response()->json($data);

    }
}
