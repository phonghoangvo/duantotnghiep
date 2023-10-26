<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Stylesheet" href="/css/list.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,300,700,900,700italic,400italic,300italic,100' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,400italic,500,700,700italic,900' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <title>Danh sách sản phẩm</title>
</head>
<body>
<section class="intro">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
              <div class="card-body p-0">
                <a href="{{url('add')}}" class="btn btn-success btn-sm">
                  Thêm sản phẩm
                </a>
                @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
                @endif
                <div class="bangsp" >
                  <table class="table table-striped mb-0">
                    <thead style="background-color: #1a5fc7;">
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Giá sản phẩm</th>
                        <th scope="col">Giảm giá</th>
                        <th scope="col">Mô tả</th>
                        <th scope="col">Danh mục</th>
                        <th scope="col">Chuc nang</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($data as $data)
                      <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->name}}</td>
                        <td><img src="/img/{{$data->img}}"style="height:60px;width:50px"></td>
                        <td>{{$data->price}}</td>
                        <td>{{$data->price_sale}}</td>
                        <td>{{$data->mo_ta}}</td>
                        <td>{{$data->id_category}}</td>
                        <td>
                          <a href="{{url('edit/'.$data->id)}}" title="Sua"><button type="button" class="btn btn-success">Sửa</button></a>
                          <a href="{{url('del/'.$data->id)}}" title="Xoa"><button type="button" class="btn btn-info">Xóa</button></a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
          </div>
        </div>
      </div>
</section>
</body>
</html>
