@extends('layouts.main')

@section('content')
    <h1 class="mt-4 mb-4">Data Pegawai</h1>
        <a href="data-dokter/create" class="btn btn-primary mb-3">Tambah Data</a>
        
        @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-hover table-bordered border-dark">
             <thead class="table-dark">
                <tr class="text-center">
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">No Sip</th>
                    <th scope="col">Opsi</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($pegawai as $item)
                <tr>
                    <th class="text-center" scope="row">{{ $loop->iteration }}</th>
                    <td scope="row">{{ $item->pegawai_nama }}</td>
                    <td class="text-center" scope="row">{{ $item->pegawai_jenis_kelamin }}</td>
                    <td class="text-center" scope="row">{{ $item->pegawai_sip }}</td>
                    <td class="text-center" scope="row">
                        <a href="data-dokter/{{ $item->id }}/edit" class="btn btn-secondary">Ubah</a>
                        <form action="data-dokter/{{ $item->id }}" method="post" class="d-inline">
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