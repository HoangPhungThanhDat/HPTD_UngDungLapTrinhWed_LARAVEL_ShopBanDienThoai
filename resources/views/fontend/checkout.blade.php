@extends('layouts.site')
@section('content')
<div class="container" >
    <h1 class="col-12 text-center" style="margin-top:20px"> Thanh Toán</h1>
   <div class="row">
        <div class="col-md-9">          
                <table class="table table-bordered">       
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th style="width:90px">Hình</th>
                            <th> Tên Sản Phẩm</th> 
                            <th> Số Lượng</th>
                            <th> Giá</th>
                            <th>Thành Tiền</th>                       
                        </tr>
                    </thead>         
                    <tbody>
                        @php
                            $totalMoney=0;
                        @endphp
            
                        @foreach($list_cart as $row_cart)
                        <tr>
                            <td>{{ $row_cart['id']}}</td>
                            <td><img class="img-fluid" src="{{asset('images/products/'.$row_cart['image'])}}" alt="{{$row_cart['image']}}"></td>
                            <td>{{ $row_cart['name']}}</td>
                            <td>
                                {{$row_cart['qty']}}
                            </td>
                            <td>{{number_format( $row_cart['price'])}}</td>
                            <td>{{ number_format( $row_cart['price']*$row_cart['qty'])}}</td>                          
                        </tr>
                    @php
                        $totalMoney+=$row_cart['price']*$row_cart['qty'];
                    @endphp          
                        @endforeach                   
                    </tbody>     
                </table>    
        </div>
        <div class="col-md-3">
            <strong>Tổng tiền:{{number_format(  $totalMoney)}} </strong>                                    
        </div>
   </div>
   @if(!Auth::check())
        <div class="row">
            <div class="col-12">
                <h3>Hãy đăng nhập để thanh toán</h3>
                <a href="{{ route('website.getlogin') }}">Đăng Nhập</a>
            </div>
            </div>                
    @else
       <form action="{{ route('site.cart.docheckout') }}" method="post">
        @csrf
        <div class="row my-5">
            @php
                $user=Auth::user();
            @endphp
            <div class="col-md-6">
                <div class="mb-3">
                    <label>Họ Tên:</label>
                    <input type="text" name="name" value="{{ $user->name }}"class="form-control">
                </div>
            </div>
                <div class="col-md-6">
                <div class="mb-3">
                    <label> Email:</label>
                    <input type="text" name="email" value="{{ $user->email }}"class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label>Điện thoại:</label>
                    <input type="text" name="phone" value="{{ $user->phone }}"class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label>Địa chỉ</label>
                    <input type="text" name="address" value="{{ $user->address }}"class="form-control">
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-3">
                    <label>Chú ý</label>
                    <textarea name="note" class="form-control"></textarea>                  
                </div>           
            </div>
            <div class="col-md-12 text-end">
                <button class="btn btn-success"type="submit">ĐẶT MUA</button>             
            </div>          
        </div>
       </form>
   @endif
</div>
@endsection
@section('title', 'Giỏ Hàng')
@section('header')
@endsection
@section('footer')
@endsection


