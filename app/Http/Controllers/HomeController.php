<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // if (auth()->check()) {
        //     // Get the authenticated user's ID
        //     $userId = auth()->id();
        //     // Now $userId contains the authenticated user's ID
        // } else {
        //     // User is not authenticated
        // }
        // dd($userId);
        return view('home');
    }
}
