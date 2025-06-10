@extends('template')

@section('content')
	<h3>Data mobil</h3>

    <p>Cari Data Mobil :</p>
	<form action="/crud/cari" method="GET">
	    <input type="text" class="form-control" name="cari" placeholder="Cari Mobil ..">
	    <input type="submit" value="CARI" class="btn btn-info">
	</form>
	<br/>

	<a class="btn btn-info" href="/crud/tambah"> + Tambah mobil Baru</a>

	<br/>
	<br/>

	<table border="1" class="table">
        <thead class="thead-dark">
        <tr>
			<th>Merk</th>
			<th>Harga</th>
			<th>Tersedia</th>
			<th>Berat</th>
			<th>Opsi</th>
		</tr>
        </thead>

		@foreach($mobil as $p)
		<tr>
			<td>{{ $p->merkmobil }}</td>
			<td>{{ $p->hargamobil }}</td>
			<td>{{ $p->tersedia }}</td>
			<td>{{ $p->berat }}</td>
			<td>
				<a class="btn btn-info" href="/crud/edit/{{ $p->id }}">Edit</a>
				|
				<a class="btn btn-info" href="/crud/hapus/{{ $p->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

@endsection
