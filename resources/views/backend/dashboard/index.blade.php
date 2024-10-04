@extends('layouts.admin')
@section('title', 'Quản lý danh mục ')
@section('maincontent')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Quản lý danh muc</h1>
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
            <a href="" class="btn btn-sm btn-success">
                <i class="fa fa-flus" aria-hidden="true"></i>
                Thêm
            </a>
            
            <a href="" class="btn btn-sm btn-danger">
                <i class="fa fa-trash" aria-hidden="true"></i>
                Thùng rác
            </a>

          </div>
        </div>
      </div>
      <div class="card-body">
       <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th style="width: 30px" class="text-center">#</th>
                <th style="width: 90px"class="text-center">Hình</th>
                <th >Tên sản phẩm</th>
                <th>Danh muc</th>
                <th>Thương hiêu</th>
                <th style="width: 180px"class="text-center">Chức năng</th>
                <th style="width: 30px" class="text-center">ID</th>


            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center">
                    <input type="checkbox"> 
                </td>
                <td class="text-center">
                    <img src="images/products/hinh.png" class="img-fluid" alt="hinh.png">
                </td>
                <td class="text-center">3</td>
                <td class="text-center">4</td>
                <td class="text-center">5</td>
                <td class="text-center">
                    <a href="" class="btn btn-sm btn-success">
                        <i class="fa fa-toggle-on" aria-hidden="true"></i>
                    </a>
                    <a href="" class="btn btn-sm btn-info">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </a>
                    <a href="" class="btn btn-sm btn-primary">
                        <i class="fa fa-edit" aria-hidden="true"></i>
                    </a>
                    <a href="" class="btn btn-sm btn-danger">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </a>

                </td>
                <td class="text-center">6</td>


            </tr>
        </tbody>
            
       </table>
      </div>
    </div>
  </section>
@endsection

