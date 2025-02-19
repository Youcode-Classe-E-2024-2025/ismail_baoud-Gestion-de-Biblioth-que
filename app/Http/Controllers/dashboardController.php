<?php

namespace App\Http\Controllers;

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
        echo view('front.dashboard');
    }
}
