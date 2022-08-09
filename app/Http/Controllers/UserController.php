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

    // Storing user details
    public function store(Request $request)
    {

        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'number' => ['required', 'min:10'],
            'state' => ['required', 'min:3'],
            'lga' => ['required', 'min:3'],
            'ward' => ['required', 'min:3'],
            'pollingUnit' => ['required', 'min:3'],
            'rank' => ['required', 'min:3'],
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

        return back()->withErrors(['email' => 'Invalid Crdentials'])->onlyInput('email');
    }
}
