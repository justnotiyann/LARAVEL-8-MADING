<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function tambah(Request $request)
    {
        // validasi sebelum kita save ke dalam database
        $validate = $request->validate([
            // 'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // JPEG, PNG, JPG, GIF diperbolehkan, maksimal 2MB
            'judul' => 'required|string|max:100|min:10',
            // Contoh validasi untuk field 'judul'
            'deskripsi' => 'required|string|max:2000|min:5',
            // Contoh validasi untuk field 'deskripsi'
            'author' => 'required|string|max:255|regex:/^[a-zA-Z\s]+$/', // Contoh validasi untuk field 'author'
        ]);
        // tambah data
        Berita::create($validate);

        // kembali ke form dan berikan pesan
        return back()->with('berhasil', 'selamat data berhasil di post');

    }


}
