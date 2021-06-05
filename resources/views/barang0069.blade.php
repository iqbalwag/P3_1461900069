<html>
<head>
	<title>CRUD</title>
</head>
<body>
 
	<h3>Data Barang</h3>
 
	<a href="/barang0069/barang_tambah"> + Tambah Baru</a>

    <p>Cari Data Barang :</p>
    <form action="/barang0069/cari" method="GET">
	<input type="text" name="cari" placeholder="Cari Barang .." value="{{ old('cari') }}">
	<input type="submit" value="CARI">
    </form>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>id</th>
			<th>nama</th>
			<th>harga</th>
			<th>Opsi</th>
		</tr>
		@foreach($barang as $brg)
		<tr>
			<td>{{ $brg->id }}</td>
			<td>{{ $brg->nama }}</td>
			<td>{{ $brg->harga }}</td>
			<td>
			<a href="/barang0069/barang_edit/{{ $brg->id }}">Edit</a>
				|
			<a href="/barang0069/deletebrg/{{ $brg->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    <a href="/"> Kembali</a>
 
 
</body>
</html>