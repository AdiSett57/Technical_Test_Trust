@extends('layouts.main')

@section('content')
    <h1 class="mt-4 mb-4">Tambah Jadwal</h1>

    <div class="col-lg-12">
        <form method="post" action="/data-jadwal" class="row g-3">
            @csrf
            <div class="mb-3">
                <label for="master_dokter_id" class="form-label">Pilih Dokter</label>
                <select class="form-select @error('master_dokter_id') is-invalid @enderror" id="master_dokter_id" name="master_dokter_id" id="master_dokter_id">
                    @foreach($dataDokter as $dokter)
                        <option value="{{ $dokter->id }}">{{ $dokter->pegawai_nama }}</option>
                    @endforeach
                </select>
                @error('master_dokter_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="master_unit_id" class="form-label">Pilih Poli</label>
                <select class="form-select @error('master_unit_id') is-invalid @enderror" id="master_unit_id" name="master_unit_id" id="master_unit_id">
                    @foreach($dataUnit as $poli)
                        <option value="{{ $poli->id  }}">{{ $poli->unit_nama }}</option>
                    @endforeach
                </select>
                @error('master_unit_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-3">
                <label for="senin" class="form-label">Senin</label>
                <input type="text" class="form-control @error('senin') is-invalid @enderror" id="senin" name="senin" placeholder="Masukkan Jam, Contoh : 12:00 - 14:00" value="{{ old('senin') }}">
                @error('senin')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-3">
                <label for="selasa" class="form-label">Selasa</label>
                <input type="text" class="form-control @error('selasa') is-invalid @enderror" id="selasa" name="selasa" placeholder="Masukkan Jam, Contoh : 12:00 - 14:00" value="{{ old('selasa') }}">
                @error('selasa')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-3">
                <label for="rabu" class="form-label">Rabu</label>
                <input type="text" class="form-control @error('rabu') is-invalid @enderror" id="rabu" name="rabu" placeholder="Masukkan Jam, Contoh : 12:00 - 14:00" value="{{ old('rabu') }}">
                @error('rabu')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-3">
                <label for="kamis" class="form-label">Kamis</label>
                <input type="text" class="form-control @error('kamis') is-invalid @enderror" id="kamis" name="kamis" placeholder="Masukkan Jam, Contoh : 12:00 - 14:00" value="{{ old('kamis') }}">
                @error('kamis')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-3">
                <label for="jumat" class="form-label">Jum'at</label>
                <input type="text" class="form-control @error('jumat') is-invalid @enderror" id="jumat" name="jumat" placeholder="Masukkan Jam, Contoh : 12:00 - 14:00" value="{{ old('jumat') }}">
                @error('jumat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-3">
                <label for="sabtu" class="form-label">Sabtu</label>
                <input type="text" class="form-control @error('sabtu') is-invalid @enderror" id="sabtu" name="sabtu" placeholder="Masukkan Jam, Contoh : 12:00 - 14:00" value="{{ old('sabtu') }}">
                @error('sabtu')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-3">
                <label for="minggu" class="form-label">Minggu</label>
                <input type="text" class="form-control @error('minggu') is-invalid @enderror" id="minggu" name="minggu" placeholder="Masukkan Jam, Contoh : 12:00 - 14:00" value="{{ old('minggu') }}">
                @error('minggu')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-5">Simpan</button>
        </form>
    </div>



@endsection