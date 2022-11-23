<?php

namespace App\Http\Controllers;
use App\Models\Train;
use App\Models\Trainer;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
      abort_if(Auth::user()->cannot('view trainer'), 403, 'Access Denied');
        $trainer = Trainer::all();
        return view('trainer.index', ['trainer' => $trainer]);
    }
    public function store(Request $request)
    {
      abort_if(Auth::user()->cannot('create trainer'), 403, 'Access Denied');
        $trainer = new Trainer();
        $trainer->name = $request->input('name');
        $trainer->email = $request->input('email');
        $trainer->train_id = $request->input('train_id');
        $trainer->title= $request->input('title');
        $trainer->organization= $request->input('organization');
        $trainer->save();
        Alert::success('Success!', 'Successfully added');
        return redirect()
            ->route('trainer.index');
    }
    
    public function edit(Request $request, $id)
    {
      abort_if(Auth::user()->cannot('edit trainer'), 403, 'Access Denied');
        $trainer = Trainer::findOrFail($id);
        $training = Train::all();
        return view('trainer.edit', compact('trainer','training'));
    }
    public function update(Request $request, $id)
    {
      abort_if(Auth::user()->cannot('update trainer'), 403, 'Access Denied');
   
  $validatedData =  $request->validate([
      'name' => 'required',
      'proffesionality' => 'required',
       'train_id'=> 'required',
      
  ]);
  
  Trainer::whereId($id)->update($validatedData);
  Alert::success('Success!', 'Successfully updated');
  return redirect()->route('trainer.index');
}

public function destroy($id)
{
  abort_if(Auth::user()->cannot('delete trainer'), 403, 'Access Denied');
  $trainer =  Trainer::findOrFail($id);
  $trainer->delete();
  Alert::success('Success!', 'Successfully deleted');
  return back();

}

}
