@extends('admin.admin-layout')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="d-flex align-items-center">
                <div class="font-24 text-black"><i class='bx bx-home-alt'></i>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0 text-black">Pages Name</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-lg-3 col-xl-2">
                                    <a href="ecommerce-add-new-products.html" class="btn btn-primary mb-3 mb-lg-0"><i
                                            class='bx bxs-plus-square'></i>Tambah Baru</a>
                                </div>
                                <div class="col-lg-9 col-xl-10">
                                    <form class="float-lg-end">
                                        <div class="row row-cols-lg-2 row-cols-xl-auto g-2">
                                            <div class="col">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control ps-5"
                                                        placeholder="Search Product..."> <span
                                                        class="position-absolute top-50 product-show translate-middle-y"><i
                                                            class="bx bx-search"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                @yield('navadmin')
            </div>
        </div>
    </div>
@endsection
