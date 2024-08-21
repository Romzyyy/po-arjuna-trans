@extends('admin.navsetting')

@section('pengaturan')
    <div class="card">
        <div class="card-body p-4">
            <h5 class="mb-4">Pengaturan Testimonials</h5>
            <form class="row g-3">
                <div class="col-md-8">
                    <label for="input1" class="form-label">Judul Halaman</label>
                    <input type="text" class="form-control" id="input1" placeholder="First Name">
                </div>
                <div class="col-md-4">
                    <label for="input2" class="form-label">Tampilkan testimoni</label>
                    <input type="text" class="form-control" id="input2" placeholder="Last Name">
                </div>
            </form>
        </div>
        <div class="card-body p-4">
            <button type="reset" class="btn btn-secondary">Batalkan</button>
            <button class="btn btn-success">Simpan</button>
        </div>
    </div>
@endsection
