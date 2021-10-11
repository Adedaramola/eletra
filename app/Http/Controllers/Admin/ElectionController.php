<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ElectionCreated;
use App\Models\Election;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ElectionController extends Controller
{
    public function index(Request $request)
    {
        $elections = auth()->user()->elections;
        return view('admin.election.index', compact('elections'));
    }

    public function store(Request $request)
    {
        $input = $this->validate($request, [
            'name' => 'required|string|unique:elections',
            'description' => 'required|string|max:255',
            'contestable_categories' => 'required'
        ]);

        $election = $request->user()->elections()->create([
            'name' => $input['name'],
            'description' => $input['description'],
            'contestable_categories' => $input['contestable_categories'],
        ]);

        Mail::to(auth()->user())->send(
            new ElectionCreated(
                auth()->user(),
                $election
            )
        );

        return redirect()->route('elections.show', $election->id);
    }

    public function show()
    {
        return view('admin.election.create');
    }

    public function view(Election $election)
    {
        $user = auth()->user();
        $election = $user->elections()->findOrFail($election->id);
        return view('admin.election.show', compact('election'));
    }

    public function application(Election $election)
    {
        $election = $election->findOrFail($election->id);
        return view('admin.election.application', compact('election'));
    }

    public function setting($id)
    {
        $election = Election::findOrFail($id);
        return view('admin.election.settings', compact('election'));
    }


    public function destroy(Election $election, Request $request)
    {
        $this->authorize('delete', $election);

        $this->validate($request, [
            'password' => 'required'
        ]);

        if (!Hash::check($request->password, auth()->user()->password)) {
            return back();
        }

        $election->delete();
        return redirect()->route('elections');
    }
}
