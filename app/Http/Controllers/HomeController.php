<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function LoadHome() {
        $message = "Hello!";

        return view('home', [
            'message' => $message
        ]);
    }
}

