@extends('admin.layout')

@section('site_title', 'Add Post')

@section('post_menu', 'menu-open')
@section('post_select', 'active')
@section('post_add_select', 'active')

@section('back_page')
<li class="breadcrumb-item"><a href="/admin/post">Post</a></li>
@endsection

@section('container')
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Add Post...</h3>
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
                        <label for="name">Title</label>
                        <input name="title" type="text" class="form-control" id="name" placeholder="Enter Blog Title" value="{{ old('name') }}">
                        <div class="text-danger">@error('title') {{$message}} @enderror</div>
                    </div>
                    <div class="form-group">
                        <label for="description">Post Description</label>
                        <input name="meta_desc" type="text" class="form-control" id="description" placeholder="Enter Description" value="{{ old('description') }}">
                        <div class="text-danger">@error('meta_desc') {{$message}} @enderror</div>
                    </div>
                    <div class="form-group">
                        <label for="permalink">Permalink</label>
                        <input name="permalink" type="text" class="form-control" id="permalink" placeholder="Enter Permalink" value="{{ old('permalink') }}">
                        <div class="text-danger">@error('permalink') {{$message}} @enderror</div>     
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Category</label>
                        <select name="category_id" id="category_id" class="form-control">
                            @foreach ($cat as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="post_body">Post Body</label>
                        <textarea name="body" id="post_body" cols="30" rows="10" class="form-control"></textarea>
                        <div class="text-danger">@error('body') {{$message}} @enderror</div>     
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputFile">Thumbnail Image</label>
                        <input type="file" name="img" id="img" class="form-control">
                        <div class="text-danger">@error('img') {{$message}} @enderror</div>
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