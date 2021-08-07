@extends('admin.layout')

@section('site_title', 'Contact Us Page')

@section('page_menu', 'menu-open')
@section('page_select', 'active')
@section('contact_index_select', 'active')

@section('container')
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Contact Us Page</h3>
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
                    <div class="row">
                        <div class="col-sm-4">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control" placeholder="Enter Blog Limit ..." value="{{$data->phone}}">
                          </div>
                        </div>
                        <div class="col-sm-4">
                            <!-- text input -->
                            <div class="form-group">
                              <label>Email</label>
                              <input type="email" name="email" class="form-control" placeholder="Enter Slider Limit ..." value="{{$data->email}}">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <!-- text input -->
                            <div class="form-group">
                              <label>Address</label>
                              <input type="text" name="address" class="form-control" placeholder="Enter Blog Limit ..." value="{{$data->address}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="map">Map URL</label>
                        <input name="map" type="text" class="form-control" id="permalink" placeholder="Enter Map URL" value="{{$data->map}}">
                        <div class="text-danger">@error('meta_desc') {{$message}} @enderror</div>     
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