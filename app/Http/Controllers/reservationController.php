<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\Reservation;
use Illuminate\Support\Facades\DB;

/**
 *
 */
class reservationController extends Controller
{


    public function index(){
        $reservations = DB::TABLE('reservations')
            ->join('users', 'users.id', '=', 'reservations.user_id')
            ->join('books', 'books.id', '=', 'reservations.book_id')
            ->select('reservations.*', 'reservations.created_at as created_reserv', 'users.*', 'books.*')
            ->get();

        echo view('back.emprunts')->with('reservations', $reservations);

    }
    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store($id)
    {
        $user_id = session('id');
        $book_id = $id;
        $status = 'reserved';

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
        try {
            Rrservation::create([
                'user_id' => $user_id,
                'book_id' => $id
            ]);
            $book = book::find($book_id);
            $book->status = $status;
            $book->save();
            return redirect()->route('home')->with('success', 'Reservation booked');
        }catch(\Exception $e){
            return redirect()->route('home')->with('error', 'You have already reserved one book. You can only reserve one.');
        }

    }

    public function delete($id){
        $reservation = Reservation::where('book_id', $id)->first();
        $reservation->delete();
        $book = book::find($id);
        $book->status = null;
        $book->save();
        return redirect()->route('userDashboard')->with('success', 'Reservation deleted');
    }


}
