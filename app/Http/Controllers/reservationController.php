<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reservation;
class reservationController extends Controller
{
    public function store($id)
    {
        $user_id = session('id');

        reservation::create([
            'user_id' => $user_id,
            'book_id' => $id,
        ]);
        return redirect()->route('home')->with('success', 'Reservation booked');
    }
}
