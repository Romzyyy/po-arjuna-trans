@extends('admin.admin-layout')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="col">
                <div class="card rounded-3">
                    <div class="card-body rounded-3 border">
                        <ul class="nav nav-pills gap-3" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link {{ Request::is('pengaturan-pengguna') ? 'active' : '' }}"
                                    href="/pengaturan-pengguna">
                                    <div class="d-flex align-items-center">
                                        <div class="tab-icon"><i class='bx bx-user-pin font-18 me-1'></i>
                                        </div>
                                        <div class="tab-title">Pengguna</div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link {{ Request::is('pengaturan-home') ? 'active' : '' }}"
                                    href="/pengaturan-home" aria-selected="true">
                                    <div class="d-flex align-items-center">
                                        <div class="tab-icon"><i class='bx bx-home font-18 me-1'></i>
                                        </div>
                                        <div class="tab-title">Home</div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link {{ Request::is('pengaturan-paket-layanan') ? 'active' : '' }}"
                                    href="/pengaturan-paket-layanan">
                                    <div class="d-flex align-items-center">
                                        <div class="tab-icon"><i class='bx bxs-bar-chart-alt-2 font-18 me-1'></i>
                                        </div>
                                        <div class="tab-title">Paket Layanan</div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link {{ Request::is('pengaturan-jadwal-trip') ? 'active' : '' }}"
                                    href="/pengaturan-jadwal-trip">
                                    <div class="d-flex align-items-center">
                                        <div class="tab-icon"><i class='bx bx-food-menu font-18 me-1'></i>
                                        </div>
                                        <div class="tab-title">Jadwal Trip</div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link {{ Request::is('pengaturan-short-video') ? 'active' : '' }}"
                                    href="/pengaturan-short-video">
                                    <div class="d-flex align-items-center">
                                        <div class="tab-icon"><i class='bx bxs-videos font-18 me-1'></i>
                                        </div>
                                        <div class="tab-title">Short Video</div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link {{ Request::is('pengaturan-testimonial') ? 'active' : '' }}"
                                    href="/pengaturan-testimonial">
                                    <div class="d-flex align-items-center">
                                        <div class="tab-icon"><i class='bx bx-book-open font-18 me-1'></i>
                                        </div>
                                        <div class="tab-title">Testimonial</div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link {{ Request::is('pengaturan-tentang-kami') ? 'active' : '' }}"
                                    href="/pengaturan-tentang-kami">
                                    <div class="d-flex align-items-center">
                                        <div class="tab-icon"><i class='bx bx-radio-circle-marked font-18 me-1'></i>
                                        </div>
                                        <div class="tab-title">Tentang kami</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div>
                @yield('pengaturan')
            </div>
        </div>
    </div>
@endsection
