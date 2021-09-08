
@include('header')

<div class="hero-slant overlay" data-stellar-background-ratio="0.5" style="background-image: url('../images/herov2.png')">
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

    @if ($datapost)
    <div class="row">
      @foreach ($datapost['data']['data'] as $row)
      <div class="col-md-6 mb-5 mb-lg-0 col-lg-4 pb-4">
        <div class="blog_entry">
          <a href="{{ route('detail', $row['slug']) }}"><img style="width:100%" src="<?=$row['image']?>" alt="<?=$row['title']?>" class="img-fluid"></a>
          <div class="p-4 bg-white">
            <h3><a href="{{ route('detail', $row['slug']) }}"><?=$row['title']?></a></h3>
            <span class="date"><?=$row['created_at']?></span>
          </div>
        </div>
      </div>
      @endforeach
    </div>

    <div class="d-flex justify-content-center">
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          @foreach($datapost['data']['links'] as $link)
          @php
          $link_url = false;
          $parts = parse_url($link['url']);

          if(isset($parts['query'])){
              parse_str($parts['query'], $query);
              $link_url = route('tutorial', ['page' => $query['page']]);
          }
          @endphp
          <li class="page-item {{ $link['active'] ? 'active' : '' }}">
            <a class="page-link" {{ ($link['url'] and !$link['active']) ? 'href='.$link_url : '' }} {{ $link['url'] ? "" : "tabindex='-1' aria-disabled='true'" }}>
              <span aria-hidden="true">{!! $link['label'] !!}</span>
            </a>
          </li>
          @endforeach
        </ul>
      </nav>
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

@include('footer')
