<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvetnsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }
    public function Index()
    {
        return view('/Index');
    }
    public function all_Events()
    {
        return view('/all_events');
    }
    
}
