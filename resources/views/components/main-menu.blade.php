
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">      
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="{{ route('site.home') }}"><strong><i class="fa-solid fa-house"></i> Trang Chủ</strong></a>
                </li>
                <li class="nav-item">
                    @php
                        $count = count(session('carts', []));
                    @endphp
                    <a class="nav-link " aria-current="page" href="{{ route('site.cart.index') }}"><i class="fa-sharp fa-solid fa-cart-shopping"></i><strong> Giỏ hàng</strong>(<span id="showqty">{{ $count }}</span>)</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <strong> Chính sách</strong>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                        <li><a class="dropdown-item" href="{{ route('site.post.index') }}"><strong>Chính sách đổi trả</strong></a></li>
                        <li><a class="dropdown-item" href="{{ route('site.post.topic', ['slug' => 'tin-tuc']) }}"><strong>Chính sách bảo hành</strong></a></li>
                        <li><a class="dropdown-item" href="{{ route('site.lienhe') }}"><strong>Liên hệ</strong></a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <strong> Bài viết</strong>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                        <li><a class="dropdown-item" href="{{ route('site.post.index') }}"><strong>Tất cả bài viết</strong></a></li>
                        <li><a class="dropdown-item" href="{{ route('site.post.topic', ['slug' => 'tin-tuc']) }}"><strong>Tin Tức</strong></a></li>
                        <li><a class="dropdown-item" href="{{ route('site.post.topic', ['slug' => 'dich-vu']) }}"><strong>Dịch vụ</strong></a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <strong> Sản Phẩm</strong>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown3">
                        <li><a class="dropdown-item" href="{{ route('site.sanpham') }}"><strong>Tất cả sản phẩm</strong></a></li>
                        <li><a class="dropdown-item" href="{{ route('site.product.category', ['slug' => 'dien-thoai-iphone']) }}"><strong>Iphone</strong></a></li>
                        <li><a class="dropdown-item" href="{{ route('site.product.category', ['slug' => 'dien-thoai-samsung']) }}"><strong>SamSung</strong></a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <strong>Brand</strong>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown3">
                        <li><a class="dropdown-item" href="{{ route('site.product.brand', ['slug' => 'han-quoc']) }}"><strong>Hàn Quốc</strong></a></li>
                        <li><a class="dropdown-item" href="{{ route('site.product.brand', ['slug' => 'viet-nam']) }}"><strong>Việt Nam</strong></a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="width: 326px;">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            @if (Auth::check())
                @php
                    $user = Auth::user();
                @endphp
                <span class="navbar-text">
                    <strong>{{ $user->name }} __<i class="fa-solid fa-user"></i></strong>
                    <a class="nav-link d-inline" href="{{ route('website.logout') }}">Đăng Xuất</a>
                </span>
            @else
                <a class="nav-link" aria-current="page" href="{{ route('website.getlogin') }}"><i class="fa-solid fa-user"></i><strong> Đăng Nhập</strong></a>
            @endif
        </div>
    </div>
</nav>