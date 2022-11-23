<?php

namespace App\Http\Controllers;

use App\Models\Answertrainer;
use Illuminate\Http\Request;

class QuestionAnswersController extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
}
    public function index()
    {
        $answer = Answertrainer::with('questionasked')->get();
        return view('questionView.answer.show', compact('answer'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'answer' => ['required'],
        ]);

        $question = new Answertrainer();
        $question->answer = $request->input('answer');
        $question->questionasked_id = $request->input('question_id');
        $question->save();
        return back();
    }
    public function destroy($id)
    {
        $question = Answertrainer::findOrFail($id);
        $question->delete();
        return back();
    }
}
