<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class BookingController extends Controller
{
    public function index(): View
    {
        return view('bookings.index');
    }
}
