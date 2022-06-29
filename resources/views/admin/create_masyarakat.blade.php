@extends('layouts.admin.app')
@section('head')
@section('title', 'Input Masyarakat')
@section('content')

    <div class="row">
        <div class="col-lg-15 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>Input Masyarakat</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form">
                        @csrf
                        @method('post')
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama!" required>
                        </div>
                        <div class="form-group">
                            <label>NIK</label>
                            <input type="number" name="nik" class="form-control" placeholder="Masukan NIK!" required>
                        </div>
                        <div class="form-group">
                            <label>No Telpon</label>
                            <input type="number" name="telp" class="form-control" placeholder="Masukan No Telpon!" required>
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
