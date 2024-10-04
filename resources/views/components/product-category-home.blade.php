<div class="container mt-5">
    <div class="row">
            @foreach($category_list as $cat_row)
            <div class="products" id="products">
                <h2>{{$cat_row->name}}</h2>                 
                <x-product-category :catrow=" $cat_row "/>
            @endforeach               
                </div>              
                 <!-- Xem thêm -->
            <div class="row mt-2">
                <div class="col-12 text-center">                   
                    <a href="{{route('site.product.category',['slug'=>$cat_row->slug])}}" class="view-all-btn">Xem thêm sản phẩm &gt;</a>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- //---------------------------------------------------------------- --}}

{{-- css của nút xem thêm sp  --}}
<style>
    .view-all-btn {
        display: inline-block;
        padding: 10px 20px;
        border: 1px solid #000;
        border-radius: 20px;
        font-size: 16px;
        color: #000;
        text-decoration: none;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .view-all-btn:hover {
        background-color: #000;
        color: #fff;
    }
</style>






 














