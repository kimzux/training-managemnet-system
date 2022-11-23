<?php

namespace App\Http\Controllers;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        abort_if(Auth::user()->cannot('view user'), 403, 'Access Denied');
        $users = User::with('roles')->get();
        $roles = Role::all();
        return view('user-management.users.index', compact('users', 'roles'));
    }

    public function updateRole(Request $request, User $user)
    {
        abort_if(Auth::user()->cannot('assign userrole'), 403, 'Access Denied');
        $request->validate([
            'role' => ['required'],
        ]);

        $user->assignRole($request->role);
        Alert::success('Success!', 'Successfully added');
        return redirect()->route('users.index');
           
    }
    public function store(Request $request)
    {
        abort_if(Auth::user()->cannot('create user'), 403, 'Access Denied');
        $validatedData = $request->validate([
            'name' => 'required | string | max:255',
            'email' => 'required | string | email | max:255 | unique:users',
            'password' => 'required | min:8 ',
        ]);

        $users = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'password_reset' => ($request->password_reset = 1),
        ]);
        Alert::success('Success!', 'Successfully Create');
        return back();
    }
    public function destroy($id)
    {
        abort_if(Auth::user()->cannot('delete user'), 403, 'Access Denied');
        $role = User::findOrFail($id);
        $role->delete();
        Alert::success('Success!', 'Successfully deleted');
        return back();
    }
    public function edit($id)
    {
        abort_if(Auth::user()->cannot('edit user'), 403, 'Access Denied');
        $user = User::findOrFail($id);

        return view('user-management.users.editUser', compact('user'));
    }

    public function update(Request $request, $id)
    {
        abort_if(Auth::user()->cannot('update user'), 403, 'Access Denied');
        $validator = Validator::make($request->all(), [
            'name' => 'required | string | max:255',
            'email' => 'required|email|unique:users,email,' . $id . ',id',
            'password' => 'required | min:8 ',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        $validated = $validator->validated();
        $validated = $validator->safe()->only(['name', 'email', 'password']);
        $validated['password'] = Hash::make($validated['password']);
        User::whereId($id)->update($validated);
        Alert::success('Success!', 'Successfully added');
        return redirect()->route('users.index');
    }
}
