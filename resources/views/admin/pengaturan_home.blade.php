@extends('admin.navsetting')

@section('pengaturan')
    <div class="card">
        <div class="card-body p-4">
            <h5 class="mb-4">Pengaturan Home</h5>
            <form class="row g-3">
                <div class="col-md-12">
                    <label for="input1" class="form-label">Nama travel</label>
                    <input type="text" class="form-control" id="input1" placeholder="First Name">
                </div>
                <div class="col-md-12">
                    <label for="input2" class="form-label">Nama travel</label>
                    <input type="text" class="form-control" id="input2" placeholder="Last Name">
                </div>
                <div class="col-md-8">
                    <label for="input2" class="form-label">Slogan</label>
                    <input type="text" class="form-control" id="input2" placeholder="Last Name">
                </div>
                <div class="col-md-4">
                    <label for="input2" class="form-label">No Whatsapp</label>
                    <input type="text" class="form-control" id="input2" placeholder="Last Name">
                </div>
                <div class="col-md-6">
                    <label for="formFile" class="form-label">Upload Logo</label>
                    <input class="form-control" type="file" id="formFile">
                </div>
                <div class="col-md-6">
                    <label for="formFile" class="form-label">Gambar Home</label>
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
