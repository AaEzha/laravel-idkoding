<div class="site-footer">
  <div class="container">

    <div class="row justify-content-between">
      <div class="col-lg-4">
        <div class="widget">
          <h3>About</h3>
          <span><img src="{{ asset('images/IDKODINGBORDERHITAM.png') }}" width="50%"></span>
          <p>Belajar Programming bahasa Indonesia dengan mudah dan terstruktur Seperti Laravel, Yii2, Codeigniter, GOlang, Javascript, dan lain-lain.</p>
        </div>
        <div class="widget">
          <h3>Connect with us</h3>
          <ul class="social list-unstyled">
            <li><a href="https://www.facebook.com/IDKoding-112399917743907/" target="_blank"><span class="icon-facebook"></span></a></li>
            <li><a href="https://www.instagram.com/idkoding/" target="_blank"><span class="icon-instagram"></span></a></li>
            <!-- <li><a href="#"><span class="icon-youtube"></span></a></li> -->
            <li><a href="https://t.me/joinchat/tx5FH8aVmeo1NzBl" target="_blank"><span class="icon-telegram"></span></a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="row">
          <div class="col-6">
            <div class="widget">
              <h3>Navigations</h3>

              <ul class="links list-unstyled">
                <li><a href="{{url('/')}}#kategori">Kategori</a></li>
                <li><a href="{{url('/')}}#tutorial">Tutorial</a></li>
                <!-- <li><a href="#">Ebook</a></li> -->
                <li><a href="{{url('/')}}#partnerkami">Partner Kami</a></li>
              </ul>

            </div>
            <div class="widget">
              <h3>Legal</h3>
              <ul class="links list-unstyled">
                <li><a href="#" type="button" data-toggle="modal" data-target="#modal1">Syarat Layanan</a></li>

                <!-- Modal 1 -->
                <div class="modal fade" id="modal1">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Syarat Layanan</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body justify-content">
                        <h5>UMUM</h5>
                        <h6>Selamat datang di situs IDKoding.com. Belajar Programming bahasa Indonesia dengan mudah dan terstruktur
Seperti Laravel, Yii2, Codeigniter, GOlang, Javascript, dan lain-lain.</h6>
                        <h6 class="setpadding-content">Dengan mengakses IDKoding.com berarti anda setuju untuk terikat dengan peraturan umum beserta syarat dan ketentuan ini, jika anda menyutujui peraturan umum beserta syarat dan ketentuan yang ditetapkan dibawah ini.</h6>
                        <br />
                        <h5>KETENTUAN UMUM PENGGUNAAN</h5>
                        <h6>Halaman ini (termasuk dokuman yang disebut didalamnya) memuat syarat-syarat penggunaan yang menjadi dasar bagi PENGUNJUNGNYA dalam menggunakan IDKoding.com</h6>
                        <h6>Pastikan ketentuan penggunaan ini anda secara cermati dengan baik. Dengan menggunakan dan atau mengunjungi maka anda menyatakan bahwa:</h6>
                        <h6 class="setpadding-content">- Anda setuju untuk terikat dengan Syarat dan Ketentuan yang ditetapkan serta kebijakan mengenai perubahan atau perbaikan Syarat dan Ketentuan di kemudian hari.<br/>
                            - Anda yang dianggap belum dewasa berdasarkan ketentuan perundang-undangan yang berlaku, wajib mendapatkan bimbingan dan pengawasan orang tua dalam melakukan akses IDKoding.com.</h6>
                      </div>
                    </div>
                  </div>
                </div>

                <li><a href="#" type="button" data-toggle="modal" data-target="#modal2">Kebijakan Privasi</a></li>

                <!-- Modal 2 -->
                <div class="modal fade" id="modal2">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Kebijakan Privasi</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body justify-content">
                        <h6>Jika Anda memerlukan informasi lebih lanjut atau memiliki pertanyaan lain tentang kebijakan privasi pada IDKoding.com, silahkan menghubungi kami via e-mail di cs@idkoding.com.</h6>
                        <h6>Pada IDKoding.com, privasi para pengunjung blog ini sangat penting. Dokumen kebijakan privasi ini mengurai jenis informasi pribadi yang diterima dan dikumpulkan oleh IDKoding.com dan bagaimana informasi pribadi tersebut digunakan.</h6>
                        <h5 class="setpadding-content">Cookies dan Web Beacons</h5>
                        <h6>IDKoding.com menggunakan cookies untuk menyimpan informasi tentang preferensi pengunjung, merekam informasi pengguna tertentu pada halaman yang dikunjungi, menyesuaikan halaman Web content based berdasarkan tipe browser yang digunakan pengunjung atau informasi lainnya yang pengunjung kirimkan melalui browser yang digunakan.</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </ul>
            </div>
          </div>
          <div class="col-6">
            <div class="widget">
              <h3>Tags</h3>

              <?php if (!empty($datatags['data'])) { ?>
                <?php foreach ($datatags['data']['data'] as $row) { ?>
                  <a class="btn btn-sm btn-outline-secondary mb-2 me-2" href="/tag/<?= $row['slug'] ?>">
                    <?= $row['name'] ?>
                  </a>
                <?php } ?>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row justify-content-center text-center copyright">
      <div class="col-md-8">
        <p>Copyright &copy;<script>
            document.write(new Date().getFullYear());
          </script> IDKODING. All Rights Reserved.
        </p>
      </div>
    </div>
  </div>
</div>


<div id="overlayer"></div>
<div class="loader">
  <div class="spinner-border" role="status">
    <span class="sr-only">Loading...</span>
  </div>
</div>

<script src="{{ asset('asset/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('asset/js/jquery-migrate-3.0.0.min.js') }}"></script>
<script src="{{ asset('asset/js/popper.min.js') }}"></script>
<script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('asset/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('asset/js/aos.js') }}"></script>
<script src="{{ asset('asset/js/imagesloaded.pkgd.js') }}"></script>
<script src="{{ asset('asset/js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('asset/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('asset/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('asset/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('asset/js/custom.js') }}"></script>

<script>
  var hashValue = window.location.hash.substr(1);
  if (hashValue == "kategori") {
    console.log("kategori show/");
    $('#dropdown-kategori').attr("style", "visibility:inherit;opacity:1;");
    // .site-menu .has-children .dropdown
  }
  $(document).on("mouseleave", function() {
    $('#dropdown-kategori').removeAttr("style");
  });
</script>
</body>

</html>