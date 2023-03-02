@extends('frontend.layouts.main')

@include('frontend.layouts.header')

<div class="container mb-10">
    <div class="row pb-0 align-item-center rounded-3 border-3 border shadow-lg mb-5">
        <div class="col-lg-10 p-4 p-lg-6 pt-lg-3">
            <div class="lc-block mb-0">
                <h4 class="title"><strong>Katalog Buku</strong></h4>
            </div>
        </div>
        <div class="container ms-8 me-10">
            <div class="row ms-0 md-2">
                <div class="col-md-3">
                   <div class="card text-bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">BUKU 1</div>
                        <div class="card-body">
                            <h5 class="card-title">Judul Buku</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#tbhData">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                   <div class="card text-bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">BUKU 2</div>
                        <div class="card-body">
                            <h5 class="card-title">Judul Buku</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#tbhData" >Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                   <div class="card text-bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">BUKU 3</div>
                        <div class="card-body">
                            <h5 class="card-title">Judul Buku</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#tbhData">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                   <div class="card text-bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">BUKU 4</div>
                        <div class="card-body">
                            <h5 class="card-title">Judul Buku</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#tbhData">Selengkapnya</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row ms-0 md-2">
                <div class="col-md-3">
                   <div class="card text-bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">BUKU 5</div>
                        <div class="card-body">
                            <h5 class="card-title">Judul Buku</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#tbhData">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                   <div class="card text-bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">BUKU 6</div>
                        <div class="card-body">
                            <h5 class="card-title">Judul Buku</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#tbhData">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                   <div class="card text-bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">BUKU 7</div>
                        <div class="card-body">
                            <h5 class="card-title">Judul Buku</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#tbhData">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                   <div class="card text-bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">BUKU 8</div>
                        <div class="card-body">
                            <h5 class="card-title">Judul Buku</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#tbhData">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
            <div class="modal fade" id="tbhData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Info Buku</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label for="judul" class="form-label">Judul Buku</label>
                                <input type="text" class="form-control" id="judul" value="Judul Buku" disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="isbn" class="form-label">ISBN</label>
                                    <input type="text" class="form-control" id="isbn" value="ISBN" disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="tahun" class="form-label">Tahun Terbit</label>
                                    <input type="text" class="form-control" id="tahun" value="Tahun Terbit" disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="pengarang" class="form-label">Pengarang</label>
                                    <input type="text" class="form-control" id="pengarang" value="Pengarang" disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="stok" class="form-label">Stok Buku</label>
                                    <input type="text" class="form-control" id="stok" value="Stok Buku" disabled>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</div>
@include('frontend.layouts.footer')
