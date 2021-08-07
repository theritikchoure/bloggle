<div class="col-lg-4">
    <div class="sidebar">
      <div class="row">
        <div class="col-lg-12">
          <div class="sidebar-item search">
            <form id="search_form" name="gs" method="GET" action="">
              <input type="text" name="search" class="searchText" placeholder="type to search..." autocomplete="on">
            </form>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="sidebar-item recent-posts">
            <div class="sidebar-heading">
              <h2>Recent Blog Posts</h2>
            </div>
            <div class="content">
              <ul>
                @foreach ($rec_post as $item)
                  <li><a href="/blog/{{$item->permalink}}">
                    <h5>{{$item->title}}</h5>
                    {{-- <span>May 31, 2020</span> --}}
                    </a>
                  </li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="sidebar-item recent-posts">
            <div class="sidebar-heading">
              <h2>Popular Blog Posts</h2>
            </div>
            <div class="content">
              <ul>
                @foreach ($pop_post as $item)
                  <li><a href="/blog/{{$item->permalink}}">
                    <h5>{{$item->title}}</h5>
                    <span>Views:- {{$item->views}}</span>
                    </a>
                  </li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
        {{-- <div class="col-lg-12">
          <div class="sidebar-item categories">
            <div class="sidebar-heading">
              <h2>Categories</h2>
            </div>
            <div class="content">
              <ul>
                <li><a href="#">- Nature Lifestyle</a></li>
                <li><a href="#">- Awesome Layouts</a></li>
                <li><a href="#">- Creative Ideas</a></li>
                <li><a href="#">- Responsive Templates</a></li>
                <li><a href="#">- HTML5 / CSS3 Templates</a></li>
                <li><a href="#">- Creative &amp; Unique</a></li>
              </ul>
            </div>
          </div>
        </div> --}}
        <div class="col-lg-12">
          <div class="sidebar-item tags">
            <div class="sidebar-heading">
              <h2>Tag Clouds</h2>
            </div>
            <div class="content">
              <ul>
                @foreach ($category as $item)
                <li><a href="/category/{{$item->slug}}">{{$item->name}}</a></li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>