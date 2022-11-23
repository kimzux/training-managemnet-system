<?php

namespace App\Http\Controllers;
use App\Models\Train;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TrainingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        abort_if(Auth::user()->cannot('view training'), 403, 'Access Denied');
        $training = Train::all();
        return view('training.index', ['training' => $training]);
    }

    public function store(Request $request)
    {
        abort_if(Auth::user()->cannot('create training'), 403, 'Access Denied');
        $path = Storage::putFile('timetables', $request->file('timetable'));

        $training = new Train();
        $training->train_name = $request->input('train_name');
        $training->title = $request->input('title');
        $training->description = $request->input('description');
        $training->date = $request->input('date');
        $training->timetable = $path;
        $training->save();
        Alert::success('Success!', 'Successfully added');
        return redirect()
            ->route('training.index');
           
    }

    public function edit(Request $request, $id)
    {
        abort_if(Auth::user()->cannot('edit training'), 403, 'Access Denied');

        $training = Train::findOrFail($id);

        return view('training.edit', compact('training'));
    }
    public function update(Request $request, $id)
    {
        abort_if(Auth::user()->cannot('update training'), 403, 'Access Denied');
   
  $validatedData =  $request->validate([
      'train_name' => 'required',
       'timetable'=> 'required',
      
  ]);
  
  Train::whereId($id)->update($validatedData);
  Alert::success('Success!', 'Successfully updated');
  return redirect()->route('training.index');
}
public function destroy($id)
{
    abort_if(Auth::user()->cannot('delete traning'), 403, 'Access Denied');
  $training =  Train::findOrFail($id);
  $training->delete();
  Alert::success('Success!', 'Successfully deleted');
  return back();

}
    public function download($id)
    {
      
        $notice = Train::where('id', $id)->firstOrFail();
        return response()->file(storage_path('app') . DIRECTORY_SEPARATOR . $notice->timetable);
    }
}
