@extends('frontend.layouts.main')

@include('frontend.layouts.header')

{{-- <section id="about" class="about mt-10" >

  </section> --}}



   <div class="container py-5 mt-4">
    <section>
    <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <img src="{{ asset('frontend/assets/img/about.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3><strong> Tentang Kami </strong></h3>
            <h4>SISFOPUS | Sistem Informasi Perpustakaan</h4>
            <p class="fst-italic">
                SISFOPUS merupakan Sistem Informasi Perpustakaan berbasis website pada sekolahh dan merupakan aplikasi yang dibuat untuk memudahkan proses pendataan, peminjamnan dan pengembalian buku pada perpustakaan.
            </p>
            <p>
              Sistem informasi perpustakaan adalah suatu sistem yang dibangun dengan menggunakan teknologi informasi untuk mempermudah pengelolaan dan akses informasi di perpustakaan. Sistem ini membantu pengguna untuk mencari, meminjam, dan mengembalikan buku dengan mudah dan efisien.
              </p>
            <h5>Berikut Fitur yang ada pada sistem ini :</h5>
            <ul>
              <li><i class="bi bi-check-circle"></i> Manajemen dan Pendataan Buku.</li>
              <li><i class="bi bi-check-circle"></i> Peminjaman dan Pengembalian Buku.</li>
              <li><i class="bi bi-check-circle"></i> Manajemen Anggota.</li>
            </ul>

            <a href="#visimisi" type="button" class="btn btn-outline-warning btn-sm">Visi Misi</a>
            <a href="#struktur" type="button" class="btn btn-outline-warning btn-sm">Struktur Organisasi</a>
            <a href="#alamat" type="button" class="btn btn-outline-warning btn-sm">Alamat</a>

          </div>
        </div>
      </div>
    </section>
    <div class="row pb-0 align-items-center rounded-3 border shadow-lg mb-5" id="visimisi">
        <div class="col-lg-12 p-3 p-lg-5 pt-lg-3">
            <div class="lc-block mb-3">
                <div editable="rich">
                    <h4 class="title"></h4>
                </div>
            </div>
            <div class="lc-block mb-3">
                <div class="row">
                    <div class="col-lg-3">
                        <img src="{{ asset('frontend/assets/img/about.jpg') }}" class="img-fluid" alt="">
                        <div class="col-lg-12 mt-3">
                            <img src="{{ asset('frontend/assets/img/about.jpg') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <img src="{{ asset('frontend/assets/img/about.jpg') }}" class="img-fluid" alt="">
                        <div class="col-lg-12 mt-3">
                                <img src="{{ asset('frontend/assets/img/about.jpg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h3><strong> VISI DAN MISI SEKOLAH ....</strong></h3>
                    <h4>VISI</h4>

                    <P>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita repellendus, consequuntur fugiat dicta nemo numquam obcaecati dolores fuga. Libero soluta ipsa totam iste eligendi ipsum repudiandae ullam odit explicabo veniam!
                    </P>
                    <h4> MISI </h4>
                    <p>1. Mengembangkan Potensi siswa</p>
                    <p>2. Menaiki gunung</p>
                    <p>3. Mendaki Lembah</p>
                    <p>4. Menaklukkan Naga</p>
                    <p>5. Mencari Keadilan</p>
                    <p>6. Mencari Kitab Suci</p>

                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="row pb-0 align-items-center rounded-3 border shadow-lg mb-5" id="struktur">
            <div class="col-lg-12 p-3 p-lg-5 pt-lg-3">
                <div class="lc-block mb-3">
                    <div editable="rich">
                        <h4 class="title" >Struktur Organisasi</h4>
                    </div>
                </div>
                <div class="lc-block mb-3">
                    <div class="row">
                        <div class="col-lg-12">
                            <img src="https://via.placeholder.com/1050x500" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pb-0  align-items-center rounded-3 border shadow-lg mb-2" id="alamat">
            <div class="col">
                <div class="p-3">

                    <h4 class="title">Alamat</h4>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d1986.6895564848385!2d97.06161093774969!3d5.202963007781589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3047779715263f71%3A0x2b1a1cd38e80b8b3!2sKampus%20Unimal%20Bukit%20Indah%2C%20Jl.%20Kampus%20Unimal%20Bukit%20Indah%2C%20Blang%20Pulo%2C%20Muara%20Satu%2C%20North%20Aceh%20Regency%2C%20Aceh%2024355!3m2!1d5.2029363!2d97.0627026!5e0!3m2!1sen!2sid!4v1677687608433!5m2!1sen!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                </div>
            </div>
            <div class="col">
                <div class="p-3">
                    <h3>JL.Jalan, kecamatan. , Kota Lhokseumawe, Aceh</h3>
                    <h4 class="title">Kontak Kami</h4>
                    <p><i class="bi bi-telephone"></i> 0822-2222-2222 </p>
                    <p><i class="bi bi-envelope"></i> sekolah@gmail.com </p>
                </div>
            </div>
        </div>
    </div>



@include('frontend.layouts.footer')
