@extends('admin.layout')

@section('site_title', 'Dashboard')

@section('dashboard_select', 'active')

@section('container')

<div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <h5 class="m-0">Welcome to Bloggle!</h5>
      </div>
      <div class="card-body">
        <p class="card-text">We've assembled some links to get you started</p>
        {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}

        <div class="row">
            <div class="col-12 col-sm-6 col-md-4 dash-col">
                <p><b>Get Started</b></p>
                <a href="/admin/settings" class="btn btn-primary btn-lg dash-btn" style="font-size: 16px; padding: 17px 57px; border-radius:0;">Customize Your Site</a>
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-4">
                <p><b>Next Steps</b></p>
                <ul class="list-unstyled" style="line-height: 35px;">
                    <li><i class="fas fa-edit">&nbsp;&nbsp;</i><a href="/admin/post/add">Write Your Blog</a></li>
                    <li><i class="fas fa-eye">&nbsp;&nbsp;</i><a href="/">View Your Site</a></li>
                </ul>
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-4">
                <p><b>More Actions</b></p>
                <ul class="list-unstyled" style="line-height: 35px;">
                    <li><i class="fas fa-envelope">&nbsp;&nbsp;</i><a href="/admin/messages">Check Your Messages</a></li>
                    <li><i class="fas fa-file-contract">&nbsp;&nbsp;</i><a href="/admin/pages/about-us">Manage Your Pages</a></li>
                </ul>
            </div>
            <!-- /.col -->
        </div>
      </div>
    </div>
</div>

<div class="col-md-6">
    <!-- Widget: user widget style 1 -->
    <div class="card card-widget widget-user">
      <!-- Add the bg color to the header using any of the bg-* classes -->
      <div class="widget-user-header bg-primary">
        <h3 class="widget-user-username">Ritik Chourasiya</h3>
        <h5 class="widget-user-desc">Founder & CEO</h5>
      </div>
      <div class="widget-user-image">
        <img class="img-circle elevation-2" src="/admin/dist/img/avatar5.png" alt="User Avatar">
      </div>
      <div class="card-footer">
        <div class="row">
          <div class="col-sm-4 border-right">
            <div class="description-block">
              <h5 class="description-header">{{App\Models\Post::count()}}</h5>
              <span class="description-text">Posts</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-sm-4 border-right">
            <div class="description-block">
              <h5 class="description-header">{{App\Models\Category::count()}}</h5>
              <span class="description-text">Categories</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-sm-4">
            <div class="description-block">
              <h5 class="description-header">35</h5>
              <span class="description-text">Comments</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
    </div>
    <!-- /.widget-user -->
</div>
<!-- /.col -->

<div class="col-md-6 mb-5">
    <div class="position-relative">
      <img src="/admin/dist/img/photo1.png" alt="Photo 1" class="img-fluid" style="height: 260px; width:100%;">
      <div class="ribbon-wrapper ribbon-lg">
        <div class="ribbon bg-success text-lg">
          Bloggle
        </div>
      </div>
    </div>
</div>


    


@endsection 