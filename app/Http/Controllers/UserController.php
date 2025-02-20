<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function deleteUser($id){
        $user = User::find($id);
        $user->delete();
        return redirect('/adminDashboard');
    }


    public function editUser(Request $request , $id){

        $request = $request->validate([
            'firsName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);
        $user = User::find($id);
        $user->update($request);
        return redirect('/profile');
    }
}
