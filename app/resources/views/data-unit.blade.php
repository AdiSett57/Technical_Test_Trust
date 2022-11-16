@extends('layouts.main')

@section('content')
    <h1 class="mt-4 mb-4">Data Poli / Klinik</h1>
        <a href="data-unit/create" class="btn btn-primary mb-3">Tambah Data</a>
        
        @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-hover table-bordered border-dark">
             <thead class="table-dark">
                <tr class="text-center">
                    <th scope="col">No</th>
                    <th scope="col">Kode Poli</th>
                    <th scope="col">Nama Poli</th>
                    <th scope="col">Opsi</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($poli as $item)
                <tr>
                    <th class="text-center" scope="row">{{ $loop->iteration }}</th>
                    <td class="text-center" scope="row">{{ $item->unit_kode }}</td>
                    <td class="text-center" scope="row">{{ $item->unit_nama }}</td>
                    <td class="text-center" scope="row">
                        <a href="data-unit/{{ $item->id }}/edit" class="btn btn-secondary">Ubah</a>
                        <form action="data-unit/{{ $item->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger border-0" onclick="return confirm('Yakin ingin Hapus Data Poli?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection