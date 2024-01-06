<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;

class EventController extends Controller
{
    public function index(): View
    {
        return view('events.index');
    }

    public function create(): View
    {
        Gate::authorize('admin');

        return view('events.create');
    }
}
