<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    public function index() {
        $nilai = DB::table('nilai')->get();
        return view('indexeas',['nilai' => $nilai]);
    }

    public function tambah() {
        return view('tambahnilai');
    }

    public function setor(Request $request) {
        DB::table('nilai')->insert([
            'normorinduksiswa' => $request->normorinduksiswa,
            'nilaiangka' => $request->nilaiangka,
            'sks' => $request->sks
        ]);

        return redirect('/eas');
    }
}
