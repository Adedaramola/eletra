<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{

    public function __construct()
    {
        //
    }

    public function render()
    {
        session()->flash('flash.banner', 'success');
        session()->flash('flash.banner', 'Want to collaborate with your team, get unlimited voters import and more? Upgrade to Premium');
        return view('layouts.app');
    }
}
