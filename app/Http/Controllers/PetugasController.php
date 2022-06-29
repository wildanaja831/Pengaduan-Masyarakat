<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function index(Masyarakat $masyarakat)
    {
        $masyarakats = $masyarakat->all();
        return view('petugas.index', compact('masyarakats'));
    }

    public function pengaduan(Pengaduan $pengaduan)
    {
        $pengaduans = $pengaduan->all();
        return view('petugas.pengaduan', compact('pengaduans'));
    }

    public function edit($id)
    {
        $pengaduan = Pengaduan::find($id);
        return view('petugas.edit', compact('pengaduan'));
    }

    public function update(Request $request, $id)
    {
        $pengaduan = Pengaduan::find($id);
        $pengaduan->update($request->all());
        return redirect()->route('petugas.pengaduan')->with('success', 'Status Sudah Selesai');
    }
}
