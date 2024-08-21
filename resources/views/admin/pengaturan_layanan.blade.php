@extends('admin.navsetting')

@section('pengaturan')
    <div class="card">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <div class="card-body p-4">
            <h5 class="mb-4">Pengaturan Paket Layanan</h5>
            <form class="row g-3">
                <div class="col-md-12">
                    <label for="input1" class="form-label">Judul Halaman</label>
                    <input type="text" class="form-control" id="judul_halaman" placeholder="First Name">
                </div>
                <div class="col-md-12">
                    <label for="input2" class="form-label">Keterangan Umum</label>
                    <textarea class="form-control" id="keterangan_umum" placeholder="Address ..." rows="3"></textarea>
                </div>
                <div class="col-md-4">
                    <label for="input2" class="form-label">No. Whatsapp</label>
                    <input type="text" class="form-control" id="whatsapp" placeholder="Last Name">
                </div>
                <div class="col-md-4">
                    <label for="input2" class="form-label">Total Pelanggan</label>
                    <input type="text" class="form-control" id="total_pelanggan" placeholder="Last Name">
                </div>
                <div class="col-md-4">
                    <label for="formFile" class="form-label">Total Pelanggan Terlayani</label>
                    <input type="text" class="form-control" id="total_pelanggan_terlayani" placeholder="Last Name">
                </div>
                <div class="col-md-4">
                    <label for="formFile" class="form-label">Gambar 1</label>
                    <input class="form-control" type="file" id="gambar">
                </div>
                <div class="col-md-4">
                    <label for="formFile" class="form-label">Gambar 2</label>
                    <input class="form-control" type="file" id="gambar1">
                </div>
                <div class="col-md-4">
                    <label for="formFile" class="form-label">Gambar 3</label>
                    <input class="form-control" type="file" id="gambar2">
                </div>
            </form>
        </div>
        <div class="card-body p-4">
            <button class="btn btn-primary" onclick="TambahLayanan()">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
    </div>
@endsection
