@extends('admin.navadmin')


@section('modal-content')
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
        data-bs-target="#exampleVerticallycenteredModal">Tambah Baru</button>
    <!-- Modal -->
    <div class="modal fade" id="exampleVerticallycenteredModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Layanan</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nama layanan">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload gambar</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="9"></textarea>
                    </div>
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
