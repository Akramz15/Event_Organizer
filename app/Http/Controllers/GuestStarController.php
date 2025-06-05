<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GuestStar;

class GuestStarController extends Controller
{
    // Tampilkan semua guest star
    public function index()
    {
        $guestStars = GuestStar::all();
        return view('admin.gueststar.index', compact('guestStars'));
    }

    // Tampilkan form tambah guest star
    public function create()
    {
        return view('admin.gueststar.create');
    }

    // Simpan data guest star baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_band_artis' => 'required|string|max:255',
            'deskripsi' => 'required',
            'anggota_band' => 'required',
            'instagram' => 'nullable|string|max:255',
            'twitter' => 'nullable|string|max:255',
            'youtube' => 'nullable|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle upload foto
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('gueststar', 'public');
            $validated['foto'] = $fotoPath;
        }

        GuestStar::create($validated);
        return redirect()->route('gueststar.index')->with('success', 'Guest star berhasil ditambahkan!');
    }

    // Tampilkan detail guest star
    public function show($id)
    {
        $guestStar = GuestStar::findOrFail($id);
        return view('admin.gueststar.show', compact('guestStar'));
    }

    // Tampilkan form edit guest star
    public function edit($id)
    {
        $guestStar = GuestStar::findOrFail($id);
        return view('admin.gueststar.edit', compact('guestStar'));
    }

    // Update data guest star
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_band_artis' => 'required|string|max:255',
            'deskripsi' => 'required',
            'anggota_band' => 'required',
            'instagram' => 'nullable|string|max:255',
            'twitter' => 'nullable|string|max:255',
            'youtube' => 'nullable|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $guestStar = GuestStar::findOrFail($id);
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('gueststar', 'public');
            $validated['foto'] = $fotoPath;
        }
        $guestStar->update($validated);
        return redirect()->route('gueststar.index')->with('success', 'Guest star berhasil diupdate!');
    }

    // Hapus guest star
    public function destroy($id)
    {
        $guestStar = GuestStar::findOrFail($id);
        $guestStar->delete();
        return redirect()->route('gueststar.index')->with('success', 'Guest star berhasil dihapus!');
    }
}
