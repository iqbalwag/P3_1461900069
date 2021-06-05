<form action="{{ route('barang.store')}}" method="post">
    @csrf
    id: <input type="text" name="id">
    nama: <input type="text" name="nama">
    username: <input type="text" name="username">
    password: <input type="text" name="password">
    <button type="submit">Simpan</button>
</form>