@extends('front.layout')

@section('title', 'Bloggle Blog')

@section('meta_desc', 'Bloggle Blog')

@section('home_select', 'active')

@section('container')
<div class="main-banner header-text">
    <div class="container-fluid">
      <div class="owl-banner owl-carousel">
        @foreach ($slider as $slider)
          <div class="item">
            <img src="/images/post/{{$slider->thumb}}" alt="">
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span>{{$slider->category->name}}</span>
                </div>
                <a href="/blog/{{$slider->permalink}}"><h4>{{$slider->title}}</h4></a>
                {{-- <ul class="post-info">
                  <li><a href="#">Admin</a></li>
                  <li><a href="#">May 12, 2020</a></li>
                  <li><a href="#">12 Comments</a></li>
                </ul> --}}
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>

  <section class="blog-posts">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="all-blog-posts">
            <div class="row">
              @foreach ($post as $item)
                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="/images/post/{{$item->thumb}}" alt="">
                    </div>
                    <div class="down-content">
                      <span>{{$item->category->name}}</span>
                      <a href="/blog/{{$item->permalink}}"><h4>{{$item->title}}</h4></a>
                      <p>{{$item->meta_desc}}</p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <ul class="post-tags">
                              <li><i class="fa fa-share"></i> Share</li>
                            </ul>
                          </div>
                          <div class="col-6">
                            <ul class="post-share">
                              <li><i class="fa fa-share-alt"></i></li>
                              <li><div data-href="http://127.0.0.1:8000/blog/{{$item->permalink}}" ><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://127.0.0.1:8000/blog/{{$item->permalink}}/src=sdkpreparse" class="fb-xfbml-parse-ignore">Facebook</a>,</li>
                              <li><a href="#"> Twitter</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="/blog">View All Posts</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <x-sidebar/>
      </div>
    </div>
  </section>
@endsection

