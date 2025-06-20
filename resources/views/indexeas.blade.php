@extends('template')
@section('content')
    <h1>Daftar Nilai</h1>

    <a href="/eas/tambah" class="btn btn-primary">Tambah Data</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>NRP</th>
                <th>Nilai Angka</th>
                <th>SKS</th>
                <th>Nilai Huruf</th>
                <th>Bobot</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nilai as $n)
            <tr>
                <td>{{ $n->id }}</td>
                <td>{{ $n->normorinduksiswa }}</td>
                <td>{{ $n->nilaiangka }}</td>
                <td>{{ $n->sks }}</td>
                @if($n->nilaiangka <= 40)
                    <td>D</td>
                 @elseif ($n->nilaiangka >= 41 && $n->nilaiangka <= 60)
                    <td>C</td>
                 @elseif($n->nilaiangka >= 61 && $n->nilaiangka <= 80)
                    <td>B</td>
                 @elseif($n->nilaiangka >= 81)
                    <td>A</td>
                 @endif
                <td>{{ $n->nilaiangka * $n->sks }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
