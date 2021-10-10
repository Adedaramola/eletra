<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Election;
use Illuminate\Http\Request;

class ElectionController extends Controller
{
    public function index()
    {
        $elections = Election::all();
        return view('admin.election.index', compact('elections'));
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
