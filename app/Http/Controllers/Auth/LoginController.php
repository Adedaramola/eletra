<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function auth(Request $request)
    {
        $input = $this->validate($request, [
            'email' => 'required|string|max:255',
            'password' => 'required|string'
        ]);

        $user = User::where('email', $input['email'])->first();

        if (!$user || !Hash::check($input['password'], $user->password)) {
            return back()->with('status', 'User record doesn\'t exist');
        }

        Auth::attempt([
            'email' => $input['email'],
            'password' => $input['password']
        ]);

        return redirect()->route('dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
