@extends('layouts.main')

@section('content')
    <h1 class="mt-4 mb-4">Tambah Data Pegawai</h1>

    <div class="col-lg-8">
        <form method="post" action="/data-dokter">
            @csrf
            <div class="mb-3">
                <label for="pegawai_nomor" class="form-label">Nomor Pegawai</label>
                <input type="text" class="form-control @error('pegawai_nomor') is-invalid @enderror" id="pegawai_nomor" name="pegawai_nomor" autofocus aria-describedby="p_nomor" placeholder="Masukkan nomor pegawai" value="{{ old('pegawai_nomor') }}">
                <div id="p_nomor" class="form-text">Maksimal 4 digit.</div>
                @error('pegawai_nomor')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="pegawai_nama" class="form-label">Nama</label>
                <input type="text" class="form-control @error('pegawai_nama') is-invalid @enderror" id="pegawai_nama" name="pegawai_nama" placeholder="Masukkan nama lengkap" value="{{ old('pegawai_nama') }}">
                @error('pegawai_nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="pegawai_jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-select" name="pegawai_jenis_kelamin" id="pegawai_jenis_kelamin" required>
                    <option value="">-</option>
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="pegawai_sip" class="form-label">Nomor SIP</label>
                <input type="text" class="form-control @error('pegawai_sip') is-invalid @enderror" id="pegawai_sip" name="pegawai_sip" aria-describedby="p_sip" placeholder="Masukkan nomor SIP" value="{{ old('pegawai_sip') }}">
                <div id="p_sip" class="form-text">Maksimal 14 digit.</div>
                @error('pegawai_sip')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>



@endsection