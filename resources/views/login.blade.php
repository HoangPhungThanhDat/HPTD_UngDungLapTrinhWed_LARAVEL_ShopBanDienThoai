<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    

    <title>Đăng Nhập</title>
    <style>
        .khung {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: linear-gradient(to top, #a18cd1 0%, #fbc2eb 100%);
        }
        .boxlogin {
            max-width: 600px;
            min-width: 400px;
            background: white;
            display: block;
            padding: 20px;
            border-radius: 17px;
        }
    </style>
</head>
<body>
    <div class="khung">
        <div class="boxlogin">
            <h1 class="text-center text-success">Đăng Nhập</h1>
            <form action="{{ route("website.dologin") }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="username">
                        <strong>Tên đăng nhập</strong>
                    </label>
                    <input type="text" class="form-control" id="username" placeholder="nhập tên đăng nhập hoặc email" name="username">
                </div>
                <div class="mb-3">
                    <label for="password">
                        <strong>Mật khẩu</strong>
                    </label>
                    <input type="password" class="form-control" id="password" placeholder="mật khẩu" name="password">
                </div>
                <button type="submit" class="btn btn-success">Đăng nhập</button>
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

    @if(Session::has('message'))
    <script>
        toastr.options = {
            "progressBar": true,
            "closeButton": true
        }
        toastr.error("{{ Session::get('message') }}");
    </script>
    @endif
</body>
</html>


