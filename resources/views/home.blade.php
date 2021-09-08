@include('header')
    <div class="hero-slant overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/herov2.png')">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-lg-7 intro">
            <span><img src="{{ asset('images/IDKODING2.png') }}" width="70%"></span>
            <p class="text-white mb-4" data-aos="fade-up" data-aos-delay="100" style="padding-top:15px !important;">
              <font color="black">Belajar Programming bahasa Indonesia dengan mudah dan terstruktur Seperti Laravel, Yii2, Codeigniter, GOlang, Javascript, dan lain-lain.</font>
            </p>
            <form action="{{ route('search') }}" class="sign-up-form d-flex" data-aos="fade-up" data-aos-delay="200">
              <input type="text" class="form-control" name="q" placeholder="Mau Belajar Apa Hari ini ?" value="{{ request()->input('q') }}">
              <input type="submit" class="btn btn-primary" value="CARI">
            </form>
          </div>
        </div>
      </div>
        <div class="slant" style="background-image: url('images/slant.svg');"></div>
    </div>

    <!-- partner kami -->
    <div class="py-3" id="partnerkami">
      <div class="container">
        <div class="owl-logos owl-carousel">
            <?php foreach ($dataphoto['data']['data'] as $row) {?>
              <div class="item">
                <a href="<?=$row['link']?>" target="_blank">
                  <img src="<?=$row['image']?>" alt="<?=$row['image']?>" class="img-fluid" style="width:30%">
                </a>
              </div>
            <?php }?>
        </div>
      </div>
    </div>

    <div class="site-section bg-light" id="tutorial">
      <div class="container">
        <div class="row">
          <div class="col-7 mb-4 position-relative text-center mx-auto">
            <h2 class="font-weight-bold text-center">TUTORIAL</h2>
            <p>Kumpulan tutorial berdasarkan teknologi untuk mempermudah kamu dalam Belajar Programming dengan terstruktur dan mudah.</p>
          </div>
        </div>


        @if ($datapost)
      <div class="row">
        @foreach ($datapost['data']['data'] as $row)
        <div class="col-md-6 mb-5 mb-lg-0 col-lg-4 pb-4">
          <div class="blog_entry">
              <a href="<?=$row['slug']?>"><img style="width:100%" src="<?=$row['image']?>" alt="<?=$row['title']?>" class="img-fluid"></a>
            <div class="p-4 bg-white">
              <h3><a href="<?=$row['slug']?>"><?=$row['title']?></a></h3>
              <span class="date"><?=$row['created_at']?></span>
            </div>
          </div>
        </div>
        @endforeach
      </div>
			<div class="row mt-5">
				<div class="col-lg-4 mx-auto">
				<a href="/tutorial/1" class="btn btn-primary btn-block">LIHAT LEBIH BANYAK</a>
				</div>
			</div>
      @else
      <div class="row">
			  <div class="card">
			    <p><b>Tutorial Dengan Data Tersebut tidak ada</b></p>
			  </div>
			</div>
      @endif
		 </div>
      </div>


    <div class="site-section overlay site-cover-2 bg-body-darker cta" style="background-image: url('images/img_v_4-min.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto text-center">
            <h2 class="text-white mb-4">"Hiduplah seolah engkau mati besok. Belajarlah seolah engkau hidup selamanya." - Mahatma Gandhi
            </h2>
          </div>
        </div>
      </div>
    </div>

    @include('footer')
