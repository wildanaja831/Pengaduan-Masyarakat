<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(Masyarakat $masyarakat)
    {
        $masyarakats = $masyarakat->all();
        return view('admin.index', compact('masyarakats'));
    }

    public function create_masyarakat()
    {
        return view('admin.create_masyarakat');
    }

    public function store_masyarakat(Request $request)
    {
        $username = str_replace(' ', '', strtolower($request->nama));
        $password = Hash::make($username);

        $data = Masyarakat::create([
            'nama' => $request->nama,
            'username' => $username,
            'password' => $password,
            'telp' => $request->telp,
            'nik' => $request->nik,
        ]);

        // dd($data);
        return redirect()->route('admin.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function destroy_masyarakat($id)
    {
        $data = Masyarakat::find($id);
        $data->delete();

        return redirect()->route('admin.index')->with('success', 'Data Berhasil Dihapus');
    }

    public function pengaduan(Pengaduan $pengaduan)
    {
        $pengaduans = $pengaduan->all();
        return view('admin.pengaduan', compact('pengaduans'));
    }

    public function destroy_pengaduan($id)
    {
        $data = Pengaduan::find($id);
        $data->delete();

        return redirect()->route('admin.pengaduan')->with('success', 'Data Berhasil Dihapus!');
    }

    public function cetak_pengaduan()
    {
        $pengaduans = Pengaduan::all();
        return view('admin.cetak_pengaduan', compact('pengaduans'));
    }
}
