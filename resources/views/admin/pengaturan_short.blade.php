@extends('admin.navsetting')

@section('pengaturan')
    <div class="card">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <div class="card-body p-4">
            <h5 class="mb-4">Pengaturan Short Video</h5>
            <form class="row g-3">
                <div class="col-md-12">
                    <label for="input1" class="form-label">Judul Halaman</label>
                    <input type="text" class="form-control" id="JudulHalaman" placeholder="First Name">
                </div>
                <div class="col-md-4">
                    <label for="input2" class="form-label">Link Youtube</label>
                    <input type="text" class="form-control" id="Youtube" placeholder="Last Name">
                </div>
                <div class="col-md-4">
                    <label for="input2" class="form-label">Link Instagram</label>
                    <input type="text" class="form-control" id="Instagram" placeholder="Last Name">
                </div>
                <div class="col-md-4">
                    <label for="input2" class="form-label">Link Tiktok</label>
                    <input type="text" class="form-control" id="Tiktok" placeholder="Last Name">
                </div>
                <div class="col-md-4">
                    <label for="input2" class="form-label">Link Facebook</label>
                    <input type="text" class="form-control" id="Facebook" placeholder="Last Name">
                </div>
                <div class="col-md-4">
                    <label for="input2" class="form-label">Tampilkan Short Video</label>
                    <input type="text" class="form-control" id="Video" placeholder="Last Name">
                </div>
            </form>
        </div>
        <div class="card-body p-4">
            <button type="reset" class="btn btn-secondary">Batalkan</button>
            <button class="btn btn-success" onclick="TambahShortVideo()">Simpan</button>
        </div>
    </div>

    @vite('resources/js/TransShortVideo.js')
@endsection
