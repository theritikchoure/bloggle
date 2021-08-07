@extends('admin.layout')

@section('site_title', 'About Us Page')

@section('page_menu', 'menu-open')
@section('page_select', 'active')
@section('about_index_select', 'active')

@section('container')
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">About Us Page</h3>
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
                        <label for="description">Heading</label>
                        <input name="heading" type="text" class="form-control" id="description" placeholder="Enter Logo Text" value="{{$data->heading}}">
                        <div class="text-danger">@error('logo_txt') {{$message}} @enderror</div>
                    </div>
                    <div class="form-group">
                        <label for="permalink">Description</label>
                        <input name="meta_desc" type="text" class="form-control" id="permalink" placeholder="Enter Permalink" value="{{$data->meta_desc}}">
                        <div class="text-danger">@error('meta_desc') {{$message}} @enderror</div>     
                    </div>
                    <div class="form-group">
                      <label for="description">New Image</label><br>
                      <img src="/images/aboutus/{{$data->head_img}}" alt="" style="align-item:center; width:50%; height:auto;">
                    </div>
                    <div class="form-group">
                      <label for="description">New Image</label>
                      <input type="file" name="head_img" id="head_img" class="form-control">
                      <div class="text-danger">@error('blog_name') {{$message}} @enderror</div>
                    </div>
                    <div class="form-group">
                      <label for="description">Text Content</label>
                      <input type="text" name="text" id="text" class="form-control" value="{{$data->text}}">
                      <div class="text-danger">@error('blog_name') {{$message}} @enderror</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Card-1 Heading</label>
                            <input type="text" name="c_one_head" class="form-control" placeholder="Enter Blog Limit ..." value="{{$data->c_one_head}}">
                          </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                              <label>Card-1 Text</label>
                              <input type="text" name="c_one_text" class="form-control" placeholder="Enter Slider Limit ..." value="{{$data->c_one_text}}">
                            </div>
                          </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Card-2 Heading</label>
                          <input type="text" name="c_two_head" class="form-control" placeholder="Enter Blog Limit ..." value="{{$data->c_two_head}}">
                        </div>
                      </div>
                      <div class="col-sm-6">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Card-2 Text</label>
                            <input type="text" name="c_two_text" class="form-control" placeholder="Enter Slider Limit ..." value="{{$data->c_two_text}}">
                          </div>
                        </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Card-3 Heading</label>
                        <input type="text" name="c_three_head" class="form-control" placeholder="Enter Blog Limit ..." value="{{$data->c_three_head}}">
                      </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Card-3 Text</label>
                          <input type="text" name="c_three_text" class="form-control" placeholder="Enter Slider Limit ..." value="{{$data->c_three_text}}">
                        </div>
                      </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Card-4 Heading</label>
                      <input type="text" name="c_four_head" class="form-control" placeholder="Enter Blog Limit ..." value="{{$data->c_four_head}}">
                    </div>
                  </div>
                  <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Card-4 Text</label>
                        <input type="text" name="c_four_text" class="form-control" placeholder="Enter Slider Limit ..." value="{{$data->c_four_text}}">
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