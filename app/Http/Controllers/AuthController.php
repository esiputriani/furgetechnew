<?php

     namespace App\Http\Controllers;

     use Illuminate\Http\Request;
     use Illuminate\Support\Facades\Auth;
     use Illuminate\Support\Facades\Hash;
     use App\Models\User;

     class AuthController extends Controller
     {
         public function showLoginForm()
         {
             return view('auth.login');
         }

         public function login(Request $request)
         {
             $credentials = $request->validate([
                 'email' => 'required|email',
                 'password' => 'required',
             ]);

             if (Auth::attempt($credentials)) {
                 return redirect('/')->with('success', 'Login berhasil!'); // Redirect ke home
             }

             return back()->withErrors(['email' => 'Kredensial tidak valid.']);
         }

         public function logout()
         {
             Auth::logout();
             return redirect('/')->with('success', 'Logout berhasil!');
         }

         public function showRegistrationForm()
         {
             return view('auth.register');
         }

         public function register(Request $request)
         {
             $request->validate([
                 'name' => 'required|string|max:255',
                 'email' => 'required|email|unique:users',
                 'password' => 'required|min:6|confirmed',
             ]);

             User::create([
                 'name' => $request->name,
                 'email' => $request->email,
                 'password' => Hash::make($request->password),
             ]);

             return redirect('/login')->with('success', 'Registrasi berhasil! Silakan login.');
         }
     }
     ?>