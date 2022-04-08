<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\event_prod;



class DashboardController extends Controller
{
    public function index()
    {
        if (! auth()->user()->isAdmin()) {
            Auth::user();
            $events =event_prod::all();
           
            return view('user.dashboard',compact('events'));
        }
        

        return view('backend.dashboard');
    }
}
