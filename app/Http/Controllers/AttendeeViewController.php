<?php

namespace App\Http\Controllers;
use App\Models\Train;
use App\Models\Attendee;
use Illuminate\Http\Request;

class AttendeeViewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $training= Train::select('id','train_name')->get();
        $attendee = Attendee::all();

        return view('attendee.index', compact('attendee', 'training'));
    }
    public function show($id)
    {

        $attendee = Attendee::where('id', $id)->find($id);
        return view('attendee.show', compact('attendee', 'id'));
    }
    
}
