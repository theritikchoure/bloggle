@extends('front.layout')

@section('title', $detail->title)

@section('meta_desc', $detail->meta_desc)

@section('container')

<div class="heading-page header-text">
    <section class="page-heading">
    <div class="container">
        <div class="row">
        <div class="col-lg-12">
            <div class="text-content">
            <h4>{{$detail->category->name}}</h4>
            <h2>{{$detail->title}}</h2>
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

      @if (Session::has('success'))
      <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Thank You!!</strong> {{session('success')}}
      </div>
      @endif

      <div class="all-blog-posts">
        <div class="row">
          <div class="col-lg-12">
            <div class="blog-post">
              <div class="blog-thumb">
                <img src="/images/post/{{$detail->thumb}}" alt="">
              </div>
              <div class="down-content">
                <span>{{$detail->category->title}}</span>
                <a href="/{{$detail->permalink}}"><h4>{{$detail->title}}</h4></a>
                <ul class="post-info">
                  <li><a href="">Admin</a></li>
                  <li><a href="#">May 12, 2020</a></li>
                  <li><a href="#comments">{{count($detail->comments)}} Comments</a></li>
                </ul>
                <p>{{$detail->body}}</p>
                <div class="post-options">
                  <div class="row">
                    <div class="col-6">
                      <ul class="post-tags">
                        <li><i class="fa fa-share"></i>Share</li>
                      </ul>
                    </div>
                    <div class="col-6">
                      <ul class="post-share">
                        <li><i class="fa fa-share-alt"></i></li>
                        <li><a href="#">Facebook</a>,</li>
                        <li><a href="#"> Twitter</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12" id="comments">
            <div class="sidebar-item comments">
              <div class="sidebar-heading">
                <h2>{{count($detail->comments)}} comments</h2>
              </div>
              <div class="content">
                <ul>
                  @if($detail->comments)
                    @foreach($detail->comments as $comment)
                      @if($comment->status == 1)
                      <li>
                        <div class="author-thumb">
                          <img src="/front/assets/images/comment-author-01.jpg" alt="">
                        </div>
                        <div class="right-content">
                          @if ($comment->user_id == 0)
                          <h4>Admin<span>{{ $comment->created_at->format('d/M/Y') }}</span></h4>
                          @else
                          <h4 style="text-transform:capitalize ">{{$comment->user->name}}<span>{{ $comment->created_at->format('d/M/Y') }}</span></h4>
                          @endif
                          {{-- <h4>{{$comment->user->name}}<span>May 16, 2020</span></h4> --}}
                          <p>{{$comment->comment}}</p>
                        </div>
                      </li>
                      @endif
                    @endforeach
                  @endif
                </ul>
              </div>
            </div>
          </div>
          
          @auth
          @if($setting->comment == 1)
          <div class="col-lg-12">
            <div class="sidebar-item submit-comment">
              <div class="sidebar-heading">
                <h2>Your comment</h2>
              </div>
              <div class="content">
                <form id="comment" action="/save-comment/{{$detail->id}}" method="post">
                  @csrf
                  <div class="row">
                    <div class="col-lg-12">
                      <fieldset>
                        <textarea name="comment" rows="6" id="message" placeholder="Type your comment" required=""></textarea>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="main-button">Submit</button>
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          @else
          <div class="alert alert-danger col-lg-12">
            <p>Sorry, Comments Are Not Allowed. </p>
          </div>
          @endif
          @endauth
        </div>
      </div>
    </div>
    <x-sidebar/>
  </div>
</div>
</section>

@endsection