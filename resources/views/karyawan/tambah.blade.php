@extends('template')

@section('content')
<div class="container mt-4">
    <h3>Tambah Data Karyawan</h3>
    <form action="/karyawan/store" method="POST" class="form-horizontal">
        @csrf
        <input type="hidden" name="page" value="{{ request()->get('page') }}">
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Kode Pegawai</label>
            <div class="col-sm-10">
                <input type="text" name="kodepegawai" class="form-control" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-10">
                <input type="text" name="namalengkap" class="form-control" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Divisi</label>
            <div class="col-sm-10">
                <input type="text" name="divisi" class="form-control" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Departemen</label>
            <div class="col-sm-10">
                <input type="text" name="departemen" class="form-control" required>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
