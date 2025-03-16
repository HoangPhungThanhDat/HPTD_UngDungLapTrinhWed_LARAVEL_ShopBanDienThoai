<div class="container mt-5">
    <div class="row">

<div class="highlight-products">
    <div class="header">
        <h1 > Sale Sốc Hôm Nay</h1>
        <div class="countdown">
            <span>Kết thúc sau:</span>
            <div id="countdown-timer">11 : 18 : 31</div>
        </div>
    </div>

    <div class="products-carousel swiper-container">
        <div class="swiper-wrapper">
            <!-- Mỗi sản phẩm là 1 swiper-slide -->
            @foreach($product_flash_sale as $product)
            <div class="swiper-slide product-item">
                <div class="discount-tag">Giảm 34%</div>
                <a href="{{route('site.product.detail',['slug'=>$product->slug])}}">
                <img src="{{asset('images/products/'.$product->image)}}" alt="{{$product->name}}">
                </a>
                <div class="product-info">
                    <h3>{{$product->name}}</h3>
                    @if ($product->pricesale==0 && $product->pricesale<$product->price)
                        <h3 class="price">{{number_format($product->price)}}đ</h3>              
                    @else
                        <h3 class="price">{{number_format($product->pricesale)}}đ </h3>
                    <del>{{number_format($product->price)}}đ</del>       
                    @endif
                    <div class="rating">
                        <span>★★★★★</span>
                    </div>
                    <div class="installment">Trả góp 0%</div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>

</div>
</div>
<!-- Thư viện Swiper -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
    // Thiết lập đồng hồ đếm ngược
    function countdown() {
        var countDownDate = new Date().getTime() + 1000 * 60 * 60 * 24; // Thời gian 1 ngày từ hiện tại

        var x = setInterval(function () {
            var now = new Date().getTime();
            var distance = countDownDate - now;

            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById("countdown-timer").innerHTML = hours + " : " + minutes + " : " + seconds;

            if (distance < 0) {
                clearInterval(x);
                document.getElementById("countdown-timer").innerHTML = "Hết giờ!";
            }
        }, 1000);
    }

    countdown();

    // Cài đặt Swiper
    var swiper = new Swiper('.swiper-container', {
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        slidesPerView: 4,  // Hiển thị 3 sản phẩm cùng lúc
        spaceBetween: 20,  // Khoảng cách giữa các sản phẩm
        loop: true,        // Cho phép lặp vô tận
        autoplay: {
        delay: 2000,  // Thay đổi sản phẩm sau mỗi 5 giây
        disableOnInteraction: false,  // Tự động tiếp tục khi người dùng tương tác
    },
    });
</script>
<style>
    .highlight-products {
        background-color: #ff4a5a;
        padding: 20px;
        border-radius: 10px;
        color: white;
        position: relative;
    }

    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .header h2 {
        display: flex;
        align-items: center;
        font-size: 24px;
    }

    .header img {
        width: 30px;
        margin-right: 10px;
    }

    .countdown {
        font-size: 18px;
    }

    .products-carousel {
        display: flex;
        align-items: center;
    }

    .swiper-container {
        width: 100%;
        padding: 20px 0;
    }

    .swiper-slide {
        background-color: white;
        color: black;
        padding: 10px;
        border-radius: 10px;
        text-align: center;
        width: 200px;
        position: relative; /* Để thẻ giảm giá hiển thị đúng vị trí */
        transition: box-shadow 0.3s ease, transform 0.3s ease; /* Thêm hiệu ứng chuyển tiếp */
    }

    .swiper-slide:hover {
        box-shadow: 0 4px 8px rgba(0,0,0,0.2); /* Thêm bóng khi hover */
        transform: scale(1.05); /* Phóng to sản phẩm khi hover */
    }

    .discount-tag {
        background-color: red;
        color: white;
        padding: 5px;
        border-radius: 5px;
        position: absolute;
        top: 10px;
        left: 10px;
        transition: background-color 0.3s ease, transform 0.3s ease; /* Thêm hiệu ứng chuyển tiếp */
    }

    .discount-tag:hover {
        background-color: darkred; /* Thay đổi màu nền khi hover */
        transform: scale(1.1); /* Phóng to thẻ giảm giá khi hover */
    }

    .product-item img {
        width: 120px; /* Điều chỉnh kích thước hình ảnh nhỏ lại */
        height: auto;
        margin-bottom: 10px;
        transition: transform 0.3s ease, filter 0.3s ease; /* Thêm hiệu ứng chuyển tiếp */
    }

    .product-item img:hover {
        transform: scale(1.05); /* Phóng to hình ảnh khi hover */
        filter: brightness(1.2); /* Tăng độ sáng hình ảnh khi hover */
    }

    .price {
        font-size: 18px;
        color: red;
    }

    .old-price {
        text-decoration: line-through;
        color: gray;
    }

    .rating {
        color: gold;
    }

    .installment {
        color: blue;
    }

    .swiper-button-next,
    .swiper-button-prev {
        color: white;
        font-size: 24px;
        background-color: #ff4a5a;
        padding: 10px;
        border-radius: 50%;
        transition: background-color 0.3s ease, transform 0.3s ease; /* Thêm hiệu ứng chuyển tiếp */
    }

    .swiper-button-next:hover,
    .swiper-button-prev:hover {
        background-color: #ff2a3a; /* Thay đổi màu nền khi hover */
        transform: scale(1.1); /* Phóng to nút khi hover */
    }
</style>
