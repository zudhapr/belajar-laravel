<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{

    public function index()
    {
        return Mahasiswa::all();
    }

    public function show($id)
    {
        return Mahasiswa::find($id);
    }

    public function insert($nama, $nim, $jurusan)
    {
        Mahasiswa::create([
            'nama' => $nama,
            'nim' => $nim,
            'jurusan' => $jurusan
        ]);

        return "Data berhasil ditambahkan";
    }

    public function update($id, $nama)
    {
        $mhs = Mahasiswa::find($id);
        $mhs->update([
            'nama' => $nama
        ]);

        return "Data berhasil diupdate";
    }

    public function delete($id)
    {
        Mahasiswa::find($id)->delete();
        return "Data berhasil dihapus";
    }

    public function tampil()
    {
        $mhs = Mahasiswa::all();
        return view('mahasiswa.tampil', compact('mhs'));
    }

        public function tambah()
    {
        return view('mahasiswa.tambah');
    }

    public function simpan(Request $request)
    {
        Mahasiswa::create($request->all());
        return redirect('/mahasiswa');
    }
    
    public function edit($id)
    {
        $mhs = Mahasiswa::find($id);
        return view('mahasiswa.edit', compact('mhs'));
    }

    public function ubah(Request $request, $id)
    {
        $mhs = Mahasiswa::find($id);
        $mhs->update($request->all());
        return redirect('/mahasiswa');
    }
        
    public function hapus($id)
    {
        $mhs = Mahasiswa::find($id);
        $mhs->delete();
        return redirect('/mahasiswa');
    }




}
