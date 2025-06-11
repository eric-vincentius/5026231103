@extends('template')

@section('content')
<div class="container mt-4">
    <h3>Data Karyawan</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kode Pegawai</th>
                <th>Nama Lengkap</th>
                <th>Divisi</th>
                <th>Departemen</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{ $item->kodepegawai }}</td>
                <td>{{ strtoupper($item->namalengkap) }}</td>
                <td>{{ $item->divisi }}</td>
                <td>{{ strtolower($item->departemen) }}</td>
                <td>
                    <form action="{{ url('/karyawan/hapus/' . $item->kodepegawai) }}?page={{ request()->get('page') }}" method="POST" style="display:inline;">
                     @csrf
                     @method('DELETE')
                     <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/karyawan/tambah?page={{ request()->get('page') }}" class="btn btn-primary">Tambah Data</a>
    <div class="d-flex justify-content-center mt-3">
            {{ $data->links() }}
    </div>
</div>
@endsection
