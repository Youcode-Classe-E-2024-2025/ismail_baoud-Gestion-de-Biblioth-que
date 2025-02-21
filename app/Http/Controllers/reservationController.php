<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Reservation;

/**
 *
 */
class reservationController extends Controller
{


    public function index(){
        $user = User::all();
        dd($user);

        $books = $user->reservedBooks;
        echo view('front.dashboard')->with('books', $books);
    }
    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store($id)
    {
        $user_id = session('id');
        $book_id = $id;

        // Vérifier si la réservation existe déjà
        $exists = Reservation::where('user_id', $user_id)
            ->where('book_id', $book_id)
            ->exists();

        if ($exists) {
            $error = [
                'error' => 'Vous avez déjà réservé ce livre.'
            ];
            return back()->withErrors($error);
        }
        Reservation::create([
            'user_id' => $user_id,
            'book_id' => $id,
        ]);
        return redirect()->route('home')->with('success', 'Reservation booked');
    }

    public function delete($id){
        $reservation = Reservation::where('book_id', $id)->first();
        $reservation->delete();
        return redirect()->route('userDashboard')->with('success', 'Reservation deleted');
    }


}
