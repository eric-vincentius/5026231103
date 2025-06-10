@extends('template')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
	<h3>Data mobil</h3>

	<a class="btn btn-primary" href="/crud"> Kembali</a>

	<br/>
	<br/>

	<form action="/crud/store" method="post">
		{{ csrf_field() }}
		Merk <input class="form-control" type="text" name="merkmobil" required="required"> <br/>
		Harga <input class="form-control" type="text" name="hargamobil" required="required"> <br/>
		Tersedia <input class="form-control" type="number" name="tersedia" required="required"> <br/>
		Berat <textarea class="form-control" name="berat" required="required"></textarea> <br/>
		<input class="btn btn-info" type="submit" value="Simpan Data">
	</form>

</body>
</html>

@endsection
