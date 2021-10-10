<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ElectionCreated;
use App\Models\Election;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ElectionController extends Controller
{
    public function index()
    {
        $elections = Election::all();
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

    public function view($id)
    {
        $election = Election::findOrFail($id);
        return view('admin.election.show', compact('election'));
    }

    public function application($id)
    {
        $election = Election::findOrFail($id);
        return view('admin.election.application', compact('election'));
    }

    public function setting($id)
    {
        $election = Election::findOrFail($id);
        return view('admin.election.settings', compact('election'));
    }
}
