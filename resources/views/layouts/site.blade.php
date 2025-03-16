<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.2-web/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layoutsize.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/menuDoc.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
    <script src="{{ asset('public/jquery/jquery-3.7.1.min.js') }}"></script>
    <title>@yield('title')</title>
    @yield('header')
</head>
<body>
    <x-slider/>
    
    <!-- Hiển thị sản phẩm -->
    <main>
        @yield('content')
    </main>

    <footer class="section_footer bg-dark text-white py-2 " style="margin-top:20px; width: 1600px; margin-left: -150px;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4>THÔNG TIN</h4>
                    <p>Apple Hoàng Đạt (H P T D)</p>
                    <p>Hệ thống bán lẻ smartphone, máy tính bảng, MacBook, thiết bị công nghệ chính hãng với giá tốt, có trả góp 0%, giao hàng nhanh miễn phí.</p>
                    <p>Địa chỉ: Quận 9</p>
                    <p>Điện thoại: 1900 6750</p>
                    <p>Email: dat147714@gmail.com</p>
                    <p>Follower Chúng Tôi:</p>
                    <ul>
                        <li style="--clr: #ff0050;"><a href="#"><i class="fa-brands fa-tiktok"></i></a></li>
                        <li style="--clr: #55acee;"><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li style="--clr: #0a66c2;"><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                        <li style="--clr: #333333;"><a href="#"><i class="fa-brands fa-github"></i></a></li>
                    </ul>
                </div>
                <div class="col-md">
                    <h4>CHÍNH SÁCH</h4>
                    <p>Chính sách thanh toán</p>
                    <p>Chính sách bảo hành và bảo trì</p>
                    <p>Chính sách vận chuyển và giao nhận</p>
                    <p>Bảo mật thông tin cá nhân</p>
                </div>
                <div class="col-md">
                    <h4>HỖ TRỢ</h4>
                    <p>Sản phẩm yêu thích</p>
                    <p>So sánh sản phẩm</p>
                    <p>Hệ thống cửa hàng</p>
                    <p>Tra cứu bảo hành</p>
                    <p>Đăng nhập tài khoản</p>
                    <p>Liên hệ</p>
                </div>
                <div class="col-md">
                    <h4>MẠNG XÃ HỘI</h4>
                    <p>MUA ONLINE (08:00 - 21:00 mỗi ngày)</p>
                    <p>19006750</p>
                    <p>Tất cả các ngày trong tuần (Trừ tết Âm Lịch)</p>
                    <p>GÓP Ý & KHIẾU NẠI (08:30 - 20:30)</p>
                    <p>19006750</p>
                    <p>Tất cả các ngày trong tuần (Trừ tết Âm Lịch)</p>
                </div>
            </div>
            <hr class="m-0 p=0">
            <div class="row py-3 text-center">
                <div class="col-12">
                    Bản quyền thuộc về Apple Hoàng Đạt.
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            AOS.init({
                duration: 1200, 
                once: true    
            });
        });
    </script>
    <script src="{{ asset('js/layoutside.js') }}"></script>
    @yield('footer')
</body>
</html>
<style>
     @import url('https://use.fontawesome.com/releases/v6.5.1/css/all.css');

body.footer ul {
    height: 100vh;
    margin: 0;
    display: grid;
    place-items: center;
}

footer ul li a {
    text-decoration: none;
}

footer ul {
    list-style: none;
    display: flex;
    gap: 20px;
}

footer ul li {
    width: 40px;
    height: 40px;
    color: var(--clr);
    line-height: 60px;
    border-radius: 12px;
    position: relative;
    transition: all .5s;
    box-shadow: 0px 8px 16px -6px, 0px 0px 16px -6px;
}

footer ul li a {
    width: 100%;
    height: 100%;
    font-size: 1.5em;
    background: transparent;
    color: var(--clr);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: .5s;
    animation: icon-out .5s forwards;
    animation-timing-function: cubic-bezier(0.5, -0.6, 1, 1);
}

footer ul li:before {
    content: "";
    width: 110px;
    height: 110px;
    background: var(--clr);
    display: block;
    position: absolute;
    transform: rotate(-45deg) translate(-110%, -23px);
    z-index: -1;
    animation: back-out .5s forwards;
    animation-timing-function: cubic-bezier(0.5, -0.6, 1, 1);
}

footer ul li {
    overflow: hidden;
}

footer li:hover a {
    animation: icon-in .5s forwards;
    animation-timing-function: cubic-bezier(0, 0, 0.4, 1.6);
}

footer li:hover:before {
    animation: back-in .5s forwards;
    animation-timing-function: cubic-bezier(0, 0, 0.4, 1.6);
}

@keyframes back-in {
    0% {
        transform: rotate(-45deg) translate(-110%, -23px);
    }
    80% {
        transform: rotate(-45deg) translate(5%, -23px);
    }
    100% {
        transform: rotate(-45deg) translate(0%, -23px);
    }
}

@keyframes back-out {
    0% {
        transform: rotate(-45deg) translate(0%, -23px);
    }
    20% {
        transform: rotate(-45deg) translate(5%, -23px);
    }
    100% {
        transform: rotate(-45deg) translate(-120%, -23px);
    }
}

@keyframes icon-in {
    0% {
        font-size: 1.5em;
    }
    80% {
        color: #fff;
        font-size: 1.75em;
    }
    100% {
        color: #fff;
        font-size: 1.6em;
    }
}

@keyframes icon-out {
    0% {
        color: #fff;
        font-size: 1.6em;
    }
    20% {
        color: #fff;
        font-size: 1.75em;
    }
    100% {
        font-size: 1.5em;
    }
}


</style>