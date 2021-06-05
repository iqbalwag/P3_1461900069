<form action="{{ route('barang.store')}}" method="post">
    @csrf
    id: <input type="text" name="id">
    nama: <input type="text" name="nama">
    alamat: <input type="text" name="alamat">
    <button type="submit">Simpan</button>
</form>