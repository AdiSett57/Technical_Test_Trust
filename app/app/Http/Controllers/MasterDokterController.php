<?php

namespace App\Http\Controllers;

use App\Models\master_dokter;
use Illuminate\Http\Request;

class MasterDokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('data-dokter', [
            'pegawai' => master_dokter::all()
        ]);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah-dokter');
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
            'pegawai_nomor' => 'required|numeric|max:9999|unique:master_dokters',
            'pegawai_nama' => 'required|max:50',
            'pegawai_jenis_kelamin' => 'required',
            'pegawai_sip' => 'required|numeric|max:99999999999999|unique:master_dokters'
        ]);

        master_dokter::create($validatedData);

        return redirect('/data-dokter')->with('success', 'Data berhasil Disimpan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\master_dokter  $master_dokter
     * @return \Illuminate\Http\Response
     */
    public function show(master_dokter $master_dokter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\master_dokter  $master_dokter
     * @return \Illuminate\Http\Response
     */
    public function edit($master_dokter)
    {
        $users = master_dokter::all();
        $cari = $users->find($master_dokter);
        return view('edit-dokter', [
            'pegawai' => $cari
        ]);   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\master_dokter  $master_dokter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $master_dokter)
    {

        $users = master_dokter::all();
        $cari = $users->find($master_dokter);

        $rules = [
            'pegawai_nama' => 'required|max:50',
            'pegawai_jenis_kelamin' => 'required',
        ];

        if($request->pegawai_nomor != $cari->pegawai_nomor){
            $rules['pegawai_nomor'] = 'numeric|max:9999|unique:master_dokters';
        }if($request->pegawai_sip != $cari->pegawai_sip){
            $rules['pegawai_sip'] = 'numeric|max:99999999999999|unique:master_dokters';
        }

        $validatedData = $request->validate($rules);
        master_dokter::where('id', $cari->id)
                        ->update($validatedData);

        return redirect('/data-dokter')->with('success', 'Data berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\master_dokter  $master_dokter
     * @return \Illuminate\Http\Response
     */
    public function destroy($master_dokter)
    {
        master_dokter::destroy($master_dokter);

        return redirect('/data-dokter')->with('success', 'Data berhasil Dihapus');
    }
}