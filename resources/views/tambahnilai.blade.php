@extends('template')
@section('content')
    <h1>Tambah Data</h1>
    <a href="/eas" class="btn btn-primary">Kembali</a>

    <form class="form-horizontal" action="/eas/setor" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="control-label col-sm-2">NRP</label>
            <div class="col-sm-10">
                <input type="text" name="normorinduksiswa" class="form-control" placeholder="NRP">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Nilai Angka</label>
            <div class="col-sm-10">
                <input type="text" name="nilaiangka" class="form-control" placeholder="Nilai Angka">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">SKS</label>
            <div class="col-sm-10">
                <input type="text" name="sks" class="form-control" placeholder="SKS">
            </div>
        </div>
        <div class="form-group">
            <div>
                <button type="submit" class="btn btn-primary">SIMPAN</button>
            </div>
        </div>
    </form>
@endsection
