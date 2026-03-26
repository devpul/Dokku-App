<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        Auth::logout();

        // Hapus semua data di session agar tidak bisa dipakai lagi
        $request->session()->invalidate();

        // 3. Buat token CSRF baru untuk mencegah serangan CSRF di masa depan
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Kamu berhasil keluar!');
    }
}
