@include('header')

<div class="site-section bg-light" id="blog-section">
      <div class="container">
        <div class="row">
          <div class="col-7 mb-4 position-relative text-center mx-auto">
            <h2 class="font-weight-bold text-center">TUTORIAL</h2>
            <p>Kumpulan tutorial berdasarkan teknologi untuk mempermudah kamu dalam Belajar Programming dengan terstruktur dan mudah.</p>          
          </div>
        </div>
        <div class="row">
          <?php foreach($datapost['data']['data'] as $row){?>
          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4 pb-4">
            <div class="blog_entry">
              <a href="<?=$row['slug']?>"><img style="width:100%" src="<?=$row['image']?>" alt="<?=$row['title']?>" class="img-fluid"></a>
              <div class="p-4 bg-white">
                <h3><a href="<?=$row['slug']?>"><?=$row['title']?></a></h3>
                <span class="date"><?=$row['created_at']?></span>
              </div>
            </div>
          </div>
          <?php }?>
        </div>
        <div class="row mt-5">
          <div class="col-lg-4 mx-auto">
            <a href="#" class="btn btn-primary btn-block">LIHAT LEBIH BANYAK</a>
          </div>
        </div>
      </div>
    </div>

    @include('footer')
