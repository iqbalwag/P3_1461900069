<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<h3>Edit Barang</h3>
 
	<a href="/barang0069"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($barang as $brg)
	<form action="/barang0069/updatebrg" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $brg->id }}"> <br/>
		nama <input type="text" required="required" name="nama" value="{{ $brg->nama }}"> <br/>
		harga <input type="number" required="required" name="harga" value="{{ $brg->harga }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>