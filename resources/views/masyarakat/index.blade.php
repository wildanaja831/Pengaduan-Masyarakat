@extends('layouts.app')
@section('head')
@section('title', 'Data Masyarakat')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Data Masyarakat</h1>
        </div>
        <div class="row">
            <div class="col-lg-15 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Masyarakat</h4>
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
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($masyarakats as $masyarakat)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $masyarakat->nama }}</td>
                                                <td>{{ $masyarakat->telp }}</td>
                                                <td>{{ $masyarakat->nik }}</td>
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
