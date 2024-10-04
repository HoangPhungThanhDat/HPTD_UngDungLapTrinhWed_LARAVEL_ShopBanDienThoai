@extends('layouts.site')
@section('content')
<h1 class="col-12 text-center" style="margin-top:20px"> Chi Tiết Sản Phẩm</h1>
<div class="container mt-5">
    <div class="row">
        <!-- Hình ảnh sản phẩm -->
        <div class="col-md-6">
            <img src="{{asset('images/products/'.$product->image)}}" alt="{{$product->image}}" >
        </div>
        <!-- Chi tiết sản phẩm -->
        <div class="col-md-6">
            <h1>{{ $product->name}}</h1>
            <p> Mô Tả</p> 
            <h3 class="fs-6"> {{$product->description}}</h3>         
      @if ($product->pricesale==0 && $product->pricesale<$product->price)
      <h2 class="text-danger">Giá:{{number_format($product->price)}}</h2>   
      @else
        <h2 class="text-danger">Giá:{{number_format($product->pricesale)}} <del>{{number_format($product->price)}}</del></h2>
        <span class="discount">-20%</span>
      @endif 
      <div class="input-group mb-3">
        <input type="number" value="1" min="0" aria-describedby="basic-addon2" id="qty">
        <button class="input-group-text " id ="basic-addon2" onclick="handleAddCart({{$product->id}})">Đặt Hàng</button>
    </div>
        <p>⭐️⭐️⭐️⭐️☆ (4.5/5)</p>
        <p>{!! $product->detail!!} </p> 
    </div>
    </div>
    <div class="row">
        <div class="col-12">
        </div>
    </div>
    {{-- san pham lien quan  --}}
    <div class="row">
        <div class="col-12">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Sản Phẩm Liên Quan</button>
                  <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Bình Luận</button>
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">

                    <div class="container mt-5">
                        <div class="row">
                    @foreach ($list_product as $productitem)
                    <x-product-card :$productitem/>                          
                        @endforeach                     
                    </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0"></div>               
              </div>
        </div>
    </div>
</div>
@endsection
@section('title', ' Chi Tiết Sản Phẩm')
@section('header')
@endsection
@section('footer')
<script>
 function handleAddCart(productid)
 {
    let qty=document.getElementById("qty").value;
   $.ajax({
    url:"{{route('site.cart.addcart')}}",
    type:"GET",
    data:{
        productid:productid,
        qty:qty
    },
    success:function(result,status,xhr)
    {
        document.getElementById("showqty").innerHTML=result;
        alert("Thêm Giỏ Hàng Thành Công");
    },
    error:function(xhr,status,error)
    {
        alert(error);
    }
   })
 }
</script>
@endsection