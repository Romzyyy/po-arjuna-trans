@extends('layout.app')

@section('content')
    <header class="header header-before-off">
        <div class="main-wrapper">
            <div class="navbar navbar-expand-lg bsnav bsnav-sticky bsnav-sticky-slide bsnav-transparent sticked in">
                <img src="{{ asset('assets/images/bg/bg-nav.png') }}" alt="no image" class="navbar-bar-shape">
                <div class="navbar-container">
                    <div class="navbar-extra-logo">
                        <div class="d-flex justify-content-center align-items-center bg-white border border-warning rounded-circle"
                            style="width: 140px; height: 140px;">
                            <img src="{{ asset('assets/images/logo/arjuna-logo.png') }}" class="logo-outside" alt="thumb"
                                style="max-width: 100px; max-height: 100px;">
                        </div>
                    </div>
                    <div class="top-header-menu">
                        <div class="top-bar-area pos-rel topbar-white">
                            <img src="{{ asset('assets/images/bg/topbar-bg.png') }}" alt="no image" class="top-bar-shape">
                            <div class="row">
                                <div class="col-xl-10 col-lg-6">
                                    <div class="top-box-wrp d-flex justify-content-center align-items-center">
                                        <div class="top-box top-location hm-2">
                                            <span class="fw-bolder fs-1"> WISATA, PRIVAT TRIP, TOUR DAN ROMBONGAN</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-6">
                                    <div class="top-bar-social">
                                        <ul class="top-social">
                                            <li>
                                                <a href="#"><i class="bi bi-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="bi bi-instagram"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="bi bi-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="bi bi-youtube"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="navbar-menu-opt">
                            <div class="navbar-brand-tog">
                                <a class="navbar-brand g-nop" href="index.html">
                                    <div class="d-flex justify-content-center align-items-center bg-white border border-warning rounded-circle"
                                        style="width: 60px; height: 60px;">
                                        <img src="{{ asset('assets/images/logo/arjuna-logo.png') }}" class="logo-display"
                                            alt="thumb" style="max-width: 45px; max-height: 45px;">
                                        <img src="{{ asset('assets/images/logo/arjuna-logo.png') }}" class="logo-scrolled"
                                            alt="thumb" style="max-width: 45px; max-height: 45px;">
                                    </div>
                                </a>
                                <button class="navbar-toggler toggler-spring">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse justify-content-md-between">
                                <a class="navbar-brand nop" href="#home">
                                    <div class="d-flex justify-content-center align-items-center bg-white border border-warning rounded-circle"
                                        style="width: 60px; height: 60px;">
                                        <img src="{{ asset('assets/images/logo/arjuna-logo.png') }}" class="logo-display"
                                            alt="thumb" style="max-width: 45px; max-height: 45px;">
                                        <img src="{{ asset('assets/images/logo/arjuna-logo.png') }}" class="logo-scrolled"
                                            alt="thumb" style="max-width: 45px; max-height: 45px;">
                                    </div>
                                </a>
                                <ul class="navbar-nav navbar-mobile justify-content-md-center w-100">
                                    <li class="nav-item dropdown fadeup">
                                        <a class="nav-link smooth-menu" href="#home">Home</a>
                                    </li>
                                    <li class="nav-item dropdown fadeup">
                                        <a class="nav-link smooth-menu" href="#paket-layanan">Paket Layanan</a>
                                    </li>
                                    <li class="nav-item "><a class="nav-link smooth-menu" href="#jadwal-trip">Jadwal
                                            Trip</a>
                                    </li>
                                    <li class="nav-item dropdown fadeup">
                                        <a class="nav-link smooth-menu" href="#short-video">Short Video</a>
                                    </li>
                                    <li class="nav-item dropdown fadeup">
                                        <a class="nav-link smooth-menu" href="#testimoni">Testimoni</a>
                                    </li>
                                    <li class="nav-item "><a class="nav-link smooth-menu" href="#tentang-kami">Tentang
                                            Kami</a>
                                    </li>
                                </ul>
                                <div class="search-cart nav-profile">
                                    <a href="contact.html" class="btn-1 btn-sm" style="width: 21rem; margin: 10px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="38"
                                            height="38" viewBox="0 0 48 48">
                                            <path fill="#fff"
                                                d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z">
                                            </path>
                                            <path fill="#fff"
                                                d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z">
                                            </path>
                                            <path fill="#cfd8dc"
                                                d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z">
                                            </path>
                                            <path fill="#40c351"
                                                d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z">
                                            </path>
                                            <path fill="#fff" fill-rule="evenodd"
                                                d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span>Hubungi kami</span></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="bsnav-mobile">
                <div class="bsnav-mobile-overlay"></div>
                <div class="navbar"></div>
            </div>
        </div>
    </header>
    <main class="main">
        <div class="hero-area pos-rel bg bg-bottom-right home-2" id="home"
            style="background-image: url({{ asset('assets/images/gallery/Frame-5.png') }}); background-size: 50%;">
            <div class="hero-2-shapes">
                <img src="{{ asset('assets/images/shape/dag.png') }}" class="hero-dag" alt="no image">
                <img src="{{ asset('assets/images/shape/dot-circle.png') }}" class="hero-dot-circle" alt="no image">
                <img src="{{ asset('assets/images/shape/half-circle-2.png') }}" class="half-circle-2" alt="no image">
                <img src="{{ asset('assets/images/shape/half-circle-1.png') }}" class="half-circle-1" alt="no image">
                <img src="{{ asset('assets/images/shape/half-circle-3.png') }}" class="hero-half-circle-3"
                    alt="no image">
                <img src="{{ asset('assets/images/shape/shape-bottom.png') }}" class="hero-shape-bottom" alt="no image">
            </div>
            <div class="hero-single">
                <div class="container">
                    <div class="hero-wpr pos-rel">
                        <div class="row g-5">
                            <div class="col-xl-8">
                                <div class="hero-content element-center">
                                    <div class="hero-content-desc">
                                        <span class="hero-sub-title mb-20">
                                            <span class="hero-line"></span>
                                            we're the best
                                        </span>
                                        <h2 class="hero-title">
                                            Arjuna Transport
                                        </h2>
                                        <p class="mb-40">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam
                                            fuga nostrum nulla nobis laborum sint consequuntur dolor expedita! Ad explicabo
                                            quod itaque beatae reprehenderit suscipit? Ex rerum sequi recusandae placeat!
                                        </p>
                                        <div class="hero-btn">
                                            <a href="contact.html" class="btn-1 btn-sm mr-30">
                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="38"
                                                    height="38" viewBox="0 0 48 48">
                                                    <path fill="#fff"
                                                        d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z">
                                                    </path>
                                                    <path fill="#fff"
                                                        d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z">
                                                    </path>
                                                    <path fill="#cfd8dc"
                                                        d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z">
                                                    </path>
                                                    <path fill="#40c351"
                                                        d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z">
                                                    </path>
                                                    <path fill="#fff" fill-rule="evenodd"
                                                        d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <span> Hubungi Kami</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="paket-layanan" class="about-area-2 de-padding">
            <div class="container">
                <div class="about-wpr-2 grid-2">
                    <div class="about-left-2">
                        <div class="about-left-img">
                            <div class="about-phase grid-2">
                                <div class="about-phase-1">
                                    <img src="{{ asset('assets/images/gallery/orang.png') }}" alt="no image"
                                        class="about-left-img-main mb-30 rounded-4">
                                    <img src="{{ asset('assets/images/gallery/bussatu.png') }}" alt="no image"
                                        class="about-left-img-main rounded-4">
                                </div>
                                <div class="about-phase-2 element-center">
                                    <img src="{{ asset('assets/images/gallery/mobil.png') }}" alt="no image"
                                        class="about-left-img-main rounded-4">
                                </div>
                            </div>
                            <img src="{{ asset('assets/images/vector/about-shape.png') }}" alt="no image"
                                class="about-left-img-shape">
                        </div>
                    </div>
                    <div class="about-right-2 pl-30">
                        <span class="hero-sub-title mb-20">
                            <span class="hero-line"></span>
                            Paket Layanan
                        </span>
                        <h2 class="heading-1 mb-30">
                            PAKET ARJUNA TRANSPORT
                        </h2>
                        <p class="mb-50">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco.
                        </p>
                        <div class="about-opt-2">
                            <div class="about-opt-left-2">
                                <p>
                                    anda ingin paket lainnya?
                                    <br />
                                    kami sudah siapkan!
                                </p>
                                <div class="hero-btn">
                                    <a href="contact.html" class="btn-1 btn-sm" style="width: 20rem">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="38"
                                            height="38" viewBox="0 0 48 48">
                                            <path fill="#fff"
                                                d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z">
                                            </path>
                                            <path fill="#fff"
                                                d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z">
                                            </path>
                                            <path fill="#cfd8dc"
                                                d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z">
                                            </path>
                                            <path fill="#40c351"
                                                d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z">
                                            </path>
                                            <path fill="#fff" fill-rule="evenodd"
                                                d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span> Hubungi Kami</span>
                                    </a>
                                </div>
                            </div>
                            <div class="about-opt-right-2">
                                <div class="about-opt-right-box-2 about-opt-right-pd">
                                    <div class="about-opt-icon-2">
                                        <i>
                                            <img src="assets/images/icon/delivered.png" alt="no image">
                                        </i>
                                    </div>
                                    <div class="about-opt-desc-2">
                                        <h2 class="heading-1">1959+</h2>
                                        <h5 class="heading-5 mb-0">
                                            Custommer
                                        </h5>
                                    </div>
                                </div>
                                <div class="about-opt-right-box-2 about-opt-right-pd">
                                    <div class="about-opt-icon-2">
                                        <i>
                                            <img src="{{ asset('assets/images/icon/satisfaction.png') }}" alt="no image">
                                        </i>
                                    </div>
                                    <div class="about-opt-desc-2">
                                        <h2 class="heading-1">100%</h2>
                                        <h5 class="heading-5 mb-0">
                                            Terlayani
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="jadwal-trip" class="service-area-2 bg-2 de-padding pos-rel">
            <img src="{{ asset('assets/images/shape/service-shape.png') }}" class="service-shape-2" alt="no image">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="site-title mb-90">
                            <span class="hero-sub-title mb-20">
                                <span class="hero-line"></span>
                                JADWAL TRIP
                            </span>
                            <h2 class="heading-1 mb-0">
                                AGENDA DAN JADWAL TRIP
                            </h2>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="service-res">
                            <p class="mb-30">
                                Kemana anda akan berkunjung? sendiri? Atau dengan rombongan? Hubungi kami, segera kami
                                jadwalkan
                            </p>
                            <a href="contact.html" class="btn-1 btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="38" height="38"
                                    viewBox="0 0 48 48">
                                    <path fill="#fff"
                                        d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z">
                                    </path>
                                    <path fill="#fff"
                                        d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z">
                                    </path>
                                    <path fill="#cfd8dc"
                                        d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z">
                                    </path>
                                    <path fill="#40c351"
                                        d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z">
                                    </path>
                                    <path fill="#fff" fill-rule="evenodd"
                                        d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Hubungi Kami</span>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="service-wpr-2 grid-3">
                    <div class="service-box-2">
                        <div class="service-pic-2 text-center text-md-start text-center text-md-start">
                            <img src="{{ asset('assets/images/gallery/Vector3.png') }}" alt="no image">
                            <div class="service-desc-2">
                                <div class="service-icon-title">
                                    <div class="service-icon-2">
                                        <i>
                                            <img src="{{ asset('assets/images/icon/cargo-ship.png') }}" alt="no image">
                                        </i>
                                    </div>
                                    <div class="service-title-2">
                                        <h5 class="heading-5 mb-0">
                                            Sea Freight Transportation
                                        </h5>
                                    </div>
                                </div>
                                <div class="service-text">
                                    <p>
                                        Lorem Ipsum available, but the majority have suffered sed
                                    </p>
                                    <a href="service-single.html" class="service-btn-2">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-box-2">
                        <div class="service-pic-2 text-center text-md-start">
                            <img src="{{ asset('assets/images/gallery/Vector2.png') }}" alt="no image">
                            <div class="service-desc-2">
                                <div class="service-icon-title">
                                    <div class="service-icon-2">
                                        <i>
                                            <img src="{{ asset('assets/images/icon/cargo-ship.png') }}" alt="no image">
                                        </i>
                                    </div>
                                    <div class="service-title-2">
                                        <h5 class="heading-5 mb-0">
                                            Sea Freight Transportation
                                        </h5>
                                    </div>
                                </div>
                                <div class="service-text">
                                    <p>
                                        Lorem Ipsum available, but the majority have suffered sed
                                    </p>
                                    <a href="service-single.html" class="service-btn-2">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-box-2">
                        <div class="service-pic-2 text-center text-md-start">
                            <img src="{{ asset('assets/images/gallery/Vector1.png') }}" alt="no image">
                            <div class="service-desc-2">
                                <div class="service-icon-title">
                                    <div class="service-icon-2">
                                        <i>
                                            <img src="{{ asset('assets/images/icon/Icon-plane.png') }}" alt="no image">
                                        </i>
                                    </div>
                                    <div class="service-title-2">
                                        <h5 class="heading-5 mb-0">
                                            Air Freight Transportation
                                        </h5>
                                    </div>
                                </div>
                                <div class="service-text">
                                    <p>
                                        Lorem Ipsum available, but the majority have suffered sed
                                    </p>
                                    <a href="service-single.html" class="service-btn-2">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-box-2">
                        <div class="service-pic-2 text-center text-md-start">
                            <img src="{{ asset('assets/images/gallery/Vector3.png') }}" alt="no image">
                            <div class="service-desc-2">
                                <div class="service-icon-title">
                                    <div class="service-icon-2">
                                        <i>
                                            <img src="{{ asset('assets/images/icon/cargo-ship.png') }}" alt="no image">
                                        </i>
                                    </div>
                                    <div class="service-title-2">
                                        <h5 class="heading-5 mb-0">
                                            Sea Freight Transportation
                                        </h5>
                                    </div>
                                </div>
                                <div class="service-text">
                                    <p>
                                        Lorem Ipsum available, but the majority have suffered sed
                                    </p>
                                    <a href="service-single.html" class="service-btn-2">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-box-2">
                        <div class="service-pic-2 text-center text-md-start">
                            <img src="{{ asset('assets/images/gallery/Vector2.png') }}" alt="no image">
                            <div class="service-desc-2">
                                <div class="service-icon-title">
                                    <div class="service-icon-2">
                                        <i>
                                            <img src="{{ asset('assets/images/icon/cargo-ship.png') }}" alt="no image">
                                        </i>
                                    </div>
                                    <div class="service-title-2">
                                        <h5 class="heading-5 mb-0">
                                            Sea Freight Transportation
                                        </h5>
                                    </div>
                                </div>
                                <div class="service-text">
                                    <p>
                                        Lorem Ipsum available, but the majority have suffered sed
                                    </p>
                                    <a href="service-single.html" class="service-btn-2">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-box-2">
                        <div class="service-pic-2 text-center text-md-start">
                            <img src="{{ asset('assets/images/gallery/Vector1.png') }}" alt="no image">
                            <div class="service-desc-2">
                                <div class="service-icon-title">
                                    <div class="service-icon-2">
                                        <i>
                                            <img src="{{ asset('assets/images/icon/Icon-plane.png') }}" alt="no image">
                                        </i>
                                    </div>
                                    <div class="service-title-2">
                                        <h5 class="heading-5 mb-0">
                                            Air Freight Transportation
                                        </h5>
                                    </div>
                                </div>
                                <div class="service-text">
                                    <p>
                                        Lorem Ipsum available, but the majority have suffered sed
                                    </p>
                                    <a href="service-single.html" class="service-btn-2">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="short-video" class="counter-area de-padding pos-rel hero-bg"
            style="background-image: url({{ asset('assets/images/bg/bg-counter.jpg') }})">
            <div class="container">
                <div class="counter-wpr">
                    <div class="row align-items-center">
                        <div class="col-xl-4">
                            <div class="counter-title">
                                <span class="hero-sub-title mb-20">
                                    <span class="hero-line"></span>
                                    Short Video
                                </span>
                                <h2 class="heading-2 mb-30">
                                    Video Unggahan Tentang Arjuna Travel
                                </h2>
                                <a href="about.html" class="btn-5 btn-md">Buka Youtue Kami</a>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="counter-1 d-flex flex-wrap justify-content-between">
                                <div class="fun-fact m-2 md:m-5">
                                    <div class="d-flex justify-content-center overflow-hidden align-items-center counter-icon bg-white border border-warning rounded-circle"
                                        style="width: 80px; height: 80px">
                                        <i><img src="{{ asset('assets/images/logo/fb.png') }}" alt="no image"
                                                style="max-width: 60px; max-height: 60px;"></i>
                                    </div>
                                </div>
                                <div class="fun-fact m-2 md:m-5">
                                    <div class="d-flex justify-content-center overflow-hidden align-items-center counter-icon bg-white border border-warning rounded-circle"
                                        style="width: 80px; height: 80px;">
                                        <i><img src="{{ asset('assets/images/logo/ig.png') }}" alt="no image"
                                                style="max-width: 60px; max-height: 60px;"></i>
                                    </div>
                                </div>
                                <div class="fun-fact m-2 md:m-5">
                                    <div class="d-flex justify-content-center overflow-hidden align-items-center counter-icon bg-white border border-warning rounded-circle"
                                        style="width: 80px; height: 80px;">
                                        <i><img src="{{ asset('assets/images/logo/tiktok.png') }}" alt="no image"
                                                style="max-width: 60px; max-height: 60px;"></i>
                                    </div>
                                </div>
                                <div class="fun-fact m-2 md:m-5">
                                    <div class="d-flex justify-content-center overflow-hidden align-items-center counter-icon bg-white border border-warning rounded-circle"
                                        style="width: 80px; height: 80px;">
                                        <i><img src="{{ asset('assets/images/logo/yt.png') }}" alt="no image"
                                                style="max-width: 60px; max-height: 60px;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid text-center">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 my-5 g-4">
                <div class="col mb-4">
                    <div class="ratio ratio-16x9 video-thumbnail">
                        <iframe width="560" height="315"
                            src="{{ asset('https://www.youtube.com/embed/yd1e6WEjmo') }}" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; 
                                clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="ratio ratio-16x9 video-thumbnail">
                        <iframe width="560" height="315"
                            src="{{ asset('https://www.youtube.com/embed/2Z9hqVqPY_s?si=wxuSswCieKKcMPIi') }}"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="ratio ratio-16x9 video-thumbnail">
                        <iframe width="560" height="315"
                            src="{{ asset('https://www.youtube.com/embed/y3PRSeEqwLo?si=pdBhxg_grKGPkYCs') }}"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="ratio ratio-16x9 video-thumbnail">
                        <iframe width="560" height="315"
                            src="{{ asset('https://www.youtube.com/embed/y3PRSeEqwLo?si=pdBhxg_grKGPkYCs') }}"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="ratio ratio-16x9 video-thumbnail">
                        <iframe width="560" height="315"
                            src="{{ asset('https://www.youtube.com/embed/y3PRSeEqwLo?si=pdBhxg_grKGPkYCs') }}"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="ratio ratio-16x9 video-thumbnail">
                        <iframe width="560" height="315"
                            src="{{ asset('https://www.youtube.com/embed/y3PRSeEqwLo?si=pdBhxg_grKGPkYCs') }}"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-row justify-content-center mb-5 pb-5">
                <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-lg d-flex flex-row justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div id="testimoni" class="testi-area bg-3 de-padding pos-rel">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2">
                        <div class="site-title text-center">
                            <span class="hero-sub-title mb-20">
                                <span class="hero-line"></span>
                                Testimonials
                            </span>
                            <h2 class="heading-1 mb-0">
                                TESTIMONI PENUMPANG KAMI
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="testi-wpr">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-3">
                            <div class="testi-up text-center">
                                <div thumbsSlider="" class="swiper testi-sldr">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="{{ asset('assets/images/pictures/80x80-1.png') }}"
                                                alt="no image" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ asset('assets/images/pictures/80x80-2.png') }}"
                                                alt="no image" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ asset('assets/images/pictures/80x80-3.png') }}"
                                                alt="no image" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ asset('assets/images/pictures/80x80-4.png') }}"
                                                alt="no image" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ asset('assets/images/pictures/80x80-5.png') }}"
                                                alt="no image" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ asset('assets/images/pictures/80x80-6.png') }}"
                                                alt="no image" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper testi-sldr-2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testi-single">
                                    <p>
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour, or randomised words
                                        which don't look even slightly believable.
                                    </p>
                                    <div class="testi-star-bio">
                                        <div class="testi-star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="testi-bio">
                                            <h4>Wang Kuwang</h4>
                                            <span>CEO Transport Ltd. </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-single">
                                    <p>
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour, or randomised words
                                        which don't look even slightly believable.
                                    </p>
                                    <div class="testi-star-bio">
                                        <div class="testi-star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="testi-bio">
                                            <h4>Fidel Edwards</h4>
                                            <span>CEO Transport Ltd. </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-single">
                                    <p>
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour, or randomised words
                                        which don't look even slightly believable.
                                    </p>
                                    <div class="testi-star-bio">
                                        <div class="testi-star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="testi-bio">
                                            <h4>Hamish Steveson</h4>
                                            <span>CEO Transport Ltd. </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-single">
                                    <p>
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour, or randomised words
                                        which don't look even slightly believable.
                                    </p>
                                    <div class="testi-star-bio">
                                        <div class="testi-star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="testi-bio">
                                            <h4>Lui Maguire</h4>
                                            <span>CEO Transport Ltd. </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-single">
                                    <p>
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour, or randomised words
                                        which don't look even slightly believable.
                                    </p>
                                    <div class="testi-star-bio">
                                        <div class="testi-star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="testi-bio">
                                            <h4>Tei Junk Seok</h4>
                                            <span>CEO Transport Ltd. </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-single">
                                    <p>
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour, or randomised words
                                        which don't look even slightly believable.
                                    </p>
                                    <div class="testi-star-bio">
                                        <div class="testi-star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="testi-bio">
                                            <h4>Samura Koshin</h4>
                                            <span>CEO Transport Ltd. </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="tentang-kami" class="contact-area bg-3 de-padding">
            <div class="container">
                <div class="contact-wpr">
                    <div class="row g-5">
                        <div class="col-xl-4">
                            <div class="contact-sdebar">
                                <div class="contact-up-title">
                                    <h2 class="heading-1">
                                        TENTANG KAMI
                                    </h2>
                                    <p class="mb-0">
                                        Lorem ipsum is simply free text available dolor sit amet, consectetur notted
                                        adipisicing.
                                    </p>
                                </div>
                                <div class="addr-home">
                                    <div class="addr-box">
                                        <div class="addr-box-single">
                                            <div class="addr-icon">
                                                <i class="icofont-google-map"></i>
                                            </div>
                                            <div class="addr-desc">
                                                <h5>Alamat</h5>
                                                <p class="mb-0">
                                                    22 Baker Street, London, United <br> Kingdom, W1U 3BW
                                                </p>
                                            </div>
                                        </div>
                                        <div class="addr-box-single">
                                            <div class="addr-icon">
                                                <i class="icofont-phone"></i>
                                            </div>
                                            <div class="addr-desc">
                                                <h5>Contact Person</h5>
                                                <p class="mb-0">
                                                    +1-940-394-2948<br>
                                                    +1-389-385-3807
                                                </p>
                                            </div>
                                        </div>
                                        <div class="addr-box-single">
                                            <div class="addr-icon">
                                                <i class="icofont-email"></i>
                                            </div>
                                            <div class="addr-desc">
                                                <h5>Email</h5>
                                                <p class="mb-0">
                                                    info@mdjonymia649.com<br>
                                                    support@logtra.com
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="contact-home pl-30">
                                <form action="#" method="post" class="contact-form">
                                    <div class="contact-form-title mb-30">
                                        <h2 class="heading-1">
                                            TESTIMONI ANDA
                                        </h2>
                                        <p class="mb-0">
                                            Isi dulu formulir berikut!
                                        </p>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-5 col-md-5 col-lg-5 col-sm-12">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control input-style-2"
                                                        id="name" name="name" placeholder="Your Full Name*">
                                                    <span class="alert alert-error"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="email" class="form-control input-style-2"
                                                        id="email" name="email" placeholder="Your Email Address*">
                                                    <span class="alert alert-error"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control input-style-2"
                                                        id="phone" name="phone" placeholder="Phone Number">
                                                    <span class="alert alert-error"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-7 col-md-7 col-lg-7 col-sm-12">
                                            <div class="col-md-12">
                                                <textarea class="form-control input-style-2" id="comment" name="comments" placeholder="Your Message..."></textarea>
                                                <!-- Alert Message -->
                                                <div class="alert-notification">
                                                    <div id="message" class="alert-msg"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sub-btn d-flex align-items-center justify-content-between">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                I agree to the <span>Terms &amp; Conditions</span>
                                            </label>
                                        </div>
                                        <div class="contact-sub-btn">
                                            <button type="submit" name="submit" id="submit" class="btn-submit">
                                                Send Message
                                                <i class="fas fa-chevron-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <a href="#body" id="scrtop" class="smooth-menu"><i class="ti-arrow-up"></i></a>
@endsection
