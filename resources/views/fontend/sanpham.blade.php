@extends('layouts.site')
@section('content')
<h1 class="col-12 text-center" style="margin-top:20px"> Tất Cả Sản Phẩm</h1>
<div class="container mt-5">
    <div class="row">          
        @foreach ($list_product as $productitem)
            <x-product-card :$productitem/>                  
        @endforeach           
    </div>
</div>
    <div class="col-12 d-flex justify-content-center">
        {{$list_product->links()}}
    </div>
    </div>
</div>
@endsection
@section('title', 'Sản phẩm')
@section('header')
@endsection
@section('footer')
@endsection 