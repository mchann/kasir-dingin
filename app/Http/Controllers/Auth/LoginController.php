<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Pengguna; // Tambahkan use untuk model Pengguna
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;  // Tambahkan use untuk Auth
use Illuminate\Support\Facades\Hash;  // Tambahkan use untuk Hash
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        // Validasi inputan email dan password
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Cari pengguna berdasarkan email
        $pengguna = Pengguna::where('email', $request->email)->first();

        // Jika pengguna ditemukan dan password valid
        if ($pengguna && Hash::check($request->password, $pengguna->password)) {
            Auth::login($pengguna);  // Login menggunakan pengguna yang ditemukan
            return redirect(route('dashboard'));  
        }

        return back()->withErrors(['email' => 'The provided credentials do not match our records.']);
    }
    public function destroy(Request $request)
{
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('login'); // Redirect ke halaman login
}

}
