@extends('admin.layout')

@section('site_title', 'Categories')

@section('category_menu', 'menu-open')
@section('category_select', 'active')
@section('category_index_select', 'active')

@section('container')
<div class="col-12">
    <div class="card">
      @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible m-3">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <p><i class="icon fas fa-check"></i> {{session('success')}}</p>
            </div>      
      @endif
      <div class="card-header">
        <h3 class="card-title">Category List</h3>

        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

            <div class="input-group-append">
              <button type="submit" class="btn btn-default">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Description</th>
              <th>Slug</th>
              <th>Image</th>
              <th>Status</th>
              <th>View</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($cat as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->slug}}</td>
                    <td>
                        <img src="/images/category/{{$item->img}}" alt="" class="img-rounded  elevation-1" style="height: auto; width:4rem; ">
                    </td>
                    <td>
                        @if ($item->status == '1')
                        <a href="/admin/category/status/{{$item->id}}/0">
                            <button type="button" class="btn btn-block btn-outline-success btn-sm">Activated</button>
                        </a>
                        @else
                        <a href="/admin/category/status/{{$item->id}}/1">
                            <button type="button" class="btn btn-block btn-outline-primary btn-sm">Deactivated</button>
                        </a>
                        @endif
                    </td>
                    <td>
                        <button type="button" class="btn btn-block btn-outline-secondary btn-sm">View</button>
                    </td>
                    <td>
                      <a href="/admin/category/edit/{{$item->id}}">
                        <button type="button" class="btn btn-block btn-outline-warning btn-sm">Edit</button>
                      </a>
                    </td>
                    <td>
                      <a href="/admin/category/delete/{{$item->id}}">
                        <button type="button" class="btn btn-block btn-outline-danger btn-sm">Delete</button>
                      </a>
                    </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
@endsection