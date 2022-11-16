<?php

namespace App\Http\Controllers;

use App\Models\master_unit;
use Illuminate\Http\Request;

class MasterUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('data-unit', [
            'poli' => master_unit::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah-unit');
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
            'unit_kode' => 'required|unique:master_units',
            'unit_nama' => 'required|max:50|unique:master_units'
        ]);

        master_unit::create($validatedData);

        return redirect('/data-unit')->with('success', 'Data Poli berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\master_unit  $master_unit
     * @return \Illuminate\Http\Response
     */
    public function show(master_unit $master_unit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\master_unit  $master_unit
     * @return \Illuminate\Http\Response
     */
    public function edit($master_unit)
    {
        $units = master_unit::all();
        $unit = $units->find($master_unit);
        return view('edit-unit', [
            'unit' => $unit
        ]);   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\master_unit  $master_unit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $master_unit)
    {
        $units = master_unit::all();
        $unit = $units->find($master_unit);

        $rules = [];

        if ($request->unit_kode != $unit->unit_kode) {
            $rules['unit_kode'] = 'required|unique:master_units';
        }
        if ($request->unit_nama != $unit->unit_nama) {
            $rules['unit_nama'] = 'required|max:50|unique:master_units';
        }

        $validatedData = $request->validate($rules);
        master_unit::where('id', $unit->id)
            ->update($validatedData);

        return redirect('/data-unit')->with('success', 'Data Poli berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\master_unit  $master_unit
     * @return \Illuminate\Http\Response
     */
    public function destroy($master_unit)
    {
        master_unit::destroy($master_unit);

        return redirect('/data-unit')->with('success', 'Data Poli berhasil Dihapus');
    }
}
