@extends('admin.navsetting')

@section('pengaturan')
    <div class="card">
        <div class="card-body p-4">
            <h5 class="mb-4">Pengaturan Tentang Kami</h5>
            <form class="row g-3">
                <div class="col-md-12">
                    <label for="input1" class="form-label">Sub Judul</label>
                    <input type="text" class="form-control" id="input1" placeholder="First Name">
                </div>
                <div class="col-md-12">
                    <label for="input2" class="form-label">Alamat Lengkap</label>
                    <input type="text" class="form-control" id="input2" placeholder="Last Name">
                </div>

                <div class="col-md-12">
                    <div id="marker-map" class="gmaps"
                        style="position: relative; overflow: hidden; padding-bottom: 25%; height: 0;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.83946958673!2d112.44672157583192!3d-7.482971892529034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78128791ae235d%3A0xc4eea3feb0c0127f!2sCV.%20NATUSI%20Software%20dan%20Hardware!5e0!3m2!1sid!2sid!4v1722932322921!5m2!1sid!2sid"
                            style="border:0; position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="input2" class="form-label">No. Telepon</label>
                    <input type="text" class="form-control" id="input2" placeholder="Last Name">
                </div>
                <div class="col-md-4">
                    <label for="input2" class="form-label">No. Whatsapp</label>
                    <input type="text" class="form-control" id="input2" placeholder="Last Name">
                </div>
                <div class="col-md-4">
                    <label for="input2" class="form-label">Email</label>
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
