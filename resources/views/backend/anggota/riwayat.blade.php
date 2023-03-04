@extends('backend.layouts.main')
@section('content')
<a href="/transaksi" class="btn btn-md bg-warning me-3 link-light" aria-pressed="true">
    <i class="fa-solid fa-circle-left"></i>&nbsp
    Back
</a>
<a href="/transaksi/keranjang/1" class="btn btn-md bg-success me-3 link-light float-end" aria-pressed="true">
    <i class="fa-solid fa-circle-plus"></i>&nbsp
    Peminjaman
</a>
<a href="/transaksi/keranjang/1" class="btn btn-md bg-success me-3 link-light float-end" aria-pressed="true">
    <i class="fa-solid fa-circle-plus"></i>&nbsp
    Pengembalian
</a>
<div class="row mb-3">
    <div class="col-lg-12 mb-lg-0 mb-4">
        <div class="card shadow">
            <div class="card-body p-3 d-flex justify-content-around align-items-center">
                <div>
                    <img src="{{ asset('backend/assets/img/team-3.jpg') }}" style="width: 150px; heigth:150px"
                        class="rounded" alt="user1">
                </div>
                <div class="description-1">
                    <p class="text-secondary text-sm font-weight-bold">ID Anggota : 22393</p>
                    <p class="text-secondary text-sm font-weight-bold">Nama : Rudi Santoso</p>
                    <p class="text-secondary text-sm font-weight-bold">NISN : 23898321083290</p>
                    <p class="text-secondary text-sm font-weight-bold">Email : Rudi@gmail.com</p>
                </div>
                <div class="description-1">
                    <p class="text-secondary text-sm font-weight-bold">Tanggal Lahir : 27-Oktober-2005</p>
                    <p class="text-secondary text-sm font-weight-bold">Jenis Kelamin : Laki-Laki</p>
                    <p class="text-secondary text-sm font-weight-bold">NO HP : 082380239838</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 mb-lg-0 mb-4">
        <div class="card shadow">
            <div class="card-header pb-0 pt-3 bg-transparent d-flex justify-content-between">
                <h6 class="text-capitalize">Keranjang Peminjaman Buku</h6>
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
                                    Kode Peminjaman</th>
                                <th scope="col"
                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Tgl Peminjaman</th>
                                <th scope="col"
                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Tgl Pengembalian</th>
                                <th scope="col"
                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Denda</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <span class="text-secondary text-xs font-weight-bold">1</span>
                                </td>
                                <td>
                                    <span class="text-secondary text-xs font-weight-bold">5662</span>
                                </td>
                                <td>
                                    <span class="text-secondary text-xs font-weight-bold mb-1 d-block">27/01/2023</span>
                                    <a href="#" target="_blank">
                                        <p class="badge badge-sm bg-gradient-primary text-xs fw-light mb-0">Cek
                                            bukti</p>
                                    </a>
                                </td>
                                <td>
                                    <span class="text-secondary text-xs font-weight-bold mb-1 d-block">30/01/2023</span>
                                    <a href="#" target="_blank">
                                        <p class="badge badge-sm bg-gradient-primary text-xs fw-light mb-0">Cek
                                            bukti</p>
                                    </a>
                                </td>
                                <td>
                                    <span class="text-secondary text-xs font-weight-bold">-</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="text-secondary text-xs font-weight-bold">2</span>
                                </td>
                                <td>
                                    <span class="text-secondary text-xs font-weight-bold">5667</span>
                                </td>
                                <td>
                                    <span class="text-secondary text-xs font-weight-bold mb-1 d-block">27/01/2023</span>
                                    <a href="#" target="_blank">
                                        <p class="badge badge-sm bg-gradient-primary text-xs fw-light mb-0">Cek
                                            bukti</p>
                                    </a>
                                </td>
                                <td>
                                    <span class="text-secondary text-xs font-weight-bold mb-1 d-block">19/02/2023</span>
                                    <a href="#" target="_blank">
                                        <p class="badge badge-sm bg-gradient-primary text-xs fw-light mb-0">Cek
                                            bukti</p>
                                    </a>
                                </td>
                                <td>
                                    <span class="text-secondary text-xs font-weight-bold">Rp.20.000</span>
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