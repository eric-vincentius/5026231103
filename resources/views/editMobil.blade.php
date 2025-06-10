@extends('template')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
	<h3>Edit mobil</h3>

	<a class="btn btn-primary" href="/crud"> Kembali</a>

	<br/>
	<br/>

	@foreach($mobil as $p)
	<form action="/crud/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
		Merk <input class="form-control" type="text" required="required" name="merkmobil" value="{{ $p->merkmobil }}"> <br/>
		Harga <input class="form-control" type="text" required="required" name="hargamobil" value="{{ $p->hargamobil }}"> <br/>
		Tersedia <input class="form-control" type="number" required="required" name="tersedia" value="{{ $p->tersedia }}"> <br/>
		Berat <textarea class="form-control" required="required" name="berat">{{ $p->berat }}</textarea> <br/>
		<input class="btn btn-info" type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>

@endsection
