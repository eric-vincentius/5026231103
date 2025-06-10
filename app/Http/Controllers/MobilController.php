<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MobilController extends Controller
{
    //
    public function index()
    {
    	// mengambil data dari table mobil
    	$mobil = DB::table('mobil')->paginate(10);

    	// mengirim data mobil ke view index
    	return view('indexMobil',['mobil' => $mobil]);

    }

    public function tambah() {
        return view('tambahMobil');
    }

    public function store(Request $request)
    {
	    // insert data ke table mobil
	    DB::table('mobil')->insert([
		    'merkmobil' => $request->merkmobil,
		    'hargamobil' => $request->hargamobil,
		    'tersedia' => $request->tersedia,
		    'berat' => $request->berat
	    ]);
	    // alihkan halaman ke halaman mobil
	    return redirect('/crud');

    }

    public function proses(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required|min:5|max:20',
            'pekerjaan' => 'required',
            'usia' => 'required|numeric'
        ]);

        return view('proses',['data' => $request]);
    }

    // method untuk edit data mobil
    public function edit($id) // ada primary key
    {
	    // mengambil data mobil berdasarkan id yang dipilih
	    $mobil = DB::table('mobil')
            ->where('id',$id) // khusus operator =
            ->get();

	    // passing data mobil yang didapat ke view edit.blade.php
	    return view('editMobil',['mobil' => $mobil]);

    }

    // update data mobil
    public function update(Request $request)
    {
	    // update data mobil
	    DB::table('mobil')->where('id',$request->id)->update([
		    'merkmobil' => $request->merkmobil,
		    'hargamobil' => $request->hargamobil,
		    'tersedia' => $request->tersedia,
		    'berat' => $request->berat
	    ]);
	    // alihkan halaman ke halaman mobil
	    return redirect('/crud');
    }

    // method untuk hapus data mobil
    public function hapus($id)
    {
	    // menghapus data mobil berdasarkan id yang dipilih
	    DB::table('mobil')->where('id',$id)->delete();

	    // alihkan halaman ke halaman mobil
	    return redirect('/crud');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    	// mengambil data dari table mobil sesuai pencarian data
		$mobil = DB::table('mobil')
		    ->where('merkmobil','like',"%".$cari."%")
		    ->paginate();

    		// mengirim data mobil ke view index
		return view('indexMobil',['mobil' => $mobil]);

	}
}
