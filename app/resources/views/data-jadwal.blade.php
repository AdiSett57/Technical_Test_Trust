@extends('layouts.main')

@section('content')
    <h1 class="mt-4 mb-4">Data Jadwal</h1>
        <a href="data-jadwal/create" class="btn btn-primary mb-3">Tambah Data</a>
        <a href="/exportlaporan" class="btn btn-secondary ml-3 mb-3">Export Jadwal</a>
        
        @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-hover table-striped table-bordered border-dark tabel-jadwal">
             {{-- <caption><h2>JADWAL DOKTER RS TRUSTMEDIKA SURABAYA</h2></caption> --}}
             <thead>
                <tr class="tb-header">
                 <th colspan="11">DATA JADWAL DOKTER RS TRUSTMEDIKA SURABAYA</th>
                </tr> 
                <tr class="text-center master-th">
                    <th scope="col">No</th>
                    <th scope="col">Klinik</th>
                    <th scope="col">Senin</th>
                    <th scope="col">Selasa</th>
                    <th scope="col">Rabu</th>
                    <th scope="col">Kamis</th>
                    <th scope="col">Jumat</th>
                    <th scope="col">Sabtu</th>
                    <th scope="col">Minggu</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jadwal as $item)
                <tr class="th-poli">
                    <th class="text-center" scope="row">{{ $loop->iteration }}</th>
                    <td scope="row" colspan="10">{{ $item->master_unit->unit_nama }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td scope="row">{{ $item->master_dokter->pegawai_nama }}</td>
                    <td class="text-center" scope="row">{{ $item->senin }}</td>
                    <td class="text-center" scope="row">{{ $item->selasa }}</td>
                    <td class="text-center" scope="row">{{ $item->rabu }}</td>
                    <td class="text-center" scope="row">{{ $item->kamis }}</td>
                    <td class="text-center" scope="row">{{ $item->jumat }}</td>
                    <td class="text-center" scope="row">{{ $item->sabtu }}</td>
                    <td class="text-center" scope="row">{{ $item->minggu }}</td>
                    <td class="text-center" scope="row">
                        <a href="data-jadwal/{{ $item->id }}/edit" class="btn btn-secondary">Ubah</a>
                        <form action="data-jadwal/{{ $item->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger border-0" onclick="return confirm('Yakin ingin Hapus Data?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection