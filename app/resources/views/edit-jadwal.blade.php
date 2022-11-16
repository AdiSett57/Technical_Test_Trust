@extends('layouts.main')

@section('content')
    <h1 class="mt-4 mb-4">Edit Jadwal</h1>

    <div class="col-lg-12">
        <form method="post" action="/data-jadwal/{{ $jadwal->id }}" class="row g-3">
            @method('put')
            @csrf
            <div class="mb-1">
                <h3><span class="badge text-bg-primary">{{ $dataDokter->pegawai_nama }}</span></h3>
                <h4><span class="badge text-bg-secondary">{{ $dataUnit->unit_nama }}</span></h4>
                <label for="senin" class="form-label"></label>
                <input type="text" class="form-control" id="master_dokter_id" name="master_dokter_id" autofocus placeholder="Masukkan kode poli / klinik" value="{{ $jadwal->master_dokter_id }}" hidden >
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="master_unit_id" name="master_unit_id" autofocus placeholder="Masukkan kode poli / klinik" value="{{ $jadwal->master_unit_id }}" hidden>
            </div>
            <div class="col-md-3">
                <label for="senin" class="form-label">Senin</label>
                <input type="text" class="form-control @error('senin') is-invalid @enderror" id="senin" name="senin" placeholder="Masukkan Jam, Contoh : 12:00 - 14:00" value="{{ $jadwal->senin }}">
                @error('senin')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-3">
                <label for="selasa" class="form-label">Selasa</label>
                <input type="text" class="form-control @error('selasa') is-invalid @enderror" id="selasa" name="selasa" placeholder="Masukkan Jam, Contoh : 12:00 - 14:00" value="{{ $jadwal->selasa }}">
                @error('selasa')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-3">
                <label for="rabu" class="form-label">Rabu</label>
                <input type="text" class="form-control @error('rabu') is-invalid @enderror" id="rabu" name="rabu" placeholder="Masukkan Jam, Contoh : 12:00 - 14:00" value="{{ $jadwal->rabu }}">
                @error('rabu')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-3">
                <label for="kamis" class="form-label">Kamis</label>
                <input type="text" class="form-control @error('kamis') is-invalid @enderror" id="kamis" name="kamis" placeholder="Masukkan Jam, Contoh : 12:00 - 14:00" value="{{ $jadwal->kamis }}">
                @error('kamis')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-3">
                <label for="jumat" class="form-label">Jum'at</label>
                <input type="text" class="form-control @error('jumat') is-invalid @enderror" id="jumat" name="jumat" placeholder="Masukkan Jam, Contoh : 12:00 - 14:00" value="{{ $jadwal->jumat }}">
                @error('jumat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-3">
                <label for="sabtu" class="form-label">Sabtu</label>
                <input type="text" class="form-control @error('sabtu') is-invalid @enderror" id="sabtu" name="sabtu" placeholder="Masukkan Jam, Contoh : 12:00 - 14:00" value="{{ $jadwal->sabtu }}">
                @error('sabtu')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-3">
                <label for="minggu" class="form-label">Minggu</label>
                <input type="text" class="form-control @error('minggu') is-invalid @enderror" id="minggu" name="minggu" placeholder="Masukkan Jam, Contoh : 12:00 - 14:00" value="{{ $jadwal->minggu }}">
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