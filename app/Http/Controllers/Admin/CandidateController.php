<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\InviteCandidate;
use App\Models\Candidate;
use App\Models\Election;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CandidateController extends Controller
{
    public function show($id)
    {
        $election = Election::findOrFail($id);
        return view('admin.election.candidate', compact('election'));
    }


    public function store(Request $request, $id)
    {
        $input = $this->validate($request, [
            'position' => 'required|string',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email'
        ]);

        $election = Election::findOrFail($id);

        $candidate = $election->candidates()->create([
            'position' => $input['position'],
            'name' => $input['name'],
            'email' => $input['email']
        ]);

        Mail::to($candidate)->send(new InviteCandidate($election, $candidate));

        return back()->with('status', 'Candidate added successfully');
    }
}
