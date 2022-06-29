@extends('layouts.petugas.app')
@section('head')
@section('title', 'Update Pengaduan')
@section('content')

    <div class="row">
        <div class="col-lg-15 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>Input Pengaduan</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('petugas.update', $pengaduan->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label>Tanggal Pengaduan</label>
                            <input type="date" name="tanggal" value="{{ date('Y-m-d') }}" disabled class="form-control">
                        </div>
                        <div class="form-group">
                            <label>NIK</label>
                            <select class="form-control" name="nik" disabled >
                                <option selected disabled>{{ $pengaduan->nik }}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Isi Laporan</label>
                            <textarea class="form-control" name="isi_laporan" disabled>{{ $pengaduan->isi_laporan }}</textarea>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label>NIK</label>
                                <select class="form-control" name="status">
                                    <option selected disabled>{{ $pengaduan->status }}</option>
                                    <option value="Selesai">Selesai</option>
                                </select>
                            </div>
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
