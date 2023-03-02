@extends('backend.layouts.main')
@section('content')
<a href="/books" class="btn btn-md bg-warning me-3 link-light" aria-pressed="true">
    <i class="fa-solid fa-circle-left"></i>&nbsp
    Back
</a>
<a href="#" class="btn btn-md bg-success me-3 link-light float-end" data-bs-toggle="modal" data-bs-target="#tbhBuku"
    aria-pressed="true">
    <i class="fa-solid fa-circle-plus"></i>&nbsp
    Tambah
</a>
<div class="row">
    <div class="col-lg-12 mb-lg-0 mb-4">
        <div class="card shadow">
            <div class="card-header pb-0 pt-3 bg-transparent">
                <h6 class="text-capitalize">Tabel Katalog Buku</h6>
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
                                    Stok</th>
                                <th scope="col"
                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Rak</th>
                                <th scope="col"
                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Harga</th>
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
                                    <span class="text-secondary text-xs font-weight-bold">Buku wajib orang miskin</span>
                                </td>
                                <td>
                                    <span class="text-secondary text-xs font-weight-bold">30</span>
                                </td>
                                <td>
                                    <span class="text-secondary text-xs font-weight-bold">1</span>
                                </td>
                                <td>
                                    <span class="text-secondary text-xs font-weight-bold">Rp.100.000</span>
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
                                    <span class="text-secondary text-xs font-weight-bold">Pembelajaran Dasar HTML</span>
                                </td>
                                <td>
                                    <span class="text-secondary text-xs font-weight-bold">28</span>
                                </td>
                                <td>
                                    <span class="text-secondary text-xs font-weight-bold">2</span>
                                </td>
                                <td>
                                    <span class="text-secondary text-xs font-weight-bold">Rp.200.000</span>
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
                                    <span class="text-secondary text-xs font-weight-bold">Matematika Sains</span>
                                </td>
                                <td>
                                    <span class="text-secondary text-xs font-weight-bold">18</span>
                                </td>
                                <td>
                                    <span class="text-secondary text-xs font-weight-bold">2</span>
                                </td>
                                <td>
                                    <span class="text-secondary text-xs font-weight-bold">Rp.200.000</span>
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






{{-- Lihat Data --}}
<div class="modal fade" id="lhtBuku" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card card-plain">
                    <div class="card-header pb-0 text-left">
                        <h4 class="font-weight-bolder text-info text-gradient">Detail Buku</h4>
                    </div>
                    <div class="card-body">
                        <form role="form text-left">
                            <label for="judul_buku">Judul Buku</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control-plaintext-plaintext" name="judul" id="judul"
                                    aria-label="judul_buku" readonly>
                            </div>

                            <label for="pengarang">Pengarang</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control-plaintext" name="pengarang" name="pengarang"
                                    aria-label="pengarang" readonly>
                            </div>

                            <div class="col-lg-12 d-flex justify-content-between">
                                <div class="col-lg-5">
                                    <label for="isbn">ISBN</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control-plaintext" name="isbn" name="isbn"
                                            aria-label="ISBN" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <label for="stok">Stok Buku</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control-plaintext" name="stok" name="stok"
                                            aria-label="stok" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 d-flex justify-content-between">
                                <div class="col-lg-5">
                                    <label for="penerbit">Penerbit</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control-plaintext" name="penerbit"
                                            name="penerbit" aria-label="penerbit" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <label for="thn_terbit">Tahun Terbit</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control-plaintext" name="thn_terbit"
                                            name="thn_terbit" aria-label="thn_terbit" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn bg-gradient-info mt-4 mb-0">Tambah</button>
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




{{-- Tambah Data --}}
<div class="modal fade" id="tbhBuku" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card card-plain">
                    <div class="card-header pb-0 text-left">
                        <h4 class="font-weight-bolder text-info text-gradient">Form penambahan buku</h4>
                    </div>
                    <div class="card-body">
                        <form role="form text-left">
                            <label for="judul_buku">Judul Buku</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="judul" id="judul"
                                    placeholder="Masukkan judul buku..." aria-label="judul_buku" required autofocus>
                            </div>

                            <label for="pengarang">Pengarang</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="pengarang" name="pengarang"
                                    placeholder="Masukkan nama pengarang..." aria-label="pengarang" required>
                            </div>

                            <div class="col-lg-12 d-flex justify-content-between">
                                <div class="col-lg-5">
                                    <label for="isbn">ISBN</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="isbn" name="isbn"
                                            placeholder="Masukkan ISBN buku..." aria-label="ISBN" required>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <label for="stok">Stok Buku</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="stok" name="stok"
                                            placeholder="Masukkan stok buku..." aria-label="stok" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 d-flex justify-content-between">
                                <div class="col-lg-5">
                                    <label for="penerbit">Penerbit</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="penerbit" name="penerbit"
                                            placeholder="Masukkan penerbit buku..." aria-label="penerbit" required>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <label for="thn_terbit">Tahun Terbit</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="thn_terbit" name="thn_terbit"
                                            placeholder="Masukkan tahun terbit..." aria-label="thn_terbit" required>
                                    </div>
                                </div>
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn bg-gradient-info mt-4 mb-0">Tambah</button>
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



{{-- Ubah Data --}}
<div class="modal fade" id="ubhBuku" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card card-plain">
                    <div class="card-header pb-0 text-left">
                        <h4 class="font-weight-bolder text-info text-gradient">Form perubahan katalog</h4>
                    </div>
                    <div class="card-body">
                        <form role="form text-left">
                            <label for="judul_buku">Judul Buku</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="judul" id="judul"
                                    placeholder="Masukkan judul buku..." aria-label="judul_buku" required autofocus>
                            </div>

                            <label for="pengarang">Pengarang</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="pengarang" name="pengarang"
                                    placeholder="Masukkan nama pengarang..." aria-label="pengarang" required>
                            </div>

                            <div class="col-lg-12 d-flex justify-content-between">
                                <div class="col-lg-5">
                                    <label for="isbn">ISBN</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="isbn" name="isbn"
                                            placeholder="Masukkan ISBN buku..." aria-label="ISBN" required>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <label for="stok">Stok Buku</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="stok" name="stok"
                                            placeholder="Masukkan stok buku..." aria-label="stok" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 d-flex justify-content-between">
                                <div class="col-lg-5">
                                    <label for="penerbit">Penerbit</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="penerbit" name="penerbit"
                                            placeholder="Masukkan penerbit buku..." aria-label="penerbit" required>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <label for="thn_terbit">Tahun Terbit</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="thn_terbit" name="thn_terbit"
                                            placeholder="Masukkan tahun terbit..." aria-label="thn_terbit" required>
                                    </div>
                                </div>
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn bg-gradient-info mt-4 mb-0">Tambah</button>
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