@extends('layouts.app')
@section('head')
@section('title', 'Data Pengajuan')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Data Pengajuan</h1>
        </div>
        @if (Session::has('success'))
        <div class="alert alert-success alert-has-icon">
            <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
            <div class="alert-body">
                <div class="alert-title">Success</div>
                {{ Session::get('success') }}
            </div>
        </div>
        @endif
        <div class="row">
            <div class="col-lg-15 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Pengajuan</h4>
                    </div>

                    <div class="card-body">
                        <div class="card">
                            <div class="card-body">
                                <table class="table" id="data">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">NIK</th>
                                            <th scope="col">Isi Laporan</th>
                                            <th scope="col">Foto</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pengaduans as $pengaduan)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $pengaduan->tanggal }}</td>
                                                <td>{{ $pengaduan->nik }}</td>
                                                <td>{{ $pengaduan->isi_laporan }}</td>
                                                <td><img style="width:150px" src="{{ asset('images/pengaduan/' . $pengaduan->foto) }}" alt=""></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#data').DataTable();
        } );
    </script>
@endsection
