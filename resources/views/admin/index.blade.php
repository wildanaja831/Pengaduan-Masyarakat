@extends('layouts.admin.app')
@section('head')
@section('title', 'Data Masyarakat')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Data Masyarakat</h1>
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
                        <h4>Data Masyarakat</h4>
                        <a href="{{ route('admin.create_masyarakat') }}" class="btn btn-primary">Tambah Masyarakat</a>
                    </div>
                    <div class="card-body">
                        <div class="card">
                            <div class="card-body">
                                <table class="table" id="data">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">No Telpon</th>
                                            <th scope="col">NIK</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($masyarakats as $masyarakat)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $masyarakat->nama }}</td>
                                                <td>{{ $masyarakat->telp }}</td>
                                                <td>{{ $masyarakat->nik }}</td>
                                                <td>
                                                    <form action="{{ route('admin.destroy', $masyarakat->id) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-danger" onclick="return confirm('Yakin Mau diHapus?')">Hapus</button>
                                                    </form>
                                                </td>
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
<script type="text/javascript">
    $(document).ready(function() {
        $('#data').DataTable();
    } );
    </script>
@endsection
