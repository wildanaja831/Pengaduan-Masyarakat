<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class MasyarakatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masyarakats = Masyarakat::all();
        $user = Auth::user();
        return view('masyarakat.index', compact('masyarakats', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $masyarakats = Masyarakat::all();

        return view('masyarakat.create', compact('masyarakats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required',
            'nik' => 'required',
            'isi_laporan' => 'required',
            'foto' => 'required',
            'status' => 'required',
        ]);

        $path = public_path('/images/pengaduan/');
        if ($request->hasFile('foto')) {
            $uploadImage = $request->foto;
            $imageName = $uploadImage->getClientOriginalName();
            $uploadImage->move($path, $imageName);
        }

        $payload = [
            'tanggal' => $request->tanggal,
            'nik' => $request->nik,
            'isi_laporan' => $request->isi_laporan,
            'foto' => $imageName,
            'status' => $request->status,
        ];

        unset($payload['_token']);
        unset($payload['_method']);

        Pengaduan::create($payload);

        // dd($data);

        return redirect('masyarakat/pengaduan')->with('success', 'Data berhasil ditambahkan');
    }

    public function index_pengaduan()
    {
        $pengaduans = Pengaduan::all();

        return view('masyarakat.pengaduan', compact('pengaduans'));
    }

}
