@extends('front.layout')

@section('title', 'Category Blogs')

@section('meta_desc', 'Category Blogs of Bloggle Blog')

@section('container')

 <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
        <section class="page-heading">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="text-content">
                  <h2>Blogs of Featured Category</h2>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      

  
      <section class="blog-posts grid-system">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="all-blog-posts">
                <div class="row">
                    @foreach ($post as $item)
                    <div class="col-lg-6">
                        <div class="blog-post">
                          <div class="blog-thumb">
                            <img src="/images/post/{{$item->thumb}}" alt="">
                          </div>
                          <div class="down-content">
                            <span>{{$item->category->name}}</span>
                            <a href="/blog/{{$item->permalink}}"><h4>{{$item->title}}</h4></a>
                            <ul class="post-info">
                              <li><a href="#">Admin</a></li>
                              <li><a href="#">May 31, 2020</a></li>
                              <li><a href="#">12 Comments</a></li>
                            </ul>
                            <p style="margin-bottom:0; border-bottom:0;">{{$item->meta_desc}}</p>
                          </div>
                        </div>
                      </div>
                    @endforeach

                  {{-- <div class="col-lg-12">
                    <ul class="page-numbers">
                      <li><a href="#">1</a></li>
                      <li class="active"><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                    </ul>
                  </div> --}}
                </div>
              </div>
            </div>
            <x-sidebar/>
          </div>
        </div>
</section>

@endsection