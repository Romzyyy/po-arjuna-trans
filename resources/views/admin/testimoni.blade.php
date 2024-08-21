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
                    <h5 class="modal-title">Testimoni</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Jhon">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Telephon</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="62xxxxxxxxxx">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="12-12-2022">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Testimoni</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">KEmbali</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('navadmin')
    <div class="card">
        <div class="card-body">
            <table class="table mb-0">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Telepon</th>
                        <th scope="col">Testimoni</th>
                        <th scope="col" class="text-center">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>testioni</td>
                        <td class="text-center">
                            <Button class="btn btn-primary">Terima</Button>
                            <Button class="btn btn-danger">Tolak</Button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>testioni</td>
                        <td class="text-center">
                            <Button class="btn btn-primary">Terima</Button>
                            <Button class="btn btn-danger">Tolak</Button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                        <td>testioni</td>
                        <td class="text-center">
                            <Button class="btn btn-primary">Terima</Button>
                            <Button class="btn btn-danger">Tolak</Button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                        <td>testioni</td>
                        <td class="text-center">
                            <Button class="btn btn-primary">Terima</Button>
                            <Button class="btn btn-danger">Tolak</Button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
