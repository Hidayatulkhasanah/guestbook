<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guestbook;

class GuestbookController extends Controller
{
    public function index()
    {
        // Menampilkan semua entri guestbook
        $guestbooks = Guestbook::all();
        return view('guestbooks.index', compact('guestbooks'));
    }

    public function create()
    {
        // Menampilkan formulir untuk membuat entri baru
        return view('guestbooks.create');
    }

    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'name' => 'required',
            'message' => 'required',
        ]);

        // Menyimpan entri baru ke database
        Guestbook::create($request->all());

        return redirect()->route('guestbooks.index')->with('success', 'Entri guestbook berhasil ditambahkan!');
    }

    public function show($id)
    {
        // Menampilkan detail entri guestbook
        $guestbook = Guestbook::findOrFail($id);
        return view('guestbooks.show', compact('guestbook'));
    }

    public function edit($id)
    {
        // Menampilkan formulir untuk mengedit entri guestbook
        $guestbook = Guestbook::findOrFail($id);
        return view('guestbooks.edit', compact('guestbook'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data
        $request->validate([
            'name' => 'required',
            'message' => 'required',
        ]);

        // Memperbarui entri guestbook di database
        $guestbook = Guestbook::findOrFail($id);
        $guestbook->update($request->all());

        return redirect()->route('guestbooks.index')->with('success', 'Entri guestbook berhasil diperbarui!');
    }

    public function destroy($id)
    {
        // Menghapus entri guestbook dari database
        $guestbook = Guestbook::findOrFail($id);
        $guestbook->delete();

        return redirect()->route('guestbooks.index')->with('success', 'Entri guestbook berhasil dihapus!');
    }
}
