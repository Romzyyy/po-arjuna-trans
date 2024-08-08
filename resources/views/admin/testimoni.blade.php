@extends('admin.navadmin')

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
