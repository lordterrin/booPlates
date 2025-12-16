<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class BooBoardController extends Controller
{    
    
    public function display() {
                
        return view('booBoards');
    }
}
