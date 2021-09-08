@extends('header')


<div  class="hero-slant overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/herov2.png')">
    <div class="slant" style="background-image: url('images/slant-grey.svg');"></div>
</div>

<div class="site-section box_single">
    <div class="container article">
        <div class="row justify-content-center align-items-stretch">
            <article class="col-lg-8 order-lg-2 px-lg-5 articles pt-2 blog_entry box_page">            
                <h2>{{$datapost['data']['title']}}</h2>

                <hr/>

                <div class="img">
                    <img style="width:100% !important" src="{{$datapost['data']['image']}}" alt="{{$datapost['data']['title']}}">
                </div>

                <div class="content-single">
                    {!! $datapost['data']['content'] !!}
                </div>

                
                <!-- ini viewnya bagian ini mashttp://localhost:9000/tes-uniq-name-alpha-numeric -->
                <!-- <div class="pt-5 categories_tags ">
                    <p>Categories:  <a href="#">Design</a>, <a href="#">Events</a>  Tags: <a href="#">#html</a>, <a href="#">#trends</a></p>
                </div> -->
            </article>
        </div>
    </div>
</div>

@extends('footer')
