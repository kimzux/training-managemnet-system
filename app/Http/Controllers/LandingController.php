<?php

namespace App\Http\Controllers;
use App\Models\Train;
use App\Models\Questionasked;
use Illuminate\Http\Request;

class LandingController extends Controller
{
  public function index()
  {

    $questions= Questionasked::with('answertrainer')->get();

    $training = Train::where('id', 2)->firstorFail();
    return view('landing.home.index', compact('training','questions'));
  }
  public function download($id)
    {
        $timetable = Train::where('id', $id)->firstOrFail();
    
        return response()->file(storage_path('app') . DIRECTORY_SEPARATOR .$timetable->timetable);
       
    }
    
}
