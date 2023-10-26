<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Stylesheet" href="/css/list.css">
    <link rel="Stylesheet" href="/css/add.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,300,700,900,700italic,400italic,300italic,100'
        rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,400italic,500,700,700italic,900'
        rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <title>Sửa Sản Phẩm</title>
</head>

<body>
    <div class="formbold-main-wrapper">
        <div class="formbold-form-wrapper">
            @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
            @endif
            <form action="/update" method="post">
                @csrf
                <div class="formbold-input-flex">
                    <div>
                        <input type="hidden" name="id" value="{{$data->id}}">
                        <input type="text" style="width:550px" name="name" id="name" placeholder="Nhập Tên Sản Phẩm"
                            class="formbold-form-input" value="{{$data->name}}" />
                        <label for="name" class="formbold-form-label"> Tên Sản Phẩm </label>
                    </div>
                </div>

                <div class="formbold-input-flex">
                    <div>
                        <input type="number" name="price" id="price" placeholder="Nhập Giá Sản Phẩm"
                            class="formbold-form-input" value="{{$data->price}}" />
                        <label for="email" class="formbold-form-label"> Giá Sản Phẩm </label>
                    </div>
                    <div>
                        <input type="number" name="price_sale" id="price_sale" placeholder="Nhập Giảm giá (nếu có)"
                            class="formbold-form-input" value="{{$data->price_sale}}" />
                        <label for="phone" class="formbold-form-label"> Giảm giá </label>
                    </div>
                </div>

                <div class="formbold-textarea">
                    <label for="message" class="formbold-form-label"> Mô tả sản phẩm </label>
                    <input type="text" value="{{$data->mo_ta}}" name="mo_ta" required="">
                </div>
                <div class="formbold-form-label">
                    <label>Danh mục:</label><br>
                    <select name="id_category" class="form-control" value="{{$data->id_category}}">
                        <option value="1">sách</option>
                        <option value="3"></option>
                    </select>
                </div><br>
                <label for="upload" class="formbold-input-label">
                    Thêm Ảnh Sản Phẩm
                    
                <input type="file" name="img" value="{{$data->img}}" class="form-control" id="customFile" />
                </label>
                <button class="formbold-btn">
                    Cập Nhật
                </button>
                <button class="formbold-btn">
                    <a style="text-decoration: none;color:white" href="{{url('/list')}}">Danh sách san pham </a>
                </button>
            </form>
        </div>
    </div>
</body>

</html>