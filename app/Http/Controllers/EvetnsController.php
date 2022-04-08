<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\event_prod;


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
       
       
        $events =event_prod::all();
       
        return view('index',compact('events'));
    }
    public function all_Events()
    {
        $events =event_prod::all();
       
        return view('all_events',compact('events'));
      
    }
   
   
    
}
