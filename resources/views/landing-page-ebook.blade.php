@include('header1')
<style>
.grid-container {
  display: grid;
  /* grid-column-gap: 10px; */
  grid-template-columns: auto auto;
}

.grid-item {
  font-size: 20px;
  text-align: center;
}
</style>

<section class="jumbotron mb-0" style="padding-top: 160px; background-color: #000080!important;">
  <div class="row">
    <div class="col-md-3 text-center mt-3">
      <img src="{{asset('asset/avatar/hafidh.jpg')}}" style="text-align: center;width: 150px;height: 150px;object-fit: cover;background-color: #fff;border-radius: 50%;padding: 5px;">
      <div class="mentor">
        <h5 class="text-white font-weight-bold mt-4">Ahmad Hafidh Ayatullah</h5>
        <p class="text-white">Author of This Ebook</p>
      </div>
      <div class="profile-setting" style="margin-top: 10px">
        <div class="social" style="font-size: 30px">
          <a href="https://www.facebook.com/hafydhayatullah" target="_blank" style="margin-right: 10px">
            <i class="fab fa-facebook-square" style="color: white"></i>
          </a>
          <a href="https://www.linkedin.com/in/ahmad-hafidh-ayatullah/" target="_blank">
            <i class="fab fa-linkedin" style="color: white"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="row">
        <div class="col-md-4 text-center">
          <div class="card">
            <img src="https://master.idkoding.com/storage/ebooks/j6LPI5FLQVbYGxSobHZWB9X531ej3z84D6kCLYuu.png" style="width: 100%;" class="rounded-lg">
        </div>
        </div>
        <div class="col-md-8">
          <h3 class="text-white font-weight-bold mt-2">Membuat Web Service dengan Standarisation Encryption Industri 4.0 pada Lumen 8</h3>
          <hr style="border-top: 1px solid rgb(241 220 212);">
          <div class="profile-name" style="color: #ddd;font-weight:normal">
            <div class="grid-container">
                <div class="grid-item text-white profile-name mb-2">
                    <span>Pelajar / Mahasiswa </span><br>
                    <span class="text-white font-weight-bold mt-2">Rp. 59.000 </span>
                </div>
                <div class="grid-item text-white profile-name mb-2">
                    <span>Umum</span><br>
                    <span class="text-white font-weight-bold mt-2">Rp. 75.000 </span>
                </div>
            </div>
          </div>
          <hr style="border-top: 1px solid rgb(241 220 212);">
          <div class="profile-name">
            <div class="row">
              <div class="col-md-6 col-12">
                <button type="button" class="mt-3 btn shadow btn-round btn-block btn-lg waves-effect waves-light mt-4 font-weight-bold btn-light border-0">
                  <a href="https://api.whatsapp.com/send?phone=+628515890090&amp;text=Halo%20Kak,%20Saya%20Mau%20beli%20Ebook%20Membuat%20Web%20Service%20dengan%20Standarisation%20Encryption%20Industri%204.0%20pada%20Lumen%208" target="_blank" class="btn btn-default"><i class="fa fa-download" aria-hidden="true"></i> Beli Ebook</a>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="container-fluid py-4" style="background-color: #c9dbec;">
  <div class="row">
    <div class="col-md-4">
      <div class="card ">
        <div class="card-body">
          <label class="font-weight-bold">
            <i class="fa fa-check-circle"></i> DAFTAR ISI </label>
          <hr>
          <div class="mt-3" style="overflow: hidden; height: 500px;overflow-y: scroll;padding-bottom:10px">
            <ul class="list-group list-group-flush mb-3">
              <h2 class="my-1 h5">
                <i class="fa fa-file"></i> Pendahuluan
              </h2>
              <li class="list-group-item" style="border-radius: .2rem!important;margin-left: 10px; margin-right:10px;">
                <i class="fa fa-check-circle"></i> Cover
              </li>
              <li class="list-group-item" style="border-radius: .2rem!important;margin-left: 10px; margin-right:10px;">
                <i class="fa fa-check-circle"></i> Kata Pengantar
              </li>
              <li class="list-group-item" style="border-radius: .2rem!important;margin-left: 10px; margin-right:10px;">
                <i class="fa fa-check-circle"></i> License Buku
              </li>
            </ul>
            <ul class="list-group list-group-flush mb-3">
              <h2 class="my-1 h5">
                <i class="fa fa-file"></i> Fundamental
              </h2>
              <li class="list-group-item" style="border-radius: .2rem!important;margin-left: 10px; margin-right:10px;">
                <i class="fa fa-check-circle"></i> Pengenalan Microframework Laravel
              </li>
              <li class="list-group-item" style="border-radius: .2rem!important;margin-left: 10px; margin-right:10px;">
                <i class="fa fa-check-circle"></i> Pengertian MVC
              </li>
              <li class="list-group-item" style="border-radius: .2rem!important;margin-left: 10px; margin-right:10px;">
                <i class="fa fa-check-circle"></i> Arsitektur MVC
              </li>
              <li class="list-group-item" style="border-radius: .2rem!important;margin-left: 10px; margin-right:10px;">
                <i class="fa fa-check-circle"></i> Fitur yang ada di Lumen
              </li>
              <li class="list-group-item" style="border-radius: .2rem!important;margin-left: 10px; margin-right:10px;">
                <i class="fa fa-check-circle"></i> Routing
              </li>
              <li class="list-group-item" style="border-radius: .2rem!important;margin-left: 10px; margin-right:10px;">
                <i class="fa fa-check-circle"></i> Middleware
              </li>
              <li class="list-group-item" style="border-radius: .2rem!important;margin-left: 10px; margin-right:10px;">
                <i class="fa fa-check-circle"></i> Controller
              </li>
              <li class="list-group-item" style="border-radius: .2rem!important;margin-left: 10px; margin-right:10px;">
                <i class="fa fa-check-circle"></i> Requests
              </li>
              <li class="list-group-item" style="border-radius: .2rem!important;margin-left: 10px; margin-right:10px;">
                <i class="fa fa-check-circle"></i> Responses
              </li>
              <li class="list-group-item" style="border-radius: .2rem!important;margin-left: 10px; margin-right:10px;">
                <i class="fa fa-check-circle"></i> Database
              </li>
            </ul>
            <ul class="list-group list-group-flush mb-3">
              <h2 class="my-1 h5">
                <i class="fa fa-file"></i> Studi Kasus
              </h2>
              <li class="list-group-item" style="border-radius: .2rem!important;margin-left: 10px; margin-right:10px;">
                <i class="fa fa-check-circle"></i> Membuat Web Service Dengan Standarisation Encryption Industry 4.0 Pada Lumen 8
              </li>
              <li class="list-group-item" style="border-radius: .2rem!important;margin-left: 10px; margin-right:10px;">
                <i class="fa fa-check-circle"></i> Macam-macam Metode Enkripsi
              </li>
              <li class="list-group-item" style="border-radius: .2rem!important;margin-left: 10px; margin-right:10px;">
                <i class="fa fa-check-circle"></i> Kebutuhan Server
              </li>
              <li class="list-group-item" style="border-radius: .2rem!important;margin-left: 10px; margin-right:10px;">
                <i class="fa fa-check-circle"></i> Instalasi Lumen
              </li>
              <li class="list-group-item" style="border-radius: .2rem!important;margin-left: 10px; margin-right:10px;">
                <i class="fa fa-check-circle"></i> Struktur pada Lumen
              </li>
              <li class="list-group-item" style="border-radius: .2rem!important;margin-left: 10px; margin-right:10px;">
                <i class="fa fa-check-circle"></i> Menjalankan Lumen
              </li>
              <li class="list-group-item" style="border-radius: .2rem!important;margin-left: 10px; margin-right:10px;">
                <i class="fa fa-check-circle"></i> Konfigurasi Database
              </li>
              <li class="list-group-item" style="border-radius: .2rem!important;margin-left: 10px; margin-right:10px;">
                <i class="fa fa-check-circle"></i> Membuat Model dan Migration
              </li>
              <li class="list-group-item" style="border-radius: .2rem!important;margin-left: 10px; margin-right:10px;">
                <i class="fa fa-check-circle"></i> Membuat Controller
              </li>
              <li class="list-group-item" style="border-radius: .2rem!important;margin-left: 10px; margin-right:10px;">
                <i class="fa fa-check-circle"></i> Menguji dengan Postman
              </li>
              <li class="list-group-item" style="border-radius: .2rem!important;margin-left: 10px; margin-right:10px;">
                <i class="fa fa-check-circle"></i> Penerapan Standarisation Encryption Industry 4.0 (on progress)
              </li>
              <li class="list-group-item" style="border-radius: .2rem!important;margin-left: 10px; margin-right:10px;">
                <i class="fa fa-check-circle"></i> Menguji Ulang dengan Postman (on progress)
              </li>
              <li class="list-group-item" style="border-radius: .2rem!important;margin-left: 10px; margin-right:10px;">
                <i class="fa fa-check-circle"></i> Source Code & Kesimpulan
              </li>
            </ul>
          </div>
          <hr> Dapatkan ebook sekarang untuk dapat mengikuti pembelajaran
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <div class="card mb-4">
        <div class="card-body">
          <label class="font-weight-bold">
            <i class="fa fa-info-circle"></i> TENTANG EBOOK </label>
          <hr>
          <div class="mt-3" style="font-size: 18px">
            <p></p>
            <p>Pada Buku ini kita akan belajar langsung studi kasus Membuat Web Service dengan Standarisation Encryption Industri 4.0 pada Lumen 8</p>
            <p>Untuk studi kasus kali ini, kita akan belajar menjadi beberapa Bab, diantaranya :</p>
            <ul>
                <li>Fundamental</li>
                <li>Macam-macam Metode Enkripsi</li>
                <li>Kebutuhan Server</li>
                <li>Instalasi & Struktur pada Lumen</li>
                <li>Konfigurasi Database</li>
                <li>Penerapan Standarisation Encryption Industry 4.0</li>
                <li>Menguji Ulang dengan Postman</li>
                <li>Source Code & Kesimpulan</li>
            </ul>
            <p>Sebelum memulai studi kasus ini, ada beberapa persyaratan yang harus teman-teman lakukan untuk bisa memulai project ini. Diantaranya :</p>
            <ul>
                <li>Sudah Menginstall Composer</li>
                <li>Sudah Menginstall XAMPP atau yang lainnya.</li>
                <li>Menggunakan minimal PHP versi 7.3</li>
            </ul>
            <p>Selamat Belajar :)</p>
            <p></p>
          </div>
        </div>
      </div>
    </div>
  </div>
    <div class="row justify-content-center mt-5">
        <div class="col-md-12 text-center mb-3">
            <h4 class="font-weight-bold"><i class="fa fa-check-circle"></i> BENEFIT</h4>
        </div>
        <div class="col-md-3 col-6 mb-4">
            <div class="card text-center h-100 border-0 rounded-lg shadow-md">
                <div class="card-body">
                    <i class="fa fa-book fa-lg text-dark"></i>
                    <hr>
                    <span class="text-uppercase">Ebook </span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 mb-4">
            <div class="card text-center h-100 border-0 rounded-lg shadow-md">
                <div class="card-body">
                    <i class="fa fa-database fa-lg text-dark"></i>
                    <hr>
                    <span class="text-uppercase">Souce Code </span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 mb-4">
            <div class="card text-center h-100 border-0 rounded-lg shadow-md">
                <div class="card-body">
                    <i class="fab fa-telegram fa-lg text-dark"></i>
                    <hr>
                    <span class="text-uppercase">Konsultasi Belajar Member <br/> (Private Group)</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 mb-4">
            <div class="card text-center h-100 border-0 rounded-lg shadow-md">
                <div class="card-body">
                    <i class="fa fa-server fa-lg text-dark"></i>
                    <hr>
                    <span class="text-uppercase">Kupon Diskon Hosting <br> UP TO 30%</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 mb-4">
            <div class="card text-center h-100 border-0 rounded-lg shadow-md">
                <div class="card-body">
                    <i class="fa fa-award fa-lg text-dark"></i>
                    <hr>
                    <span class="text-uppercase">Sertifikat </span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 mb-4">
            <div class="card text-center h-100 border-0 rounded-lg shadow-md">
                <div class="card-body">
                    <i class="fa fa-sync fa-lg text-dark"></i>
                    <hr>
                    <span class="text-uppercase">Update Materi </span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 mb-4">
            <div class="card text-center h-100 border-0 rounded-lg shadow-md">
                <div class="card-body">
                    <i class="fa fa-clock fa-lg text-dark"></i>
                    <hr>
                    <span class="text-uppercase">Akses Selamanya </span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 mb-4">
            <div class="card text-center h-100 border-0 rounded-lg shadow-md">
                <div class="card-body">
                    <i class="fa fa-plane fa-lg text-dark"></i>
                    <hr>
                    <span class="text-uppercase">Real Studi Kasus </span>
                </div>
            </div>
        </div>
        <div class="col-md-12 text-center mb-2 mt-5">
            <h4 class="font-weight-bold"><i class="fa fa-trophy"></i> Dapatkan Snack Gratis </h4><br>
        </div>
        <div class="row justify-content-center mb-3">
            <div class="row">
                <div class="col-md-12 text-center">
                    <center><img src="{{asset('asset/avatar/iklan-ebook-lumen.png')}}" style="width: 50%;" class="rounded-lg"></center>
                </div>
            </div>
        </div>
    </div>

</div>

@include('footer')
