@extends('admin.navadmin')

@section('modal-content')
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleExtraLargeModal">
        Tambah Baru</button>
    <!-- Modal -->
    <div class="modal fade" id="exampleExtraLargeModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Jadwal trip</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3">
                        <div class="col-md-8">
                            <label for="input1" class="form-label">Nama Trip</label>
                            <input type="text" class="form-control" id="judul_halaman" placeholder="First Name">
                        </div>
                        <div class="col-md-4">
                            <label for="formFile" class="form-label">Upload gambar poster</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        <div class="col-md-4">
                            <label for="input1" class="form-label">Kota tujuan</label>
                            <input type="text" class="form-control" id="whatsapp" placeholder="Last Name">
                        </div>
                        <div class="col-md-8">
                            <label for="input1" class="form-label">Destinasi Wisata tujuan</label>
                            <input type="text" class="form-control" id="total_pelanggan" placeholder="Last Name">
                        </div>
                        <div class="col-md-12">
                            <label for="formFile" class="form-label">Meeting point</label>
                            <input type="text" class="form-control" id="total_pelanggan_terlayani"
                                placeholder="Last Name">
                        </div>
                        <div class="col-md-4">
                            <label for="formFile" class="form-label">Tanggal berangkat</label>
                            <input class="form-control" type="date" id="date">
                        </div>
                        <div class="col-md-3">
                            <label for="formFile" class="form-label">Tanggal pulang</label>
                            <input class="form-control" type="date" id="date">
                        </div>
                        <div class="col-md-4">
                            <label for="formFile" class="form-label">Kendaraan Yang digunakan</label>
                            <input class="form-control" type="text" id="kendaraan">
                        </div>
                        <div class="col-md-1">
                            <label for="formFile" class="form-label">Sheet</label>
                            <input class="form-control" type="number" id="sheet">
                        </div>
                        <div class="col-md-4">
                            <label for="formFile" class="form-label">Nama hotel / tempat inap</label>
                            <input type="text" class="form-control" id="total_pelanggan_terlayani"
                                placeholder="Last Name">
                        </div>
                        <div class="col-md-4">
                            <label for="formFile" class="form-label">Total biaya per orang / Dewasa</label>
                            <input type="number" class="form-control" id="total_pelanggan_terlayani"
                                placeholder="Last Name">
                        </div>
                        <div class="col-md-4">
                            <label for="formFile" class="form-label">Total biaya perorang / anak - anak</label>
                            <input type="number" class="form-control" id="total_pelanggan_terlayani"
                                placeholder="Last Name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Fasilitas</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Syarat dan ketentuan</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('navadmin')
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-4">
        <div class="col">
            <div class="card">
                <img src="assets/images/gallery/01.png" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                        Some quick example text to build on the
                        card title and make up the bulk of the
                        card's content.
                    </p>
                    <div class="d-flex justify-content-between">
                        <a href="javascript:;" class="btn btn-warning">Detail</a>
                        <a href="javascript:;" class="btn btn-success">Edit</a>
                        <a href="javascript:;" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="assets/images/gallery/02.png" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                        Some quick example text to build on the
                        card title and make up the bulk of the
                        card's content.
                    </p>
                    <div class="d-flex justify-content-between">
                        <a href="javascript:;" class="btn btn-warning">Detail</a>
                        <a href="javascript:;" class="btn btn-success">Edit</a>
                        <a href="javascript:;" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="assets/images/gallery/03.png" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                        Some quick example text to build on the
                        card title and make up the bulk of the
                        card's content.
                    </p>
                    <div class="d-flex justify-content-between">
                        <a href="javascript:;" class="btn btn-warning">Detail</a>
                        <a href="javascript:;" class="btn btn-success">Edit</a>
                        <a href="javascript:;" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="assets/images/gallery/04.png" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                        Some quick example text to build on the
                        card title and make up the bulk of the
                        card's content.
                    </p>
                    <div class="d-flex justify-content-between">
                        <a href="javascript:;" class="btn btn-warning">Detail</a>
                        <a href="javascript:;" class="btn btn-success">Edit</a>
                        <a href="javascript:;" class="btn btn-danger">Delete</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
