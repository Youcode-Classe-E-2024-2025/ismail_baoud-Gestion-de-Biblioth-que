<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 *
 */
class profileController extends Controller
{
    /**
     * @return void
     */
    public function index(){
        echo view('front.profile');
    }
}
