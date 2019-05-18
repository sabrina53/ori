<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
        
     if (Auth::check()) {
          // $projects = Project::select()->where([
          //   [ 'completion_status', '=', 'current'],
          //   [ 'user_id', '=', Auth::id()] ])->get();

          //   $numprojects = count($projects);

          //    return view('home', ['numprojects' =>$numprojects]); 
             return view('home');  

         } else {
             return view('auth.login');
         }
     
    }
}
