<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Pengguna; // Ganti dengan model Pengguna
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:pengguna'], 
            'email' => ['required', 'string', 'email', 'max:255', 'unique:pengguna'], 
            'role' => ['required', 'in:admin,user'], 
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Simpan pengguna baru
        $pengguna = Pengguna::create([
            'username' => $request->username, 
            'name' => $request->name,  
            'email' => $request->email,
            'role' => $request->role, 
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($pengguna));

        
    Auth::attempt(['email' => $request->email, 'password' => $request->password]);

    // Redirect ke dashboard kelar logim
    return redirect()->route('dashboard')->with('success', 'Registrasi berhasil, Anda sudah login.');
    }
}
