<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\State;
use App\Models\StateName;
use App\Models\User;

class StateController extends ApiController
{
    public function index(Request $request)
    {
        
        // Pull in the userId from $_GET
        $userId = $request->query('userId') ?? 0;
        
        // Just get all the state names in alphabetical order
        $stateNames = StateName::orderBy('name')->get();

        // Object of each State that the user has uploaded a photo for
        $userPhotos = State::where('user_id', $userId)->get()->keyBy('state_code');

        //Selects TOTAL number of users who have uploaded a photo of a particular state
        $totals = State::selectRaw('state_code, COUNT(*) as total')
        ->groupBy('state_code')
        ->pluck('total', 'state_code');
                        
        $data = [];
        foreach( $stateNames as $s ) {
            
            $stateCode = $s->code;

            if ( $userPhotos->has($stateCode) ) {
                $userStatus = 1;                
                $upload = $userPhotos[$stateCode];
                $statePhoto = [
                    'uploaded_at' => optional($upload->created_at)->toIso8601String(),
                    'photo_url'   => $this->publicImageUrl($upload->img_location),
                    'raw_path'    => $upload->img_location,
                ];
            } else {
                $userStatus = 0;
                $statePhoto = [];
            }
            
            $data[] = [
                'code' => $s->code ?? '',
                'name' => $s->name ?? '',
                'moniker' => $s->moniker ?? '',
                'user_status' => $userStatus,
                'user_photo' => $statePhoto,
                'total_state_users' => $totals[$stateCode] ?? 0,
            ];
            


        }
        
        $meta = [
            'total_states' => count($data),
            'user'=> $userId,
            'purpose'=>'retrieve state-level data related to an individual user'
        ];


        return $this->success($data, $meta);

        

    }

    protected function publicImageUrl(string $path): string
    {        
        return Storage::disk('public')->url($path);
    }
}
