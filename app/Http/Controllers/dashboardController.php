<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\User;
use Illuminate\Http\Request;

/**
 *
 */
class dashboardController extends Controller
{
    /**
     * @return void
     */

    public function index(){
        $books = book::all();

        return view('front.home')->with('books', $books);

    }

    /**
     * @return void
     */
    public function userDashboard(){
        $user = User::find(session('id'));
        $books = $user->reservedBooks;
        echo view('front.dashboard')->with('books', $books);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|object
     */
    public function adminDashboard(){
        $users =   User::all();
        return view('back.dashboard')->with('users', $users);
    }

}
