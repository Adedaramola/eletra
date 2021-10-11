<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends Controller
{
    public function show(Request $request)
    {
        return view('admin.profile');
    }


    public function update(Request $request, User $user)
    {
        $user = User::findOrFail($user->id);
        dd($user);
    }

    public function delete(Request $request)
    {
        if (!Hash::check($request->password, auth()->user()->password)) {
            return back();
        }

        $request->user()->delete();
        return redirect()->route('login');
    }
}
