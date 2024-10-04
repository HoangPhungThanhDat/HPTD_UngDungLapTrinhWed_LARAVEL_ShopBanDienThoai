
<div class="col-md-3 col-sm-6 mb-4"> <!-- Đảm bảo mỗi sản phẩm nằm trong một cột -->
    <div class="product-card">
        <div class="installment-badge">Trả góp 0%</div>
        <a href="{{route('site.product.detail',['slug'=>$product->slug])}}">
        <img src="{{asset('images/products/'.$product->image)}}" alt="{{$product->image}}" class="product-image">
        </a>
        <h3>{{$product->name}}</h3>
        <div class="price-container">         
            @if ($product->pricesale==0 && $product->pricesale<$product->price)
            <h3 class="price">{{number_format($product->price)}}đ</h3>              
            @else
            <h3 class="price">{{number_format($product->pricesale)}}đ </h3>
            <del>{{number_format($product->price)}}đ</del>       
            @endif
        </div>
        <div class="additional-discounts">
            Smember giảm thêm đến <strong>300.000₫</strong><br>
            S-Student giảm thêm đến <strong>600.000₫</strong>
        </div>
        <div class="free-shipping">
            Không phí chuyển đổi khi trả góp 0% qua thẻ tín dụng kỳ hạn 3-6...
        </div>
        <div class="rating-container">
            <div class="rating-stars">
                ⭐⭐⭐⭐⭐
            </div>
            <div class="favorite">
                <span>Yêu thích</span>
                <i class="fa-regular fa-heart"></i>
            </div>
        </div>
        
    </div>
</div> <!-- Kết thúc cột -->

<style>
    .container {
        max-width: 1300px; /* Đặt kích thước tối đa cho container */
    }

    .row {
        margin: 0; /* Loại bỏ margin mặc định của hàng */
    }

    .col-md-3 {
        padding: 0 15px; /* Thêm padding bên trái và phải của cột */
    }

    .product-card {
        position: relative;
        border: 1px solid #ddd;
        padding: 15px;
        border-radius: 20px;
        background-color: #fff;
        font-family: Arial, sans-serif;
        height: 100%; /* Đảm bảo sản phẩm chiếm toàn bộ chiều cao của cột */
        transition: transform 0.3s, box-shadow 0.3s; /* Thêm hiệu ứng chuyển tiếp */
    }

    .product-card:hover {
        transform: scale(1.05); /* Phóng to sản phẩm một chút khi hover */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Thêm bóng đổ khi hover */
    }
    
    .installment-badge {
        position: absolute;
        top: 10px;
        right: 10px;
        background-color: #f0f8ff;
        color: #007bff;
        border: 1px solid #007bff;
        padding: 5px 10px;
        border-radius: 15px;
        font-size: 14px;
        font-weight: bold;
    }
    
    .discount-badge {
        position: absolute;
        top: 10px;
        left: 10px;
        background-color: #ff4d4d;
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 14px;
        font-weight: bold;
    }
    
    .product-image {
        width: 100%;
        border-radius: 10px;
        margin-bottom: 10px;
        transition: opacity 0.3s; /* Thêm hiệu ứng chuyển tiếp cho ảnh */
    }
    
    .product-card:hover .product-image {
        opacity: 0.8; /* Giảm độ sáng của ảnh khi hover */
    }
    
    h3 {
        font-size: 16px;
        margin: 10px 0;
    }
    
    .price-container {
        margin: 10px 0;
    }
    
    .new-price {
        color: #ff4d4d;
        font-size: 20px;
        font-weight: bold;
    }
    
    .old-price {
        color: #888;
        text-decoration: line-through;
        font-size: 16px;
        margin-left: 10px;
    }
    
    .additional-discounts {
        color: #ff4d4d;
        font-size: 14px;
        margin: 10px 0;
    }
    
    .free-shipping {
        background-color: #f9f9f9;
        padding: 10px;
        border-radius: 5px;
        font-size: 14px;
        margin: 10px 0;
    }
    
    .rating-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 10px;
    }
    
    .rating-stars {
        color: #ffcc00;
        font-size: 18px;
    }
    
    .favorite {
        display: flex;
        align-items: center;
        font-size: 14px;
    }
    
    .favorite-icon {
        color: #ff4d4d;
        margin-left: 5px;
        font-size: 18px;
    }

    /* Khoảng cách giữa các cột sản phẩm */
    .col-md-3 {
        margin-bottom: 30px; /* Khoảng cách giữa các hàng sản phẩm */
    }
</style>
