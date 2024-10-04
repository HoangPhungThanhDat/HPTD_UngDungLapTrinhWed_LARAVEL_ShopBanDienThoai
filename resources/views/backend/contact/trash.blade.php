@extends('layouts.admin')
@section('title','Thùng Rác Liên Hệ')
@section('maincontent')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Thùng Rác Danh Mục</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Blank Page</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-12 text-right">
            <a href="{{route('admin.contact.index')}}" class="btn btn-sm btn-info">  
                <i class="fa fa-arrow-left" aria-hidden="true"></i> Về Danh Mục
              </a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th class="text-center" style="width:30px;">#</th>
                    <th>Họ tên</th>
                    <th>Điện thoại</th>
                    <th>Email</th>
                    <th>Tiêu đề</th>
                    <th class="text-center" style="width:200px;">Chức năng</th>
                    <th class="text-center" style="width:30px;">ID</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($list as $row)
              <tr>
                <td  class="text-center">
                  <input type="checkbox" name="checkId[]" id="checkId" value="1"></td>
                
                <td>{{$row->name}}</td>
                <td>{{$row->phone}}</td>
                <td>{{$row->email}}</td>
                <td>{{$row->title}}</td>
                <td  class="text-center">
                  @php
                      $args=['id'=>$row->id];
                  @endphp

                  <a href="{{route('admin.contact.show',$args)}}" class="btn btn-sm btn-info"> 
                    <i class="fa fa-eye " aria-hidden="true"></i>
                  </a>
                  <a href="{{ route('admin.contact.restore', $args ) }}" class="btn btn-sm btn-primary">
                    <i  class="fa fa-undo" aria-hidden="true"></i> 
                </a>
                <form action="{{ route('admin.contact.destroy', $args ) }}" method="post">
                  @csrf
                  @method("delete")
                  <button class="btn btn-sm btn-danger d-inline" type="submit">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                  </button>
                  </form>
                  
                </td>
                <td  class="text-center">
                  {{$row->id}}
                </td>
              </tr>
                  
              @endforeach
              
            </tbody>
          </table>
      </div>
    </div>
  </section>
    
@endsection