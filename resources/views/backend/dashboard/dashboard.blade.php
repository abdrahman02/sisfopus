@extends('backend.layouts.main')
@section('content')
<div class="row">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-uppercase font-weight-bold">Buku</p>
                            <h5 class="font-weight-bolder">
                                20
                            </h5>
                            <p class="mb-0">
                                <span class="text-success text-sm font-weight-bolder">20</span>
                                Buku sejak tahun 2023
                            </p>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                            {{-- <i class="fa-solid fa-books text-lg opacity-10"></i> --}}
                            <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-uppercase font-weight-bold">Anggota</p>
                            <h5 class="font-weight-bolder">
                                15
                            </h5>
                            <p class="mb-0">
                                <span class="text-success text-sm font-weight-bolder">15</span>
                                Anggota sejak tahun 2023
                            </p>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                            <i class="ni ni-circle-08 text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-uppercase font-weight-bold">Dipinjam</p>
                            <h5 class="font-weight-bolder">
                                50
                            </h5>
                            <p class="mb-0">
                                <span class="text-success text-sm font-weight-bolder">50</span>
                                Kali transaksi peminjaman
                            </p>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                            <i class="ni ni-credit-card text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-uppercase font-weight-bold">Dikembalikan</p>
                            <h5 class="font-weight-bolder">
                                50
                            </h5>
                            <p class="mb-0">
                                <span class="text-success text-sm font-weight-bolder">50</span> Kali transasksi
                                pengembalian
                            </p>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                            <i class="ni ni-curved-next text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-lg-12 mb-lg-0 mb-4">
        <div class="card z-index-2 h-50 shadow">
            <div class="card-body align-items-center p-3 d-flex h-100">
                <img src="backend/assets/img/Logo-Tut-Wuri-Handayani.png" class="h-100" alt="logo-tut-wuri-handayani">
                <div class="d-flexms-5 flex-column">
                    <h5 class="text-capitalize text-center">Selamat datang di panel pengelolaan sistem
                        informasi perpustakaan</h5>
                    <ul>
                        <li class="text-capitalize fs-6">Silahkan menekan tombol buku pada sidebar untuk mengelola
                            kategori
                            buku, rak buku dan katalog buku.</li>
                        <li class="text-capitalize fs-6">Silahkan menekan tombol transaksi pada sidebar untuk mengelola
                            seluruh data transaksi, data peminjama dan data pengembalian.</li>
                        <li class="text-capitalize fs-6">Silahkan menekan tombol Anggota pada sidebar untuk mengelola
                            data anggota.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection