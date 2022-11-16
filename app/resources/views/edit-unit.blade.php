@extends('layouts.main')

@section('content')
    <h1 class="mt-4 mb-4">Edit Data Poli / Klinik</h1>

    <div class="col-lg-8">
        <form method="post" action="/data-unit/{{ $unit->id }}">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="unit_kode" class="form-label">Kode Poli / Klinik</label>
                <input type="text" class="form-control @error('unit_kode') is-invalid @enderror" id="unit_kode" name="unit_kode" autofocus placeholder="Masukkan kode poli / klinik" value="{{ old('unit_kode', $unit->unit_kode) }}">
                @error('unit_kode')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="unit_nama" class="form-label">Nama</label>
                <input type="text" class="form-control @error('unit_nama') is-invalid @enderror" id="unit_nama" name="unit_nama" placeholder="Masukkan nama poli / klinik" value="{{ old('unit_nama',$unit->unit_nama) }}">
                @error('unit_nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>



@endsection