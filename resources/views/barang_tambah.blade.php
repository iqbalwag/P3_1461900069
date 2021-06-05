<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<h3>Data barang</h3>
 
	<a href="/barang0069"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/barang0069/storebrg" method="post">
		{{ csrf_field() }}
		id <input type="text" name="id" required="required"> <br/>
		nama <input type="text" name="nama" required="required"> <br/>
		harga <input type="number" name="harga" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>