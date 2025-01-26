<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {   
        return view('landingPage', [
            'slimHeader' => true,
        ]);
    }

    public function game()
    {
        return view('game');
    }
}
