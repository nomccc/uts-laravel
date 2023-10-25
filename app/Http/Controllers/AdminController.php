<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    // buat login
    public function login()
    {
        return view("index");
    }

    // buat login
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['string', 'email'],
            'password' => ['required', 'string'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        };

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    /**
     * Show the form for creating a new resource.
     */
    // buat registrasi
    public function create()
    {
        return view('index');
    }

    /**
     * Store a newly created resource in storage.
     */
    // buat registrasi
    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if (Auth::attempt(['email' => $user->email, 'password' => $request->password])) {
            $request->session()->regenerate();

            return redirect()->intended('');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
