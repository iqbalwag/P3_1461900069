<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat Pencarian Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
	</style>
 
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>
 
 
	<p>Cari Data Pegawai :</p>
	<form action="/barang0069/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form>
		
	<br/>
 
	<table border="1">
		<tr>
			<th>Id</th>
			<th>Nama</th>
			<th>Harga</th>
		</tr>
        <?php
		@foreach($barang as $p)
		<tr>
			<td>{{ $p->id }}</td>
			<td>{{ $p->nama }}</td>
			<td>{{ $p->harga }}</td>
		</tr>
		@endforeach
        ?>
	</table>
 
	<br/>
	Halaman : {{ $barang->currentPage() }} <br/>
	Jumlah Data : {{ $barang->total() }} <br/>
	Data Per Halaman : {{ $barang->perPage() }} <br/>
 
 
	{{ $barang->links() }}
 
 
</body>
</html>