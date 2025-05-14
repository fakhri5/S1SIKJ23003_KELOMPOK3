<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request) {
        $data = $request->validate([
            'username'              => ['required', 'string', 'max:20', 'unique:users,username'],
            'email'                 => ['required', 'string', 'email', 'max:60', 'unique:users,email'],
            'password'              => ['required', 'string', 'min:8', 'max:16', 'confirmed'],
        ]);

        $user = User::create([
            'username' => $data['username'],
            'email'    => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        if (Role::where('role_name', 'customer')->first()) {
            $user->roles()->attach(Role::where('role_name', 'customer')->first()->id_role);
        }

        return redirect()
            ->route('login')
            ->with('success', 'Registrasi berhasil! Silakan login menggunakan akun Anda.');
    }
}
