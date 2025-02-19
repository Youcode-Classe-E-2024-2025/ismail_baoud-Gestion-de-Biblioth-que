<?php

namespace  App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



/**
 *
 */
class authController extends Controller{

    /**
     * @return void
     */
    public function signup(){
        echo view('auth.signup');
    }

    /**
     * @return void
     */
    public function signin(){
        echo view('auth.signin');
    }


    public function create(Request $request){

    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);


        $firstName = $request->firsName;
        $lastName = $request->lastName;
        $email = $request->email;
        $phone = $request->phone;
        $image = $request->image;

        User::create([
            'firsName' => $request->firstname,
            'lastName' => $lastName,
            'email' => $email,
            'phone' => $phone,
            'image' => $image,
            'password' => Hash::make($firstName),

        ]);
        return redirect()->route('signin');
    }


    public function login_validate(Request $request){

        $email = $request->email;
        $password = $request->password;

        $data = ['email' => $email, 'password' => $password];



        dd($data);
        if(1){
            dd('yes');
            $request->session()->regenerate();
            return redirect()->route('home');
        }else{
            return back()->withErrors(['email or password incorrect'])->withInput(['email']);
        }
    }

}
