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

    public function userDashboard(){
        $books = book::all();
        echo view('front.dashboard')->with('books', $books);
    }
    public function adminDashboard(){
        $users =   User::all();
        return view('back.dashboard')->with('users', $users);
    }

}
