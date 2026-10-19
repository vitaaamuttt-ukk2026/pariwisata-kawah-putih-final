<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class PanelAuthController extends Controller
{
    private const ROLES = [
        'admin'     => 'Admin',
        'pengelola' => 'Pengelola',
    ];

    public function showLogin(string $role): View|RedirectResponse
    {
        $this->assertRole($role);
        
        // Jika sudah login dan rolenya sesuai, langsung lempar ke dashboard
        if (Auth::check() && Auth::user()->role === $role) {
            return redirect()->route("$role.dashboard");
        }
        
        return view('auth.login', [
            'role'      => $role,
            'roleLabel' => self::ROLES[$role],
            'others'    => array_diff_key(self::ROLES, [$role => true]),
        ]);
    }

    public function login(Request $request, string $role): RedirectResponse
{
    $this->assertRole($role);
    
    $credentials = $request->validate([
        'email'    => ['required', 'email'],
        'password' => ['required', 'string'],
    ]);

    $user = \App\Models\User::where('email', $credentials['email'])->first();
    
    // Cek password dan role
    if (!$user || $user->role !== $role || !\Illuminate\Support\Facades\Hash::check($credentials['password'], $user->password)) {
        return back()
            ->withInput($request->only('email'))
            ->withErrors(['email' => 'Email atau kata sandi salah, atau akun ini bukan akun ' . ucfirst($role) . '.']);
    }

    // Lakukan Login
    Auth::login($user, $request->boolean('remember'));
    $request->session()->regenerate();

    // ✅ PERBAIKAN DI SINI: Arahkan sesuai Role User
    if ($user->role === 'admin') {
        return redirect()->intended(route('admin.dashboard')); // Ke /admin
    } 
    
    if ($user->role === 'pengelola') {
        return redirect()->intended(route('pengelola.dashboard')); // Ke /pengelola
    }

    // Fallback jika role tidak dikenali
    return redirect('/');
}

    public function logout(Request $request): RedirectResponse
    {
        $role = Auth::user()?->role;
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect()->route('panel.login', array_key_exists((string) $role, self::ROLES) ? $role : 'pengelola');
    }

    private function assertRole(string $role): void
    {
        abort_unless(array_key_exists($role, self::ROLES), 404);
    }
}