<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Questionasked;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
     
      return view('landing.attendee.question.index');
    }
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'name' => ['required'],
            'company' => ['required '],
            'trainer_name' =>  ['required'],
            'question' => ['required'],
          
        ]);
      
        $question = new Questionasked();
        $question->name = $request->input('name');
        $question->company = $request->input('company');
        $question->trainer_name = $request->input('trainer_name');
        $question->question = $request->input('question');
        $question->train_id = 1;
        $question->save();
        Alert::success('Success!', 'Wait for the answers');
        return back();
    }
}
    

