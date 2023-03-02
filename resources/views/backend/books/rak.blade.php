@extends('backend.layouts.main')

@section ('content')
<a href="/books" class="btn btn-md bg-warning me-3 link-light" aria-pressed="true">
    <i class="fa-solid fa-circle-left"></i>&nbsp
    Back
</a>
<a href="#" class="btn btn-md bg-success me-3 link-light float-end" data-bs-toggle="modal" data-bs-target="#tbhRak"
    aria-pressed="true">
    <i class="fa-solid fa-circle-plus"></i>&nbsp
    Tambah
</a>
<div class="row">
    <div class="col-lg-12 mb-lg-0 mb-4">
        <div class="card shadow">
            <div class="card-header pb-0 pt-3 bg-transparent">
                <h6 class="text-capitalize">Tabel Rak Buku</h6>
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
                                    Nomor Rak</th>
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
                                    <span class="text-secondary text-xs font-weight-bold">1</span>
                                </td>
                                <td class="align-middle text-center text-lg">
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
                                    <span class="text-secondary text-xs font-weight-bold">2</span>
                                </td>
                                <td class="align-middle text-center text-lg">
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
                                    <span class="text-secondary text-xs font-weight-bold">3</span>
                                </td>
                                <td class="align-middle text-center text-lg">
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















{{-- Tambah Data --}}
<div class="modal fade" id="tbhRak" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card card-plain">
                    <div class="card-header pb-0 text-left">
                        <h4 class="font-weight-bolder text-info text-gradient">Form penambahan rak</h4>
                    </div>
                    <div class="card-body">
                        <form role="form text-left">
                            <label for="rak">Nomor Rak</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Masukkan nomor rak..."
                                    aria-label="rak" required autofocus>
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
<div class="modal fade" id="ubhRak" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card card-plain">
                    <div class="card-header pb-0 text-left">
                        <h4 class="font-weight-bolder text-info text-gradient">Form penambahan rak</h4>
                    </div>
                    <div class="card-body">
                        <form role="form text-left">
                            <label for="rak">Nomor Rak</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Masukkan nomor rak..."
                                    aria-label="rak" required autofocus>
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