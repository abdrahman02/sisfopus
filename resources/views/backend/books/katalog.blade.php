@extends('backend.layouts.main')
@section('content')
<a href="/books" class="btn btn-md bg-warning me-3 link-light" aria-pressed="true">
    <i class="fa-solid fa-circle-left"></i>&nbsp
    Back
</a>
<a href="#" class="btn btn-md bg-success me-3 link-light float-end" data-bs-toggle="modal" data-bs-target="#tbhKatalog"
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
@endsection