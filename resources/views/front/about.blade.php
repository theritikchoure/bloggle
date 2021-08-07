@extends('front.layout')

@section('title', $about->heading)

@section('meta_desc', $about->meta_desc)

@section('about_select', 'active')

@section('container')

<div class="heading-page header-text">
    <section class="page-heading">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-content">
              <h4>about us</h4>
              <h2>{{$about->heading}}</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <!-- Banner Ends Here -->


<section class="about-us">
    <div class="container">
        
      <div class="row">
        <div class="col-lg-12">
            <img src="/images/aboutus/{{$about->head_img}}" alt="">
            <p>{{$about->text}}</p>
        </div>
      </div>
      
        <div class="row">
            <div class="col-lg-6">
                <h4>{{$about->c_one_head}}</h4>
                <p>{{$about->c_one_text}}</p>
            </div>
            <div class="col-lg-6">
                <h4>{{$about->c_two_head}}</h4>
                <p>{{$about->c_two_text}}</p>
            </div>
        </div>
      
        <div class="row">
            <div class="col-lg-6">
                <h4>{{$about->c_three_head}}</h4>
                <p>{{$about->c_three_text}}</p>
            </div>
            <div class="col-lg-6">
                <h4>{{$about->c_four_head}}</h4>
                <p>{{$about->c_four_text}}</p>
            </div>
        </div>


        {{-- <div class="row">
            <div class="col-lg-4 col-md-6">
            <h4>1-03 Donec porttitor augue</h4>
                <p>Quisque bibendum cursus viverra. Mauris at ex ipsum. Aenean condimentum urna nisl, eget interdum ante euismod vel. Aliquam at metus sit amet nunc dapibus posuere.</p>
            </div>
            <div class="col-lg-4 col-md-6">
            <h4>2-03 Donec porttitor augue</h4>
                <p>Maecenas et metus nisl. Morbi ac interdum metus. Aliquam erat volutpat. Donec posuere tortor vel volutpat consequat. Mauris sagittis magna vel tellus semper interdum et id sapien.</p>
            </div>
            <div class="col-lg-4">
            <h4>3-03 Donec porttitor augue</h4>
                <p>Maecenas et metus nisl. Morbi ac interdum metus. Aliquam erat volutpat. Donec posuere tortor vel volutpat consequat. Mauris sagittis magna vel tellus semper interdum et id sapien.</p>
            </div>
        </div> --}}
      
      
        {{-- <div class="row">
            <div class="col-lg-3 col-md-6">
            <h4>01 Four Columns</h4>
                <p>Mauris at ex ipsum. Aenean condimentum urna nisl, eget interdum ante euismod vel. Aliquam at metus sit amet nunc dapibus posuere.</p>
            </div>
            <div class="col-lg-3 col-md-6">
            <h4>02 Four Columns</h4>
                <p>Aliquam erat volutpat. Donec posuere tortor vel volutpat consequat. Mauris sagittis magna vel tellus semper interdum et id sapien.</p>
            </div>
            <div class="col-lg-3 col-md-6">
            <h4>03 Four Columns</h4>
                <p>Morbi ac interdum metus. Donec posuere tortor vel volutpat consequat. Mauris sagittis magna vel tellus semper interdum et id sapien.</p>
            </div>
            <div class="col-lg-3 col-md-6">
            <h4>04 Four Columns</h4>
                <p>Aliquam erat volutpat. Donec posuere tortor vel volutpat consequat. Mauris sagittis magna vel tellus semper interdum et id sapien.</p>
            </div>
        </div> --}}
      
        <div class="row">
            <div class="col-lg-12">
            <ul class="social-icons">
                <li><a href="{{$url->fb_url}}"><i class="fa fa-facebook"></i></a></li>
                <li><a href="{{$url->twit_url}}"><i class="fa fa-twitter"></i></a></li>
                <li><a href="{{$url->inst_url}}"><i class="fa fa-instagram"></i></a></li>
            </ul>
            </div>
        </div>
      
      
    </div>
</section>

@endsection