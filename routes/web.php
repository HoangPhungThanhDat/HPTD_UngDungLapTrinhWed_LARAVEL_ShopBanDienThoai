<?php

use Illuminate\Support\Facades\Route;
//controller nguoi dung

use App\Http\Controllers\fontend\HomeController;
use App\Http\Controllers\fontend\SanphamController as sanphamcontroller;
use App\Http\Controllers\fontend\LienheController as lienhecontroller;
use App\Http\Controllers\fontend\CartController;
use App\Http\Controllers\fontend\BaiVietController;
use App\Http\Controllers\AuthController;


// Controller Quan Ly
use App\Http\Controllers\backend\DashboardController;

use App\Http\Controllers\backend\BannerController;
use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\backend\ProductController ;
use App\Http\Controllers\backend\CategoryController ;
use App\Http\Controllers\backend\ContactController;
use App\Http\Controllers\backend\MenuController;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\backend\PostController;
use App\Http\Controllers\backend\TopicController;
use App\Http\Controllers\backend\UserController;




// router site
Route::get('trang chu', [HomeController::class,'index'])->name('site.home');
Route::get('/', [HomeController::class,'index'])->name('site.home');
Route::get('san-pham', [SanPhamController::class,'index'])->name('site.sanpham');
Route::get('danh-muc/{slug}', [SanPhamController::class,'category'])->name('site.product.category');
Route::get('chi tiet-san pham/{slug}', [SanPhamController::class,'detail'])->name('site.product.detail');
Route::get('lien-he', [LienheController::class,'index'])->name('site.lienhe');

Route::get('thuong-hieu/{slug}', [SanPhamController::class,'brand'])->name('site.product.brand');



// cart
Route::get('cart/addcart', [CartController::class,'addcart'])->name('site.cart.addcart');
Route::post('cart/update', [CartController::class,'update'])->name('site.cart.update');
Route::get('cart/delete/{id}', [CartController::class,'delete'])->name('site.cart.delete');
Route::get('thanh-toan', [CartController::class,'checkout'])->name('site.cart.checkout');
Route::post('thong-bao', [CartController::class,'docheckout'])->name('site.cart.docheckout');
Route::get('gio-hang', [CartController::class,'index'])->name('site.cart.index');

// bài viết 


Route::get('bai-viet', [BaivietController::class, 'index'])->name('site.post.index');
Route::get('chu-de-bai-viet/{slug}', [BaivietController::class, 'post_topic'])->name('site.post.topic');
Route::get('chi-tiet-bai-viet/{slug}', [BaivietController::class, 'detail'])->name('site.post.detail');

// đăng nhập
Route::get("dang-nhap", [AuthController::class,"getlogin"])->name('website.getlogin');
Route::post("dang-nhap", [AuthController::class,"dologin"])->name('website.dologin');
// đăng xuất
Route::get("dang-xuat", [AuthController::class,"logout"])->name('website.logout');

