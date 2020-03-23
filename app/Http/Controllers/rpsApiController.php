<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rpsApiController extends Controller
{
    public function playGame(){
        $index = rand(0, 2);
        $moves = [
            'rock',
            'paper',
            'scissors'
        ];
        return response()->json(['move' => $moves[$index]]);
    }
}
