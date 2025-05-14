<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Store;
use App\Models\ActivityLog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{

    public function openStore(Request $request)
    {
        $user = Auth::user();

        // Pastikan ada role seller & attach ke user
        $sellerRole = Role::firstOrCreate(['role_name' => 'seller']);
        $user->roles()->syncWithoutDetaching($sellerRole->id_role);

        // Validasi input
        $data = $request->validate([
            'store_name'    => 'required|string|max:100',
            'description'   => 'required|string',
            'store_address' => 'required|string',
        ]);

        // Buat slug unik
        $base = Str::slug($data['store_name']);
        $slug = $base;
        $i = 1;
        while (Store::where('slug', $slug)->exists()) {
            $slug = "{$base}-{$i}";
            $i++;
        }
        $data['slug'] = $slug;

        // upload logo via storage disk
        if ($request->hasFile('store_logo')) {
            $data['store_logo'] = $request->file('store_logo')
                ->store('logos', 'public');
        }

        // Upload banner via storage disk
        if ($request->hasFile('store_banner')) {
            $data['store_banner'] = $request->file('store_banner')
                ->store('banners', 'public');
        }

        // Simpan store
        $store = $user->stores()->create($data);

        // Catat activity
        ActivityLog::create([
            'id_user'   => $user->id_user,
            'action'    => 'create',
            'entity'    => 'store',
            'target_id' => $store->id_store,
            'notes'     => "User {$user->username} opened store \"{$store->store_name}\"",
        ]);

        return redirect()
            ->route('sellerdashboard')
            ->with('success', 'Toko berhasil dibuka!');
    }
    // public function createStore(Request $request)
    // {
    //     $user = Auth::user();

    //     // Assign 'seller' role kalo belum
    //     if (! $user->roles()->where('role_name', 'seller')->exists()) {
    //         $sellerRole = Role::where('role_name', 'seller')->first();
    //         $user->roles()->attach($sellerRole->id_role);
    //     }

    //     // Validasi data request
    //     $data = $request->validate([
    //         'store_name'    => 'required|string|max:100',
    //         'description'   => 'required|string',
    //         'store_address' => 'required|string',
    //         // 'store_logo'    => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
    //         // 'store_banner'  => 'nullable|image|mimes:jpeg,png,jpg,svg|max:4096',
    //     ]);

    //     // Generate slug unik untuk toko
    //     $slug = Str::slug($data['store_name']);
    //     // $counter = 1;
    //     // while (Store::where('slug', $slug)->exists()) {
    //     //     $slug = Str::slug($data['store_name']) . '-' . $counter++;
    //     // }
    //     $data['slug'] = $slug;

    //     // Upload logo via storage disk
    //     // if ($request->hasFile('store_logo')) {
    //     //     $data['store_logo'] = $request->file('store_logo')
    //     //         ->store('logos', 'public');
    //     // }

    //     // // Upload banner via storage disk
    //     // if ($request->hasFile('store_banner')) {
    //     //     $data['store_banner'] = $request->file('store_banner')
    //     //         ->store('banners', 'public');
    //     // }

    //     // Buat toko baru untuk user terautentikasi
    //     $store = $user->stores()->create($data);

    //     // Catat aktivitas
    //     ActivityLog::create([
    //         'user_id'   => $user->id_user,
    //         'action'    => 'create',
    //         'entity'    => 'store',
    //         'target_id' => $store->id_store,
    //         'notes'     => 'Store "' . $store->store_name . '" created by user ' . $user->id_user,
    //     ]);

    //     return redirect()->route('ctm.page.home');

    //     // return redirect()
    //     //     ->route('stores.show', $store->slug);
    //     // ->with('success', 'Store created successfully!');
    // }
}
