@include('header')

<div class="hero-slant overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/herov2.png')">
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-lg-7 intro">
        <span><img src="{{ asset('images/IDKODING2.png') }}" width="70%"></span>
        <p class="text-white mb-4" data-aos="fade-up" data-aos-delay="100" style="padding-top:15px !important;">
          Belajar Programming bahasa Indonesia dengan mudah dan terstruktur Seperti Laravel, Yii2, Codeigniter, GOlang, Javascript, dan lain-lain.
        </p>
        <form action="{{ route('search') }}" class="sign-up-form d-flex" data-aos="fade-up" data-aos-delay="200">
          <input type="text" class="form-control" name="q" placeholder="Mau Belajar Apa Hari ini ?" value="{{ request()->input('q') }}">
          <input type="submit" class="btn btn-primary" value="CARI">
        </form>
      </div>
    </div>
  </div>
  <div class="slant" style="background-image: asset('images/slant.svg');"></div>
</div>

<div class="site-section bg-light" id="tutorial">
  <div class="container">
    <div class="row">
      <div class="col-7 mb-4 position-relative text-center mx-auto">
        <h2 class="font-weight-bold text-center">TUTORIAL</h2>
        <p>Kumpulan tutorial berdasarkan teknologi untuk mempermudah kamu dalam Belajar Programming dengan terstruktur dan mudah.</p>
      </div>
    </div>

    <div class="row">
      @foreach($datatags['data']['data'] as $category)
      <div class="col-md-6 mb-5 mb-lg-0 col-lg-4 pb-4">
        <a class="card" href="{{ route('category.show', $category['slug']) }}">
          <div class="card-body text-center">
            {{ $category['name'] }}
          </div>
        </a>
      </div>
      @endforeach
    </div>
  </div>
</div>

<div class="site-section overlay site-cover-2 bg-body-darker cta" style="background-image: asset('images/img_v_4-min.jpg')">
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
