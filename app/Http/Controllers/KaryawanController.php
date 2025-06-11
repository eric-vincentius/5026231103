<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    public function index()
    {
        $data = Karyawan::paginate(5);
        return view('karyawan.index', compact('data'));
    }

    public function create()
    {
        return view('karyawan.tambah');
    }

    public function store(Request $request)
    {
    Karyawan::create($request->all());

    $page = $request->get('page', 1);

    return redirect()->route('karyawan.index', ['page' => $page])
                     ->with('success', 'Data berhasil ditambahkan.');
    }

    public function destroy($kodepegawai, Request $request)
    {
    Karyawan::where('kodepegawai', $kodepegawai)->delete();

    $page = $request->query('page', 1);

    return redirect()->route('karyawan.index', ['page' => $page])
                     ->with('success', 'Data berhasil dihapus.');
    }
}
