@extends('admin.layout')

@section('site_title', 'Edit Post')

@section('back_page')
<li class="breadcrumb-item"><a href="/admin/post">Post</a></li>
@endsection

@section('container')

<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Post...</h3>
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
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="name">Title</label>
                <input name="title" type="text" class="form-control" id="name" placeholder="Enter Blog Title" value="{{$data->title}}">
                <div class="text-danger">@error('title') {{$message}} @enderror</div>
            </div>
            <div class="form-group">
                <label for="description">Post Description</label>
                <input name="meta_desc" type="text" class="form-control" id="description" placeholder="Enter Description" value="{{$data->meta_desc}}">
                <div class="text-danger">@error('meta_desc') {{$message}} @enderror</div>
            </div>
            <div class="form-group">
                <label for="permalink">Permalink</label>
                <input name="permalink" type="text" class="form-control" id="permalink" placeholder="Enter Permalink" value="{{$data->permalink}}">
                <div class="text-danger">@error('permalink') {{$message}} @enderror</div>     
            </div>
            <div class="form-group">
                <label for="exampleInputEmail3">Category</label>
                <select name="category_id" id="cars" class="form-control">
                    @foreach ($cat as $item)
                        @if ($data->category_id == $item->id)
                        <option selected value="{{$item->id}}">
                        @else
                        <option value="{{$item->id}}">
                        @endif
                        {{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="post_body">Post Body</label>
                <textarea name="body" id="post_body" cols="30" rows="10" class="form-control">{{$data->body}}</textarea>
                <div class="text-danger">@error('body') {{$message}} @enderror</div>     
            </div>
            
            <div class="form-group">
                <label for="exampleInputFile">Thumbnail Image</label><br>
               <img src="/images/post/{{$data->thumb}}" alt="" class="" style="align-item:center; width:50%; height:auto;">
            </div>

            <div class="form-group">
                <label for="exampleInputFile">New Thumbnail Image</label>
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