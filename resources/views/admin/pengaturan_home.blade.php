@extends('admin.navsetting')

@section('pengaturan')
    <div class="card">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <div class="card-body p-4">
            <h5 class="mb-4">Pengaturan Home</h5>
            <form class="row g-3">
                <div class="col-md-12">
                    <label for="input1" class="form-label">Nama travel</label>
                    <input type="text" class="form-control" id="Travel" placeholder="First Name">
                </div>
                <div class="col-md-12">
                    <label for="input2" class="form-label">Nama travel</label>
                    <input type="text" class="form-control" id="Travel1" placeholder="Last Name">
                </div>
                <div class="col-md-8">
                    <label for="input2" class="form-label">Slogan</label>
                    <input type="text" class="form-control" id="Slogan" placeholder="Last Name">
                </div>
                <div class="col-md-4">
                    <label for="input2" class="form-label">No Whatsapp</label>
                    <input type="text" class="form-control" id="Wa" placeholder="Last Name">
                </div>
                <div class="col-md-6">
                    <label for="formFile" class="form-label">Upload Logo</label>
                    <input class="form-control" type="file" id="Logo">
                </div>
                <div class="col-md-6">
                    <label for="formFile" class="form-label">Gambar Home</label>
                    <input class="form-control" type="file" id="Home">
                </div>
            </form>
        </div>
        <div class="card-body p-4">
            <button type="reset" class="btn btn-secondary">Batalkan</button>
            <button class="btn btn-success" onclick="TambahHome()">Simpan</button>
        </div>
    </div>

    @vite('resources/js/TransHome.js')
@endsection
