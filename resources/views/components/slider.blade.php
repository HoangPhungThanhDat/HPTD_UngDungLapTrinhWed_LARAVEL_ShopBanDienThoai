<div class="banner">
    <div class="banner">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{asset('image\logo.png') }}" alt="" width="180" height="36">
            </a>
            
            {{-- <div class="collapse navbar-collapse" id="navbarsupportedcontent">                 
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="trang chu" style="padding-left:10px;padding-right:10px;"><strong><i class="fa-solid fa-house"></i>Trang Chủ</strong></a>
                    </li>
                   
                    <li class="nav-item">

                        <a class="nav-link active" aria-current="page" href="sanphamIphone12.html" style="padding-left:25px;padding-right:25px;"> <i class="fa-sharp fa-solid fa-cart-shopping"></i><strong>Giỏ hàng</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="lien-he" style="padding-left:25px;padding-right:25px;"><strong>Liên Hệ</strong></a>

                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding-left: 20px; padding-right:20px;">
                        <strong> <i class="fa-solid fa-location-dot"></i>Hệ Thống Cửa Hàng</strong></a>
                        <ul class="dropdown-menu" aria-labelledby="navbardropdown">
                            <li><a class="dropdown-item" href="#"><strong>HÀ NỘI</strong></a></li>
                            <li><a class="dropdown-item" href="#"><strong>SÀI GÒN</strong></a></li>
                            <li><a class="dropdown-item" href="#"><strong>DAKLAK</strong></a></li>
                        </ul>
                    </li>
                </ul>                   
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="width:326px ;">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                 <a class="nav-link active" aria-current="page" href="registration.html" style="padding-left:15px;padding-right:15px;"><i class="fa-regular fa-user"></i><strong>Đăng Ký</strong></a>
                  <a class="nav-link active" aria-current="page" href="login.html" style="padding-left:15px;padding-right:15px;"><i class="fa-solid fa-user"></i><strong>Đăng Nhập</strong></a>                  
            </div> --}}
            <x-main-menu/>

        </div>
    </nav>
</div>
<div class="banner">
  <img src="{{ asset('image/slider_1.webp') }}" alt="" style="width: 1520px; margin-top:10px "> 
  <img src="{{ asset('image/banner_top.webp') }}"alt="" style="width: 1520px; margin-top:10px">
</div>
<!-- container -->
<div class="banner">
<div class="banner">
   
</div>
<div class="container-fluid">
    <div class="row">          
        <div class="col-7 bg-white" style="height:400px;">
            <!-- // -->
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                     <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('image\banner23.webp') }}" class="d-block w-100" alt="..." style="width: 732px; height: 370px;">

                </div>
                <div class="carousel-item">
                    <img src="{{ asset('image\banner24.webp') }}" class="d-block w-100" alt="..." style="width: 732px; height: 370px;">

                </div>
                <div class="carousel-item">
                    <img src="{{ asset('image\slide2.jpg') }}" class="d-block w-100" alt="..." style="width: 732px; height: 370px;">

                </div>
                <div class="carousel-item">
                    <img src="{{ asset('image\slide3.jpg') }}" class="d-block w-100" alt="..." style="width: 732px; height: 370px;">
                    
                </div>
                
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
          </button>

            </div>
        </div>
        <div class="col-3 bg-white">
            <!-- 530 -->
            <img src="{{asset('image\qc1.jpg')  }}" style="height:120px; width:620px;">
            <img src="{{asset('image\qc2.jpg')  }}" style="height:120px; width:620px; margin-top:5px;">
            <img src="{{asset('image\qc3.jpg')  }}" style="height:120px; width:620px; margin-top: 5px;">

        </div>
    </div>
</div>