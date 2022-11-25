<?php

namespace App\Http\Controllers;
use App\Models\Train;
use App\Models\Attendee;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class AttendeeViewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(Request $request)
    {
        $attendee = new Attendee();
        $attendee->name = $request->input('name');
        $attendee->age = $request->input('age');
        $attendee->phone_number = $request->input('phone_number');
        $attendee->email = $request->input('email');
        $attendee->company = $request->input('company');
        $attendee->occupation = $request->input('occupation');
        $attendee->team_status = $request->input('team_status');
        $attendee->info_before = $request->input('info_before');
        $attendee->response_description = $request->input(
            'response_description'
        );
        $path = Storage::putFile('resumes', $request->file('resume'));
        $attendee->info_after = $request->input('info_after');
        $attendee->resume = $path;
        $attendee->train_id = 1;
        $attendee->time = $request->input('time');
        $attendee->learn_mode = $request->input('learn_mode');
        $attendee->save();
        Alert::success('Success!', 'Successfully Registered');
        return back();
    }

    public function show($id)
    {
        abort_if(Auth::user()->cannot('show attendee'), 403, 'Access Denied');

        $attendee = Attendee::where('id', $id)->find($id);
        return view('attendee.show', compact('attendee', 'id'));
    }
    // public function search()
    // {
    //     abort_if(Auth::user()->cannot('view attendeetrained'), 403, 'Access Denied');
    //     $data = request()->get('train_name');

    //     $attend = Attendee::with('train')->where('train_id', 'id')->get();

    //     $attendeewithtraining = $attend->filter(function ($attends, $key) use($data) {
    //         return $attends->train->contains('name', $data);
    //     });
    //     dd( $attendeewithtraining);

    // }
    public function downloadResume($id)
    {
        $resume = Attendee::where('id', $id)->firstOrFail();

        return response()->file(
            storage_path('app') . DIRECTORY_SEPARATOR . $resume->resume
        );
    }
}
