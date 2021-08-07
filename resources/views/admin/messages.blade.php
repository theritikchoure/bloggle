@extends('admin.layout')

@section('site_title', 'Messages')

@section('message_select', 'active')

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
        <h3 class="card-title">Messages</h3>

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
        <table class="table table-hover table-hover">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>email</th>
              <th>Phone</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($msg as $item)
                <tr id="{{$item->id}}" data-widget="expandable-table" aria-expanded="false">
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->phone}}</td>
                    <td>
                      <a href="/admin/messages/delete/{{$item->id}}">
                        <button type="button" class="btn btn-block btn-outline-danger btn-sm">Delete</button>
                      </a>
                    </td>
                </tr>
                <tr class="expandable-body">
                  <td colspan="5">
                    <p>
                      <b>Message - </b>{{$item->message}}
                    </p>
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