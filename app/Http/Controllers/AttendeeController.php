<?php

namespace App\Http\Controllers;
use App\Models\Attendee;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class AttendeeController extends Controller
{
    public function index()
    {
        return view('landing.attendee.register.index');
    }
    public function attendee_store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required'],
            'emai' => ['required | email | unique'],
            'company' => ['required'],
            'occupation' => ['required'],
            'team_status' => ['required'],
            'info_before' => ['required'],
            'response_description' => ['required'],
            'age' => ['required'],
            'info_after' => ['required'],
            'time' => ['required'],
            'phone_number' => ['required'],
            'learn_mode' => ['required'],
        ]);

        $attendee = new Attendee();
        $attendee->train_id = $request->input('train_name');
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
        $attendee->info_after = $request->input('info_after');
        $attendee->train_id = 1;
        $attendee->time = $request->input('time');
        $attendee->learn_mode = $request->input('learn_mode');
        $attendee->save();
        Alert::success('Success!', 'Successfully Registered');
        return back();
    }
}
