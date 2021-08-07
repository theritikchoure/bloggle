@extends('admin.layout')

@section('site_title', 'Settings')

@section('setting_select', 'active')

@section('container')
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Site Settings</h3>
            </div>
            <!-- /.card-header -->
            @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible m-3">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <p><i class="icon fas fa-check"></i> {{session('success')}}</p>
                </div>      
            @endif
            <!-- form start -->
            <form method="post" action="" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="description">Logo Text</label>
                        <input name="logo_txt" type="text" class="form-control" id="description" placeholder="Enter Logo Text" value="{{$data->logo_txt}}">
                        <div class="text-danger">@error('logo_txt') {{$message}} @enderror</div>
                    </div>
                    <div class="form-group">
                        <label for="description">Blog Name</label>
                        <input name="blog_name" type="text" class="form-control" id="description" placeholder="Enter Blog Name" value="{{$data->blog_name}}">
                        <div class="text-danger">@error('blog_name') {{$message}} @enderror</div>
                    </div>
                    <div class="form-group">
                        <label for="permalink">Blog Description</label>
                        <input name="meta_desc" type="text" class="form-control" id="permalink" placeholder="Enter Permalink" value="{{$data->meta_desc}}">
                        <div class="text-danger">@error('meta_desc') {{$message}} @enderror</div>     
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Home Page Blog Limit</label>
                            <input type="text" name="fp_blog_limit" class="form-control" placeholder="Enter Blog Limit ..." value="{{$data->fp_blog_limit}}">
                          </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                              <label>Home Page Slider Limit</label>
                              <input type="text" name="fp_slider_limit" class="form-control" placeholder="Enter Slider Limit ..." value="{{$data->fp_slider_limit}}">
                            </div>
                          </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Recent Post Limit</label>
                            <input type="text" name="rec_post_limit" class="form-control" placeholder="Enter Recent Post Limit ..." value="{{$data->rec_post_limit}}">
                          </div>
                        </div>
                        <div class="col-sm-4">
                            <!-- text input -->
                            <div class="form-group">
                              <label>Popular Post Limit</label>
                              <input type="text" name="pop_post_limit" class="form-control" placeholder="Enter Popular Post Limit..." value="{{$data->pop_post_limit}}">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <!-- text input -->
                            <div class="form-group">
                              <label>Category Limit</label>
                              <input type="text" name="cat_limit" class="form-control" placeholder="Enter Category Limit ..." value="{{$data->cat_limit}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Comment</label>
                            @if ($data->comment == 1)
                                <div class="row">
                                    <div class="col-sm-3">
                                    <div class="icheck-primary d-inline">
                                        <input type="radio" id="radioPrimary1" name="comment" value="1" checked>
                                        <label for="radioPrimary1">Yes
                                        </label>
                                    </div>
                                    </div>
                                    <div class="col-sm-3">
                                    <div class="icheck-primary d-inline">
                                        <input type="radio" id="radioPrimary2" value="0" name="comment">
                                        <label for="radioPrimary2">No
                                        </label>
                                    </div>
                                    </div>
                                </div>
                            @else
                                <div class="row">
                                    <div class="col-sm-3">
                                    <div class="icheck-primary d-inline">
                                        <input type="radio" id="radioPrimary1" name="comment" value="1">
                                        <label for="radioPrimary1">Yes
                                        </label>
                                    </div>
                                    </div>
                                    <div class="col-sm-3">
                                    <div class="icheck-primary d-inline">
                                        <input type="radio" id="radioPrimary2" value="0" name="comment" checked>
                                        <label for="radioPrimary2">No
                                        </label>
                                    </div>
                                    </div>
                                </div>
                            @endif
                          </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                              <label>Comment Auto Approve</label>
                                @if ($data->comment_auto_appr == 1)
                                    <div class="row">
                                        <div class="col-sm-3">
                                        <div class="icheck-primary d-inline">
                                            <input type="radio" id="radioPrimary3" value="1" name="comment_auto_appr" checked>
                                            <label for="radioPrimary3">Yes
                                            </label>
                                        </div>
                                        </div>
                                        <div class="col-sm-3">
                                        <div class="icheck-primary d-inline">
                                            <input type="radio" id="radioPrimary4" value="0" name="comment_auto_appr">
                                            <label for="radioPrimary4">No
                                            </label>
                                        </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="row">
                                        <div class="col-sm-3">
                                        <div class="icheck-primary d-inline">
                                            <input type="radio" id="radioPrimary3" value="1" name="comment_auto_appr" >
                                            <label for="radioPrimary3">Yes
                                            </label>
                                        </div>
                                        </div>
                                        <div class="col-sm-3">
                                        <div class="icheck-primary d-inline">
                                            <input type="radio" id="radioPrimary4" value="0" name="comment_auto_appr" checked>
                                            <label for="radioPrimary4">No
                                            </label>
                                        </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Facebook URL</label>
                            <input type="url" name="fb_url" class="form-control" placeholder="Facebook URL ..." value="{{$data->fb_url}}">
                          </div>
                        </div>
                        <div class="col-sm-4">
                            <!-- text input -->
                            <div class="form-group">
                              <label>Instagram URL</label>
                              <input type="url" name="inst_url" class="form-control" placeholder="Instagram URL ..." value="{{$data->inst_url}}">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <!-- text input -->
                            <div class="form-group">
                              <label>Twitter URL</label>
                              <input type="url" name="twit_url" class="form-control" placeholder="Twitter URL ..." value="{{$data->twit_url}}">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
@endsection