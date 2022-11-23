<?php

namespace App\Http\Controllers;
use App\Models\Questionasked;
use App\Models\Answertrainer;
use Illuminate\Http\Request;

class QuestionViewController extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
}
    public function index()
    {
      $questionask= Questionasked::with('answertrainer')->get();
      return view('questionView.index', compact('questionask'));
    }
    public function show($id)
    {
      $answer= Answertrainer::with('questionasked')->where('questionasked_id', $id)->get();
      return view('questionView.answer.show', compact('answer', 'id'));
    }
}
