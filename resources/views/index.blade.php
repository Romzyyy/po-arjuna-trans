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
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
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
                                            alt="thumb" style="max-width: 10px; max-height: 10px;">
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
                                    </div>
                                </a>
                                <ul class="navbar-nav navbar-mobile justify-content-md-center w-100">
                                    <li class="nav-item dropdown fadeup">
                                        <a class="nav-link" href="#home">Home</a>
                                    </li>
                                    <li class="nav-item dropdown fadeup">
                                        <a class="nav-link" href="#paket-layanan">Paket Layanan</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#jadwal-trip">Jadwal Trip</a>
                                    </li>
                                    <li class="nav-item dropdown fadeup">
                                        <a class="nav-link" href="#short-video">Short Video</a>
                                    </li>
                                    <li class="nav-item dropdown fadeup">
                                        <a class="nav-link" href="#testimoni">Testimoni</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#tentang-kami">Tentang
                                            Kami</a>
                                    </li>
                                </ul>
                                <div class="search-cart nav-profile">
                                    <a href="contact.html" class="btn-1 btn-sm">Let's Begin</a>
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
                                        <p class="mb-40">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                        </p>
                                        <div class="hero-btn">
                                            <a href="contact.html" class="btn-1 btn-md mr-30">
                                                Hubungi Kami
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
                                <a href="about.html" class="btn-3">Read More</a>
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
                            <a href="contact.html" class="btn-1 btn-md">
                                Discover More
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
                            <div class="counter-1 d-flex flex-wrap justify-content-center">
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
            <div class="d-flex flex-row justify-content-center mb-5">
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

    <a href="#bdy" id="scrtop" class="smooth-menu"><i class="ti-arrow-up"></i></a>
@endsection
