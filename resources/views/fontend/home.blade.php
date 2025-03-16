@extends('layouts.site')
@section('content')
<!-- hiện thị sản phẩm -->
<div class="banner">
<img src="{{ asset('image\banner1.webp')}}" alt="" style="width: 1520px; margin-top:-20px; margin-left: -120px; "> 
</div>
<div class="main" style="margin-top: 0px;">
    <div class="container-fluid">
        <div class="row">
            <div class="box-title_title bg-light text-center" style="margin-top:10px">
                <h2><img src="{{asset('image\logo.png')  }}" style="height:30px;"><strong>Apple Hoàng Đạt (H P T D)</strong></h2>               
            </div>                 
{{-- Sản phẩm sale --}}
            <x-flash-sale/>
{{-- Sản phẩm mới--}}
            <x-product-new/>
           
            <x-product-category-home/>
            <div class="banner">
                <img src="{{ asset('image\banner26.webp')}}" alt="" style="width: 1250px; margin-top:10px"> 
            </div>
            <x-post-new/>
</nav>

<div class="social-icons">
    <a href="https://zalo.me/your-zalo-id" target="_blank" class="social-icon">
        <img src="../public/image/zalo.webp" alt="Zalo">
    </a>
    <a href="https://m.me/your-facebook-id" target="_blank" class="social-icon">
        <img src="../public/image/iconmess.webp" alt="Messenger">
    </a>
</div>


<!-- CSS CỦA NÚT ZALO VÀ MESS -->
<style>
    /* styles.css */

/* styles.css */

body {
    margin: 0;
    padding: 0;
}

.social-icons {
    position: fixed;
    bottom: 20px;
    right: 20px;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.social-icon {
    display: block;
}

.social-icon img {
    width: 40px; /* Adjust size as needed */
    height: auto;
    display: block;
    border-radius: 50%; /* Optional: round icons */
    transition: opacity 0.3s;
    animation: shake 3s infinite; /* Apply the shake animation */
}

/* Hover effect */
.social-icon img:hover {
    opacity: 0.7; /* Optional: add hover effect */
}

/* Keyframes for shake animation */
@keyframes shake {
    0%, 100% {
        transform: rotate(0deg);
    }
    10%, 30%, 50%, 70%, 90% {
        transform: rotate(-10deg);
    }
    20%, 40%, 60%, 80% {
        transform: rotate(10deg);
    }
}


</style>

    </header>
@endsection
@section('title', 'Trang chủ')
@section('header')
@endsection
@section('footer')
@endsection




