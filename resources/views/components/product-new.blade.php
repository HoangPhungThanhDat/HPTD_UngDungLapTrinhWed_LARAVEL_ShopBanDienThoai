
<h2> Sản Phẩm Mới Nhất</h2>

  <div class="container mt-5">
    <div class="row">
        <!-- Sản phẩm 1 -->
        @foreach ($product_new as $product)
            <x-product-card :productitem="$product"/>
        @endforeach     
      </div>
      <div class="row mt-2">
        <div class="col-12 text-center">                   
            <a href="" class="view-all-btn">Xem thêm sản phẩm &gt;</a>
        </div>
    </div>     
        </div>      
    </div> 
</div>

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

