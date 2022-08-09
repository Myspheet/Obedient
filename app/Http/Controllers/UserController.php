<?php

namespace App\Http\Controllers;

use auth;
use session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    // To bring out the register view
    public function create()
    {
        return view('users.register');
    }

    public function show(User $user)
    {

        $user = auth()->user();
        return view('users.show', [       // Route Model Binding
            'user' =>  $user
        ]);
    }

    public function edit()
    {
        $user = auth()->user();
        return view('users.edit', [
            'user' =>  $user
        ]);
    }

    public function update(Request $request, User $user)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'number' => ['required', 'min:10'],
            'state' => ['required', 'min:3'],
            'lga' => ['required'],
            'ward' => ['required'],
            'pollingUnit' => ['required'],
            'rank' => ['required'],
            'email' => ['required', 'email'],
        ]);


        $user->update($formFields);
        return redirect('/profile');
    }



    // Storing user details
    public function store(Request $request)
    {

        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'number' => ['required', 'min:10'],
            'state' => ['required', 'min:3'],
            'lga' => ['required'],
            'ward' => ['required'],
            'pollingUnit' => ['required'],
            'rank' => ['required'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|min:6'
        ]);




        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        // create User
        $user = User::create($formFields);

        auth()->login($user);
        return redirect('/');
    }

    // shows login form
    public function login()
    {
        return view('users.login');
    }

    // authenicates user before login
    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)) {      // attempt to log the user in
            $request->session()->regenerate();

            return redirect('/');
        }

        return back()->withErrors(['fail' => 'Wrong Email and Password'])->onlyInput('email');
    }
}
