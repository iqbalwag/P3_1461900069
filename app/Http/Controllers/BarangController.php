<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function tampilbarang()
    {
        $barang = DB::table('barang')->paginate(10);
        return view('barang0069',['barang' => $barang]);
    }
    public function tampilpelanggan()
    {
        $pelanggan = DB::table('pelanggan')->get();
        return view('pelanggan0069',['pelanggan' => $pelanggan]);
    }
    public function tampiltrans()
    {
        $transaksi = DB::table('transaksi')->get();
        return view('transaksi0069',['transaksi' => $transaksi]);
    }
    public function tampiluser()
    {
        $user = DB::table('user')->get();
        return view('user0069',['user' => $user]);
    }
    public function tambahbrg()
    {
	    return view('barang_tambah');
    }
    public function tambahplg()
    {
	    return view('tambah_pelanggan');
    }
    public function tambahtrans()
    {
	    return view('tambah_transaksi');
    }
    public function tambahuser()
    {
	    return view('tambah_user');
    }
    public function storebrg(Request $request)
    {
	DB::table('barang')->insert([
		'id' => $request->id,
		'nama' => $request->nama,
		'harga' => $request->harga,
	]);
	return redirect('/barang0069');
    }
    public function storeplg(Request $request)
    {
	DB::table('pelanggan')->insert([
		'id' => $request->id,
		'nama' => $request->nama,
		'alamat' => $request->alamat,
	]);
	return redirect('/pelanggan');
    }
    public function storetrans(Request $request)
    {
	DB::table('transaksi')->insert([
		'id' => $request->id,
		'id_pelanggan' => $request->id_pelanggan,
		'id_barang' => $request->id_barang,
	]);
	return redirect('/transaksi');
    }
    public function storeusr(Request $request)
    {
	DB::table('barang')->insert([
		'id' => $request->id,
		'nama' => $request->nama,
		'username' => $request->username,
        'password' => $request->password,
	]);
	return redirect('/user');
    }
public function editbrg($id)
{
	$barang = DB::table('barang')->where('id',$id)->get();
	return view('barang_edit',['barang' => $barang]);
}
public function updatebrg(Request $request)
{
	DB::table('barang')->where('id',$request->id)->update([
		'id' => $request->id,
		'nama' => $request->nama,
		'harga' => $request->harga,
	]);
	return redirect('/barang0069');
}
public function deletebrg($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('barang')->where('id',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/barang0069');
}
public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$pegawai = DB::table('barang')
		->where('nama','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('barang0069',['barang' => $pegawai]);
 
	}
}