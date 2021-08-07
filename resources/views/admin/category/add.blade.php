@extends('admin.layout')

@section('site_title', 'Add Category')

@section('category_menu', 'menu-open')
@section('category_select', 'active')
@section('category_add_select', 'active')

@section('back_page')
<li class="breadcrumb-item"><a href="/admin/category">Category</a></li>
@endsection

@section('container')
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Add Category...</h3>
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
                    <label for="name">Category Name</label>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Enter Category" value="{{ old('name') }}">
                    <div class="text-danger">@error('name') {{$message}} @enderror</div>
                </div>
                <div class="form-group">
                    <label for="description">Category Description</label>
                    <input name="description" type="text" class="form-control" id="description" placeholder="Enter Description" value="{{ old('description') }}">
                    <div class="text-danger">@error('description') {{$message}} @enderror</div>
                </div>
                <div class="form-group">
                    <label for="description">Category Slug</label>
                    <input name="slug" type="text" class="form-control" id="description" placeholder="Enter Slug" value="{{ old('slug') }}">
                    <div class="text-danger">@error('slug') {{$message}} @enderror</div>     
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Category Image</label>
                    <input name="img" type="file" class="form-control" id="img">
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