//router admin kiem tra dawng nhap
Route::prefix("admin")->middleware("middleauth")->group(function(){
    Route::get("/", [DashboardController::class,'index'])->name('admin.dashbread');


// router admin
// Route::prefix("admin")->group(function(){
//     Route::get('/dashbread', [DashboardController::class,'index'])->name('admin.dashbread.index');

// 1.banner
Route::prefix("banner")->group(function(){
    Route::get('/', [BannerController::class,'index'])->name('admin.banner.index');
    Route::get('trash', [BannerController::class,'trash'])->name('admin.banner.trash');
    Route::get('show/{id}', [BannerController::class,'show'])->name('admin.banner.show');
    Route::get('create', [BannerController::class,'create'])->name('admin.banner.create');
    Route::post('store', [BannerController::class,'store'])->name('admin.banner.store');
    Route::get('edit/{id}', [BannerController::class,'edit'])->name('admin.banner.edit');
    Route::put('update/{id}', [BannerController::class,'update'])->name('admin.banner.update');
    Route::get('status/{id}', [BannerController::class,'status'])->name('admin.banner.status');
    Route::get('delete/{id}', [BannerController::class,'delete'])->name('admin.banner.delete');
    Route::get('restore/{id}', [BannerController::class,'restore'])->name('admin.banner.restore');
    Route::delete('destroy/{id}', [BannerController::class,"destroy"])->name('admin.banner.destroy');
    });
// 2.Brand
Route::prefix("brand")->group(function(){
    Route::get('/', [BrandController::class,'index'])->name('admin.brand.index');
    Route::get('trash', [BrandController::class,'trash'])->name('admin.brand.trash');
    Route::get('show/{id}', [BrandController::class,'show'])->name('admin.brand.show');
    Route::get('create', [BrandController::class,'create'])->name('admin.brand.create');
    Route::post('store', [BrandController::class,'store'])->name('admin.brand.store');
    Route::get('edit/{id}', [BrandController::class,'edit'])->name('admin.brand.edit');
    Route::put('update/{id}', [BrandController::class,'update'])->name('admin.brand.update');
    Route::get('status/{id}', [BrandController::class,'status'])->name('admin.brand.status');
    Route::get('delete/{id}', [BrandController::class,'delete'])->name('admin.brand.delete');
    Route::get('restore/{id}', [BrandController::class,'restore'])->name('admin.brand.restore');
    Route::delete('destroy/{id}', [BrandController::class,'destroy'])->name('admin.brand.destroy');



    });

// 3.category
Route::prefix("category")->group(function(){
    Route::get('/', [CategoryController::class,'index'])->name('admin.category.index');
    Route::get('trash', [CategoryController::class,'trash'])->name('admin.category.trash');
    Route::get('show/{id}', [CategoryController::class,'show'])->name('admin.category.show');
    Route::get('create', [CategoryController::class,'create'])->name('admin.category.create');
    Route::post('store', [CategoryController::class,'store'])->name('admin.category.store');
    Route::get('edit/{id}', [CategoryController::class,'edit'])->name('admin.category.edit');
    Route::put('update/{id}', [CategoryController::class,'update'])->name('admin.category.update');
    Route::get('status/{id}', [CategoryController::class,'status'])->name('admin.category.status');
    Route::get('delete/{id}', [CategoryController::class,'delete'])->name('admin.category.delete');
    Route::get('restore/{id}', [CategoryController::class,'restore'])->name('admin.category.restore');
    Route::delete('destroy/{id}', [CategoryController::class,"destroy"])->name('admin.category.destroy');




    });


// 4.contact
Route::prefix("contact")->group(function(){
    Route::get('/', [ContactController::class,'index'])->name('admin.contact.index');
    Route::get('trash', [ContactController::class,'trash'])->name('admin.contact.trash');
    Route::get('show/{id}', [ContactController::class,'show'])->name('admin.contact.show');
    Route::get('create', [ContactController::class,'create'])->name('admin.contact.create');
    Route::post('store', [ContactController::class,'store'])->name('admin.contact.store');
    Route::get('edit/{id}', [ContactController::class,'edit'])->name('admin.contact.edit');
    Route::put('update/{id}', [ContactController::class,'update'])->name('admin.contact.update');
    Route::get('status/{id}', [ContactController::class,'status'])->name('admin.contact.status');
    Route::get('delete/{id}', [ContactController::class,'delete'])->name('admin.contact.delete');
    Route::get('restore/{id}', [ContactController::class,'restore'])->name('admin.contact.restore');
    Route::delete('destroy/{id}', [ContactController::class,'tempt'])->name('admin.contact.tempt');



    });


// 5.menu
Route::prefix("menu")->group(function(){
    Route::get('/',[MenuController::class,'index'])->name('admin.menu.index');
    Route::get('trash',[MenuController::class,'trash'])->name('admin.menu.trash');
    Route::get('show/{id}',[MenuController::class,'show'])->name('admin.menu.show');
    Route::get('create',[MenuController::class,'create'])->name('admin.menu.create');
    Route::post('store',[MenuController::class,'store'])->name('admin.menu.store');
    Route::get('edit/{id}',[MenuController::class,'edit'])->name('admin.menu.edit');
    Route::put('update/{id}',[MenuController::class,'update'])->name('admin.menu.update');
    Route::get('status/{id}',[MenuController::class,'status'])->name('admin.menu.status');
    Route::get('delete/{id}',[MenuController::class,'delete'])->name('admin.menu.delete');
    Route::get('restore/{id}',[MenuController::class,'restore'])->name('admin.menu.restore');
    Route::delete('destroy/{id}',[MenuController::class,'destroy'])->name('admin.menu.destroy');
});

// 6.order
Route::prefix("order")->group(function(){
    Route::get('/',[OrderController::class,'index'])->name('admin.order.index');
    Route::get('trash',[OrderController::class,'trash'])->name('admin.order.trash');
    Route::get('show/{id}',[OrderController::class,'show'])->name('admin.order.show');
    Route::get('create',[OrderController::class,'create'])->name('admin.order.create');
    Route::post('store',[OrderController::class,'store'])->name('admin.order.store');
    Route::get('edit/{id}',[OrderController::class,'edit'])->name('admin.order.edit');
    Route::put('update/{id}',[OrderController::class,'update'])->name('admin.order.update');
    Route::get('status/{id}',[OrderController::class,'status'])->name('admin.order.status');
    Route::get('delete/{id}',[OrderController::class,'delete'])->name('admin.order.delete');
    Route::get('restore/{id}',[OrderController::class,'restore'])->name('admin.order.restore');
    Route::delete('destroy/{id}',[OrderController::class,'destroy'])->name('admin.order.destroy');
});
// 7.post
Route::prefix("post")->group(function(){
    Route::get('/', [PostController::class,'index'])->name('admin.post.index');
    Route::get('trash', [PostController::class,'trash'])->name('admin.post.trash');
    Route::get('show/{id}', [PostController::class,'show'])->name('admin.post.show');
    Route::get('create', [PostController::class,'create'])->name('admin.post.create');
    Route::post('store', [PostController::class,'store'])->name('admin.post.store');
    Route::get('edit/{id}', [PostController::class,'edit'])->name('admin.post.edit');
    Route::put('update/{id}', [PostController::class,'update'])->name('admin.post.update');
    Route::get('status/{id}', [PostController::class,'status'])->name('admin.post.status');
    Route::get('delete/{id}', [PostController::class,'delete'])->name('admin.post.delete');
    Route::get('restore/{id}', [PostController::class,'restore'])->name('admin.post.restore');
    Route::delete('destroy/{id}', [PostController::class,"destroy"])->name('admin.post.destroy');

    });

// 8.topic
Route::prefix("topic")->group(function(){
    Route::get('/', [TopicController::class,'index'])->name('admin.topic.index');
    Route::get('trash', [TopicController::class,'trash'])->name('admin.topic.trash');
    Route::get('show/{id}', [TopicController::class,'show'])->name('admin.topic.show');
    Route::get('create', [TopicController::class,'create'])->name('admin.topic.create');
    Route::post('store', [TopicController::class,'store'])->name('admin.topic.store');
    Route::get('edit/{id}', [TopicController::class,'edit'])->name('admin.topic.edit');
    Route::put('update/{id}', [TopicController::class,'update'])->name('admin.topic.update');
    Route::get('status/{id}', [TopicController::class,'status'])->name('admin.topic.status');
    Route::get('delete/{id}', [TopicController::class,'delete'])->name('admin.topic.delete');
    Route::get('restore/{id}', [TopicController::class,'restore'])->name('admin.topic.restore');
    Route::delete('destroy/{id}', [TopicController::class,"destroy"])->name('admin.topic.destroy');

    });

// 9.product
    Route::prefix("product")->group(function(){
        Route::get('/', [ProductController::class,'index'])->name('admin.product.index');
        Route::get('trash', [ProductController::class,'trash'])->name('admin.product.trash');
        Route::get('show/{id}', [ProductController::class,'show'])->name('admin.product.show');
        Route::get('create', [ProductController::class,'create'])->name('admin.product.create');
        Route::post('store', [ProductController::class,'store'])->name('admin.product.store');
        Route::get('edit/{id}', [ProductController::class,'edit'])->name('admin.product.edit');
        Route::put('update/{id}', [ProductController::class,'update'])->name('admin.product.update');
        Route::get('status/{id}', [ProductController::class,'status'])->name('admin.product.status');
        Route::get('delete/{id}', [ProductController::class,'delete'])->name('admin.product.delete');
        Route::get('restore/{id}', [ProductController::class,'restore'])->name('admin.product.restore');
        Route::delete('destroy/{id}', [ProductController::class,"destroy"])->name('admin.product.destroy');



    });
// 10.user
    Route::prefix("user")->group(function(){
        Route::get('/', [UserController::class,'index'])->name('admin.user.index');
        Route::get('trash', [UserController::class,'trash'])->name('admin.user.trash');
        Route::get('show/{id}', [UserController::class,'show'])->name('admin.user.show');
        Route::get('create', [UserController::class,'create'])->name('admin.user.create');
        Route::post('store', [UserController::class,'store'])->name('admin.user.store');
        Route::get('edit/{id}', [UserController::class,'edit'])->name('admin.user.edit');
        Route::put('update/{id}', [UserController::class,'update'])->name('admin.user.update');
        Route::get('status/{id}', [UserController::class,'status'])->name('admin.user.status');
        Route::get('delete/{id}', [UserController::class,'delete'])->name('admin.user.delete');
        Route::get('restore/{id}', [UserController::class,'restore'])->name('admin.user.restore');
        Route::delete('destroy/{id}',[UserController::class,'destroy'])->name('admin.user.destroy');



    });
    Route::prefix("orderdetail")->group(function(){
        Route::get('/',[OrderdetailController::class,'index'])->name('admin.orderdetail.index');
        Route::get('trash',[OrderdetailController::class,'trash'])->name('admin.orderdetail.trash');
        Route::get('show/{id}',[OrderdetailController::class,'show'])->name('admin.orderdetail.show');
        Route::get('create',[OrderdetailController::class,'create'])->name('admin.orderdetail.create');
        Route::post('store',[OrderdetailController::class,'store'])->name('admin.orderdetail.store');
        Route::get('edit/{id}',[OrderdetailController::class,'edit'])->name('admin.orderdetail.edit');
        Route::put('update/{id}',[OrderdetailController::class,'update'])->name('admin.orderdetail.update');
        Route::get('status/{id}',[OrderdetailController::class,'status'])->name('admin.orderdetail.status');
        Route::get('delete/{id}',[OrderdetailController::class,'delete'])->name('admin.orderdetail.delete');
        Route::get('restore/{id}',[OrderdetailController::class,'restore'])->name('admin.orderdetail.restore');
        Route::delete('destroy/{id}',[OrderdetailController::class,'destroy'])->name('admin.orderdetail.destroy');
    });
});


