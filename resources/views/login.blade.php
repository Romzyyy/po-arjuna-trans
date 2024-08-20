@extends('layout.app')

@section('content')
    <div class="bg-wrapper">
        <div class="gradient">
            <div class="container-fluid p-0 m-0">
                <div class="coverbg">
                    <img src="assets/images/login/bg1.png" class="motif" />
                    <img src="assets/images/login/bg2.png" class="motif1" />
                    <img src="assets/images/login/garisBg.png" class="garis" />
                    <img src="assets/images/login/polygon.png" class="polygon" />
                </div>

                <div class="card user-login shadow">
                    <div class="card-body p-0">
                        <div class="row justify-content-center">
                            <div class="col-md-7 d-none d-md-block bg-card">
                                <img src="assets/images/login/arjuna-trans1.png" class="icn-logo mx-auto d-block" />
                                <img src="assets/images/login/1.png" class="icn-mobil mx-auto d-block" />
                            </div>

                            <div class="col-md-5 p-5">
                                <div class="d-flex justify-content-end">
                                    <div class="dropdown">
                                        <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            🇮🇩 Id
                                        </button>
                                        <ul class="dropdown-menu p-0 m-0" aria-labelledby="dropdownMenuButton">
                                            <li>
                                                <a class="dropdown-item" href="#">🇺🇸 As</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">🇬🇧 Eng</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">🇦🇺 Aus</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">🇮🇳 Ida</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">🇨🇳 Chi</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">🇯🇵 Jpn</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <h1 class="fw-bold">Masuk</h1>
                                <p class="fw-bold">
                                    Gunakan username dan password anda!
                                </p>
                                <form>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Username</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <img src="assets/images/login/SVG.svg" alt="Icon" width="25"
                                                    height="25" />
                                            </span>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Username" />
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <img src="assets/images/login/Form.svg" alt="Icon" width="25"
                                                    height="25" />
                                            </span>
                                            <input type="password" class="form-control" id="exampleInputPassword1"
                                                placeholder="Enter Password" />
                                        </div>
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" id="exampleCheck1" />
                                        <label class="form-check-label custom-text-color" for="exampleCheck1">Subscribe to
                                            weekly
                                            newsletter</label>
                                    </div>



                                    <button type="submit" class="btn w-100 p-3 fs-4 fw-semibold text-white btn-gradient">
                                        Masuk
                                    </button>
                                </form>
                                <div class="or mt-3 position-relative d-flex justify-content-center">
                                    <img src="assets/images/login/or.png" alt="" />
                                </div>

                                <div class="mediasosial mt-3 d-flex justify-content-center">
                                    <div
                                        class="icon-circle d-flex align-items-center justify-content-center rounded-circle me-2">
                                        <i class="bi bi-instagram"></i>
                                    </div>
                                    <div
                                        class="icon-circle d-flex align-items-center justify-content-center rounded-circle me-2">
                                        <i class="bi bi-facebook"></i>
                                    </div>
                                    <div
                                        class="icon-circle d-flex align-items-center justify-content-center rounded-circle me-2">
                                        <i class="bi bi-twitter"></i>
                                    </div>
                                    <div
                                        class="icon-circle d-flex align-items-center justify-content-center rounded-circle">
                                        <i class="bi bi-google"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
