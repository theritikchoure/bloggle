@extends('admin.layout')

@section('site_title', 'Edit Category')

@section('back_page')
<li class="breadcrumb-item"><a href="/admin/category">Category</a></li>
@endsection

@section('container')

<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Category...</h3>
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
                <label for="name">Category Name</label>
                <input name="name" type="text" class="form-control" id="name" placeholder="Enter Category" value="{{ $data->name }}">
                <div class="text-danger">@error('name') {{$message}} @enderror</div>
            </div>
            <div class="form-group">
                <label for="description">Category Description</label>
                <input name="description" type="text" class="form-control" id="description" placeholder="Enter Description" value="{{ $data->description }}">
                <div class="text-danger">@error('description') {{$message}} @enderror</div>
            </div>
            <div class="form-group">
                <label for="description">Category Slug</label>
                <input name="slug" type="text" class="form-control" id="description" placeholder="Enter Slug" value="{{ $data->slug }}">
                <div class="text-danger">@error('slug') {{$message}} @enderror</div>     
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Category Image</label><br>
                <img src="/images/category/{{$data->img}}" alt="" class="image-rounded elevation-1" style="width: 15rem; height:auto;">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">New Category Image</label>
                <input name="img" type="file" class="form-control" id="img">
                <div class="text-danger">@error('img') {{$message}} @enderror</div>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
        <button type="submit" class="btn btn-primary">Edit</button>
        </div>
    </form>
    </div>
    <!-- /.card -->
</div>

@endsection