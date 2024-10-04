
    <div class="col-md-3">
        <div class="card mb-4">
            <div class="position-relative">
                <a href="{{route('site.post.detail',['slug'=>$post->slug])}}">
                        <img src="{{asset('images/posts/'.$post->image)}}" class="card-img-top" alt="{{$post->image}}">
                    </a>
                        <span class="badge bg-danger position-absolute top-0 start-0 m-2"><?= date('d/m/Y', strtotime($post['created_at'])); ?></span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?= $post['title']; ?></h5>
                        <a href="{{route('site.post.detail',['slug'=>$post->slug])}}" class="btn btn-link p-0">Đọc tiếp »</a>
                    </div>               
            </div>
        </div>
    

<style>
            /* Card container */
    .card {
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        overflow: hidden; /* Đảm bảo các phần tử không vượt ra ngoài biên giới của card */
        transition: box-shadow 0.3s ease, transform 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px); /* Hiệu ứng di chuyển lên khi hover */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Tăng độ đổ bóng khi hover */
    }

    /* Card image */
    .card-img-top {
        width: 100%;
        height: auto;
        object-fit: cover; /* Đảm bảo hình ảnh không bị méo */
    }

    /* Badge */
    .badge {
        font-size: 12px;
        padding: 5px 10px;
        border-radius: 12px;
        color: white;
    }

    /* Card body */
    .card-body {
        padding: 15px;
    }

    .card-title {
        font-size: 16px;
        margin-bottom: 10px;
        color: #333;
    }

    .btn-link {
        font-size: 14px;
        color: #007bff;
        text-decoration: none;
    }

    .btn-link:hover {
        text-decoration: underline;
        color: #0056b3;
    }

</style>