<?php

namespace App\Http\Controllers;

use App\Models\master_dokter;
use App\Models\master_jadwal;
use App\Models\master_unit;
use Illuminate\Http\Request;
use PDF;
class MasterJadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('data-jadwal', [
            'jadwal' => master_jadwal::all()
        ]);
    }

    public function cetak()
    {
        $data = PDF::loadview('/cetak-jadwal', ['jadwal' => master_jadwal::all()]);
        //mendownload laporan.pdf
        return $data->download('jadwal.pdf');
    }

    public function lihat()
    {
        return view('cetak-jadwal', [
            'jadwal' => master_jadwal::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah-jadwal',[
            'dataDokter' => master_dokter::all(),
            'dataUnit' => master_unit::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'master_dokter_id' => 'required|unique:master_jadwals',
            'master_unit_id' => 'required',
            'senin' => 'max:14',
            'selasa' => 'max:14',
            'rabu' => 'max:14',
            'kamis' => 'max:14',
            'jumat' => 'max:14',
            'sabtu' => 'max:14',
            'minggu' => 'max:14'
        ]);

        master_jadwal::create($validatedData);

        return redirect('/data-jadwal')->with('success', 'Data Jadwal berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\master_jadwal  $master_jadwal
     * @return \Illuminate\Http\Response
     */
    public function show(master_jadwal $master_jadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\master_jadwal  $master_jadwal
     * @return \Illuminate\Http\Response
     */
    public function edit($master_jadwal)
    {
        $jadwal = master_jadwal::all();
        $cari = $jadwal->find($master_jadwal);
        return view('edit-jadwal', [
            'jadwal' => $cari,
            'dataDokter' => master_dokter::find($cari->master_dokter_id),
            'dataUnit' => master_unit::find($cari->master_unit_id)
        ]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\master_jadwal  $master_jadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $master_jadwal)
    {
        $users = master_jadwal::all();
        $cari = $users->find($master_jadwal);

        $rules = [
            'senin' => 'max:14',
            'selasa' => 'max:14',
            'rabu' => 'max:14',
            'kamis' => 'max:14',
            'jumat' => 'max:14',
            'sabtu' => 'max:14',
            'minggu' => 'max:14',
        ];

        $validatedData = $request->validate($rules);
        master_jadwal::where('id', $cari->id)
            ->update($validatedData);

        return redirect('/data-jadwal')->with('success', 'Data berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\master_jadwal  $master_jadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy($master_jadwal)
    {

        master_jadwal::destroy($master_jadwal);

        return redirect('/data-jadwal')->with('success', 'Data Jadwal berhasil Dihapus');
    }
}

