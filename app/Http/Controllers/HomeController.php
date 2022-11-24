<?php

namespace App\Http\Controllers;

use App\Models\Attendee;
use App\Models\Questionasked;
use Illuminate\Support\Facades\Auth;
use App\Models\Train;
use App\Models\Trainer;

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
        abort_if(Auth::user()->cannot('view dashboard'), 403, 'Access Denied');
        $question = Questionasked::count();
        $training = Train::count();
        $trainer = Trainer::count();
        return view('home', compact('question','training','trainer'));
    }
}
