@extends('admin.navsetting')

@section('pengaturan')
    <div class="card">
        <div class="card-body p-4">
            <h5 class="mb-4">Pengaturan Paket Layanan</h5>
            <form class="row g-3">
                <div class="col-md-12">
                    <label for="input1" class="form-label">Judul Halaman</label>
                    <input type="text" class="form-control" id="input1" placeholder="First Name">
                </div>
                <div class="col-md-12">
                    <label for="input2" class="form-label">Keterangan Umum</label>
                    <textarea class="form-control" id="input11" placeholder="Address ..." rows="3"></textarea>
                </div>
                <div class="col-md-4">
                    <label for="input2" class="form-label">No. Whatsapp</label>
                    <input type="text" class="form-control" id="input2" placeholder="Last Name">
                </div>
                <div class="col-md-4">
                    <label for="input2" class="form-label">Total Pelanggan</label>
                    <input type="text" class="form-control" id="input2" placeholder="Last Name">
                </div>
                <div class="col-md-4">
                    <label for="formFile" class="form-label">Total Pelanggan Terlayani</label>
                    <input type="text" class="form-control" id="input2" placeholder="Last Name">
                </div>
                <div class="col-md-4">
                    <label for="formFile" class="form-label">Gambar 1</label>
                    <input class="form-control" type="file" id="formFile">
                </div>
                <div class="col-md-4">
                    <label for="formFile" class="form-label">Gambar 2</label>
                    <input class="form-control" type="file" id="formFile">
                </div>
                <div class="col-md-4">
                    <label for="formFile" class="form-label">Gambar 3</label>
                    <input class="form-control" type="file" id="formFile">
                </div>
            </form>
        </div>
        <div class="card-body p-4">
            <button class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
    </div>
@endsection
