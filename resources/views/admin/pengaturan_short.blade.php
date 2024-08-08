@extends('admin.navsetting')

@section('pengaturan')
    <div class="card">
        <div class="card-body p-4">
            <h5 class="mb-4">Pengaturan Short Video</h5>
            <form class="row g-3">
                <div class="col-md-12">
                    <label for="input1" class="form-label">JUdul Halaman</label>
                    <input type="text" class="form-control" id="input1" placeholder="First Name">
                </div>
                <div class="col-md-4">
                    <label for="input2" class="form-label">Link Youtube</label>
                    <input type="text" class="form-control" id="input2" placeholder="Last Name">
                </div>
                <div class="col-md-4">
                    <label for="input2" class="form-label">Link Instagram</label>
                    <input type="text" class="form-control" id="input2" placeholder="Last Name">
                </div>
                <div class="col-md-4">
                    <label for="input2" class="form-label">Link Tiktok</label>
                    <input type="text" class="form-control" id="input2" placeholder="Last Name">
                </div>
                <div class="col-md-4">
                    <label for="input2" class="form-label">Link Facebook</label>
                    <input type="text" class="form-control" id="input2" placeholder="Last Name">
                </div>
                <div class="col-md-4">
                    <label for="input2" class="form-label">Tampilkan Short Video</label>
                    <input type="text" class="form-control" id="input2" placeholder="Last Name">
                </div>
            </form>
        </div>
        <div class="card-body p-4">
            <button class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
    </div>
@endsection
