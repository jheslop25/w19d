<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class kanyeApiController extends Controller
{
    public function getQuote(){
        $quotes = [

            "For me giving up is way harder than trying.",

            "Everything you do in life stems from either fear or love",

            "Tweeting is legal and also therapeutic",

            "People always say that you can't please everybody. I think that's a cop-out. Why not attempt it? Cause think of all the people that you will please if you try.",

            "I still think I am the greatest.",

            "Keep squares out yo circle",

            "We all self-conscious. Im just the first to admit it.",

            "Man... whatever happened to my antique fish tank?",

            "Ill say things that are serious and put them in a joke form so people can enjoy them. We laugh to keep from crying.",

            "Sometimes you have to get rid of everything",

            "Burn that excel spread sheet",

            "I love sleep; it's my favorite.",

            "I wish I had a friend like me",
         ];
        $index = rand(0, 13);
        $kanyeQuote = $quotes[$index];
        return response()->json(['quote' => $kanyeQuote]);
    }
}
