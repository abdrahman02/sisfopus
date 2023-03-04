@extends('backend.layouts.main')
@section('content')
<div class="d-flex">
    <a href="#" class="btn btn-md bg-success me-3 link-light ms-auto" data-bs-toggle="modal"
        data-bs-target="#tbhAnggota" aria-pressed="true">
        <i class="fa-solid fa-circle-plus"></i>&nbsp
        Tambah
    </a>
</div>
<div class="row">
    <div class="col-lg-12 mb-lg-0 mb-4">
        <div class="card shadow">
            <div class="card-header pb-0 pt-3 bg-transparent">
                <h6 class="text-capitalize">Tabel Anggota</h6>
            </div>
            <div class="card-body p-3">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0 text-center">
                        <thead>
                            <tr>
                                <th scope="col"
                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#
                                </th>
                                <th scope="col"
                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Nama Anggota</th>
                                <th scope="col"
                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    NISN</th>
                                <th scope="col"
                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Peminjaman & Pengembalian</th>
                                <th scope="col"
                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Kartu Anggota</th>
                                <th scope="col"
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <span class="text-secondary text-xs font-weight-bold">1</span>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="{{ asset('backend/assets/img/team-2.jpg') }}"
                                                class="avatar avatar-sm me-3" alt="user1">
                                        </div>
                                        <div class="d-flex flex-column text-start">
                                            <h6 class="mb-0 text-sm">Rudi Santoso</h6>
                                            <p class="text-xs text-secondary mb-0">rudi@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="text-secondary text-xs font-weight-bold">292383293282923</span>
                                </td>
                                <td>
                                    <a href="/anggota/riwayat/1">
                                        <p class="badge badge-sm bg-gradient-primary text-xs fw-light mb-0">Cek</p>
                                    </a>
                                </td>
                                <td>
                                    <a href="#" target="_blank">
                                        <p class="badge badge-sm bg-gradient-primary text-xs fw-light mb-0">Cetak</p>
                                    </a>
                                </td>
                                <td class="align-middle text-center text-lg">
                                    <a href="#" class="badge badge-lg bg-gradient-info me-3 link-light">
                                        <i class="fa-solid fa-circle-info"></i>
                                    </a>
                                    <a href="#" class="badge badge-lg bg-gradient-warning me-3 link-light">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </a>
                                    <a href="#" class="badge badge-lg bg-gradient-danger link-light" onclick="if(confirm('Apakah anda yakin?')) {
                                        event.preventDefault(); document.getElementById('delete-form').submit()};">
                                        <i class="fa-regular fa-square-minus"></i>
                                        <form action="" method="post" id="delete-form" class="d-none">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-secondary text-xs font-weight-bold">2</span>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="{{ asset('backend/assets/img/team-4.jpg') }}"
                                                class="avatar avatar-sm me-3" alt="user1">
                                        </div>
                                        <div class="d-flex flex-column text-start">
                                            <h6 class="mb-0 text-sm">Ferizal</h6>
                                            <p class="text-xs text-secondary mb-0">feri@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="text-secondary text-xs font-weight-bold">219308249027922</span>
                                </td>
                                <td>
                                    <a href="/anggota/riwayat/1">
                                        <p class="badge badge-sm bg-gradient-primary text-xs fw-light mb-0">Cek</p>
                                    </a>
                                </td>
                                <td>
                                    <a href="#" target="_blank">
                                        <p class="badge badge-sm bg-gradient-primary text-xs fw-light mb-0">Cetak</p>
                                    </a>
                                </td>
                                <td class="align-middle text-center text-lg">
                                    <a href="#" class="badge badge-lg bg-gradient-info me-3 link-light">
                                        <i class="fa-solid fa-circle-info"></i>
                                    </a>
                                    <a href="#" class="badge badge-lg bg-gradient-warning me-3 link-light">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </a>
                                    <a href="#" class="badge badge-lg bg-gradient-danger link-light" onclick="if(confirm('Apakah anda yakin?')) {
                                        event.preventDefault(); document.getElementById('delete-form').submit()};">
                                        <i class="fa-regular fa-square-minus"></i>
                                        <form action="" method="post" id="delete-form" class="d-none">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-secondary text-xs font-weight-bold">3</span>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="{{ asset('backend/assets/img/team-3.jpg') }}"
                                                class="avatar avatar-sm me-3" alt="user1">
                                        </div>
                                        <div class="d-flex flex-column text-start">
                                            <h6 class="mb-0 text-sm">Syahriadi</h6>
                                            <p class="text-xs text-secondary mb-0">ardi@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="text-secondary text-xs font-weight-bold">219308249027922</span>
                                </td>
                                <td>
                                    <a href="/anggota/riwayat/1">
                                        <p class="badge badge-sm bg-gradient-primary text-xs fw-light mb-0">Cek</p>
                                    </a>
                                </td>
                                <td>
                                    <a href="#" target="_blank">
                                        <p class="badge badge-sm bg-gradient-primary text-xs fw-light mb-0">Cetak</p>
                                    </a>
                                </td>
                                <td class="align-middle text-center text-lg">
                                    <a href="#" class="badge badge-lg bg-gradient-info me-3 link-light">
                                        <i class="fa-solid fa-circle-info"></i>
                                    </a>
                                    <a href="#" class="badge badge-lg bg-gradient-warning me-3 link-light">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </a>
                                    <a href="#" class="badge badge-lg bg-gradient-danger link-light" onclick="if(confirm('Apakah anda yakin?')) {
                                        event.preventDefault(); document.getElementById('delete-form').submit()};">
                                        <i class="fa-regular fa-square-minus"></i>
                                        <form action="" method="post" id="delete-form" class="d-none">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
@endsection