@extends('layouts.app')
@section('head')
@section('title', 'Input Pengaduan')
@section('content')

    <div class="row">
        <div class="col-lg-15 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>Input Pengaduan</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="form-group">
                            <label>Tanggal Pengaduan</label>
                            <input type="date" name="tanggal" value="{{ date('Y-m-d') }}" readonly class="form-control">
                        </div>
                        <div class="form-group">
                            <label>NIK</label>
                            <select class="form-control" name="nik">
                                <option selected disabled>Silahkan Cari NIK Anda!</option>
                                @foreach ($masyarakats as $masyarakat)
                                    <option value="{{ $masyarakat->nik }}">
                                        {{ $masyarakat->nama . ' - ' . $masyarakat->nik }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Isi Laporan</label>
                            <textarea class="form-control" name="isi_laporan" placeholder="Masukan Laporan!"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Upload Foto</label>
                            <input type="file" name="foto" class="form-control" placeholder="Masukan NIK!">
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <input type="text" name="status" class="form-control" value="Proses" readonly>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary ">
                                Submit
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
@endsection
