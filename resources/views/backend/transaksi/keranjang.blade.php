@extends('backend.layouts.main')
@section('content')
<a href="/transaksi" class="btn btn-md bg-warning me-3 link-light" aria-pressed="true">
    <i class="fa-solid fa-circle-left"></i>&nbsp
    Back
</a>
<a href="#" class="btn btn-md bg-success me-3 link-light float-end" aria-pressed="true">
    <i class="fa-regular fa-credit-card"></i>&nbsp
    Checkout Buku
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
                <a href="#" class="btn btn-md bg-primary me-3 link-light" aria-pressed="true">
                    <i class="fa-solid fa-cart-shopping"></i>&nbsp
                    Tambah Buku Kedalam Keranjang
                </a>
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
                                    Judul Buku</th>
                                <th scope="col"
                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    ISBN</th>
                                <th scope="col"
                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Jumlah Pinjam</th>
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
                                    <span class="text-secondary text-xs font-weight-bold">Pembelajaran Dasar HTML</span>
                                </td>
                                <td>
                                    <span
                                        class="text-secondary text-xs font-weight-bold mb-1 d-block">2389238-23n32398</span>
                                </td>
                                <td>
                                    <span class="text-secondary text-xs fw-bold mb-0 d-block">1</span>
                                </td>
                                <td class="align-middle text-center text-lg">
                                    <a href="#" class="badge badge-lg bg-gradient-warning me-3 link-light"
                                        data-bs-toggle="modal" data-bs-target="#ubhJlhPinjam">
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













{{-- Ubah Jumlah Pinjam --}}
<div class="modal fade" id="ubhJlhPinjam" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card card-plain">
                    <div class="card-header pb-0 text-left">
                        <h4 class="font-weight-bolder text-info text-gradient">Ubah Jumlah Peminjaman</h4>
                    </div>
                    <div class="card-body">
                        <form role="form text-left">
                            <label for="jumlah_pinjam">Ubah Jumlah Peminjaman Buku</label>
                            <div class="form-group mb-3 flex-column">
                                <input type="text" class="form-control" name="jumlah_pinjam" id="jumlah_pinjam"
                                    value="1">
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn bg-gradient-info mt-4 mb-0">Ubah</button>
                                <button type="button" class="btn bg-gradient-danger mt-4 mb-0"
                                    data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection