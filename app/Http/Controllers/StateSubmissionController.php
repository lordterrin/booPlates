<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Models\State;
use App\Models\StateName;

class StateSubmissionController extends Controller
{
    //create/store

    public function create(Request $request) {
        $code = strtoupper($request->route('code'));
        $state = StateName::where('code', $code)->first();
        $image = State::where('state_code', $code)->where('user_id', auth()->id())->first();
        
        
        return view('states.submit', [
            'code'      => $code,
            'state'     => $state->name ?? '',
            'moniker'   => $state->moniker ?? '',
            'image'     => $image->img_location ?? '',
        ]);
    }

    public function store(Request $request, string $code) {

        /* $request contains an image file, $code contains the state code for this request */
        $userId = auth()->id();

        /* make sure the image is not over 5mb because dumb kids don't understand how expensive storage space is! */
        $validated = $request->validate([
            'photo'   => ['required', 'image', 'max:5120'],            
        ]);

        // are we writing a new file here, or updating the record?
        $existing = State::where('user_id', $userId)
            ->where('state_code', $code)
            ->first();

        if ($existing && $existing->img_location) {
            Storage::disk('public')->delete($existing->img_location);
        }

        $path = $request->file('photo')->store($code, 'state_images');


        /* create the database record for this */        
        State::updateOrCreate(
            [
                'user_id'    => $userId,
                'state_code' => $code,
            ],
            [
                'img_location' => $path,
            ]
        );

        return redirect()
            ->route('state.submit', ['code' => $code])
            ->with('status', 'OMG, Slay Queen!  Photo uploaded successfully.');

    }

    
}
