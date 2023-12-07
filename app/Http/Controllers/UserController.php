<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function register()
    {
        return view('pages.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
            'nama' => ['required', 'unique:users,username'],
            'alamat' => ['required'],
            'hp' => ['required', 'numeric'],
        ]);

        $credentials['password'] = Hash::make($request->password);

        User::create($credentials);

        // You can add a success message or redirection here
        return redirect()->route('login.index')->with('success', 'User registered successfully');
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
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);


        // dd($request->password);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (Auth::user()->is_admin) {
                // Redirect to the admin dashboard or some admin-specific route
                return redirect()->route('adminProduk.index');
            } else {
                // Redirect to the regular user dashboard or some user-specific route
                return redirect()->route('home');
            }
        }

        return back()->with('LoginFailed', 'Login Gagal!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
