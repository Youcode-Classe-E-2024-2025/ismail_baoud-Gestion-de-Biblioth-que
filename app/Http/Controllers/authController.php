<?php

namespace  App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


use Illuminate\Support\Facades\Storage;

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

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'firsName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'nullable|string|max:20',
            'password' => 'required|min:6',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validation stricte de l'image
        ]);

        // Vérifier et stocker l'image
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('profile_images', 'public');
        } else {
            $imagePath = null;
        }

        // Créer l'utilisateur
        User::create([
            'firsName' => $validatedData['firsName'], // Correction du champ
            'lastName' => $validatedData['lastName'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'] ?? null,
            'password' => Hash::make($validatedData['password']),
            'role' => 'user',
            'image' => $imagePath, // Enregistrer le chemin de l'image
        ]);

        return redirect()->route('signin')->with('success', 'Account created successfully');
    }



    public function loginStore(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();
            $request->session()->put('user', $user);
            $request->session()->put('role', $user->role);
            return redirect()->route('home')->with('success', 'Login successful');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }



    public function logout(){
            Session::flush(); // Supprime toutes les sessions
            auth()->logout(); // Déconnecte l'utilisateur si tu utilises Laravel Auth
            return redirect('/signin');
    }


}
