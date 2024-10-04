@extends('layouts.site')
@section('content')
<div class="container mt-5">
    <div class="row">
        <!-- Hình ảnh-->
        <div class="col-md-6">
            <img src="{{asset('images/posts/'.$post->image)}}" alt="{{$post->image}}" >
        </div>
        <!-- Chi tiết bài viết -->
        <div class="col-md-6">
            <h1>{{ $post->title}}</h1>       
            <h3 class="fs-6"> {{$post->description}}</h3>     
        </div>        
            <p>Đánh giá :⭐️⭐️⭐️⭐️☆ (4.5/5) </p>
            <p>{!! $post->detail!!} </p>         
        </div>
    </div>
    {{-- bai viet lien quan --}}
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
                            @foreach ($list_post as $postitem)
                                <x-post-card :$postitem/>                         
                            @endforeach                     
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0"></div>                
              </div>
        </div>
    </div>
@endsection
@section('title', ' Chi Tiết Bài Viết')
@section('header')
@endsection
@section('footer')
@endsection