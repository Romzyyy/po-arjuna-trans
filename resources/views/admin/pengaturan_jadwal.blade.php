@extends('admin.navsetting')

@section('pengaturan')
    <div class="card">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <div class="card-body p-4">
            <h5 class="mb-4">Pengaturan Jadwal Trip</h5>
            <form class="row g-3">
                <div class="col-md-12">
                    <label for="input1" class="form-label">Judul Halaman</label>
                    <input type="text" class="form-control" id="HalamanJudul" placeholder="First Name">
                </div>
                <div class="col-md-4">
                    <label for="input2" class="form-label">No. Whatsapp</label>
                    <input type="text" class="form-control" id="Wa" placeholder="Last Name">
                </div>
                <div class="col-md-4">
                    <label for="input2" class="form-label">Tampilkan Jadwal Trip</label>
                    <input type="date" class="form-control" id="Jadwal" placeholder="Date of Birth">
                </div>
            </form>
        </div>
        <div class="card-body p-4">
            <button type="reset" class="btn btn-secondary">Batalkan</button>
            <button class="btn btn-success" onclick="TambahTrip()">Simpan</button>
        </div>
    </div>

    @vite('resources/js/TransTrip.js')
@endsection
