<?php

namespace App\Http\Controllers;

use App\Mail\CandidateApplied;
use App\Models\Candidate;
use App\Models\Election;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CandidateApplicationController extends Controller
{
    public function index()
    {
        if (!request()->hasValidSignature()) {
            abort(401);
        }

        return view('candidate.apply');
    }

    public function store(Request $request)
    {
        $candidate = Candidate::with('election')->where('email', $request->email)->first();
        $election_candidate_code = $candidate->election->candidate_code;


        if ($candidate->election_id !== $request->election_id) {
            abort(401);
        }

        if ($election_candidate_code !== $request->candidate_code) {
            abort(401);
        }

        $input = $request->validate([
            'name' => 'required|string',
            'manifesto' => 'required'
        ]);

        $candidate->name = $input['name'];
        $candidate->manifesto = $input['manifesto'];

        $candidate->save();

        Mail::to($candidate)->send(new CandidateApplied);

        return redirect('/');
    }
}
