<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('tieudetrang')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/index.css">

</head>

<body>
    {{-- <section class="card-header pt-1 pb-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <a href="index.html">
                        <img class="w-75" src="img/logo.png" alt="">
                    </a>
                </div>
                <div class="col-lg-6">
                    <form class="form-control d-flex mt-2 p-1" role="search">
                        <input class="form-control" type="search" placeholder="Tim kiem san pham" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
                    </form>
                </div>
                <div class="col-lg-2">
                    <div class="mt-3 mb-3 text-center">
                        <a class="text-decoration-none text-dark" href="#">
                            <i class="bi bi-cart"></i>
                            Gio hang
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <sectionc class="menu">
        <nav class="navbar navbar-expand-lg bg-danger">
            <div class="container">
                <a class="navbar-brand text-light align-items-end" href="#">
                    Danh mục sản phẩm
                    <i class="bi bi-list p-3"></i>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end bg-primary" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item mx-3">
                                <a class="nav-link active text-light" href="#">Trang chu</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link text-light" href="#">Cua hang</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link text-light" href="#">Gioi thieu</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link text-light" href="#">Lien he</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link text-light" href="#">Blog</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link text-light" href="#">San pham sale</a>
                            </li>
                            <li class="nav-item dropdown mx-3">
                                <a class="nav-link dropdown-toggle text-light" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Dang nhap
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Dang nhap</a></li>
                                    <li><a class="dropdown-item" href="#">Dang ky</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Tao tai khoan</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </sectionc>
    <section class="banner">
        <div class="container-fluid px-0">
            <img class="w-100" src="img/banner.jpg" alt="">
        </div>
    </section> --}}

    @include('header')
    <main>
        
        @yield('noidung')
        {{-- <div class="container ">
            <div class="row pt-5 pb-5">
                <section class="col-3">
                    <div class=" boxloai bg-white">
                        <h3 class="p-2">Sản phẩm theo loại</h3>
                        <div class="">
                            <ul>
                                <li>
                                    <a href=""><span>Sách Văn học</span></a>
                                </li>
                                <li>
                                    <a href=""><span>Sách Thiên Văn học</span></a>
                                </li>
                                <li>
                                    <a href=""><span>Sách Trinh Thám</span></a>
                                </li>
                                <li>
                                    <a href=""><span>Sách Thiếu Nhi</span></a>
                                </li>
                                <li>
                                    <a href=""><span>Bút chì</span></a>
                                </li>
                                <li>
                                    <a href=""><span>Bút bi</span></a>
                                </li>
                                <li>
                                    <a href=""><span>Balo học sinh</span></a>
                                </li>
                                <li>
                                    <a href=""><span>Hộp bút</span></a>
                                </li>


                            </ul>
                        </div>
                    </div>

                    <div class=" boxloai bg-white mt-5">
                        <h3 class="p-2">Nhà Xuất Bản</h3>
                        <div class="">
                            <ul>
                                <li>
                                    <label for="1">
                                        <input type="checkbox" name="1" id="1"> <span>1</span>
                                    </label>
                                </li>
                                <li>
                                    <label for="2">
                                        <input type="checkbox" name="2" id="2"> <span>2</span>
                                    </label>
                                </li>
                                <li>
                                    <label for="3">
                                        <input type="checkbox" name="3" id="3"> <span>3</span>
                                    </label>
                                </li>
                                <li>
                                    <label for="4">
                                        <input type="checkbox" name="4" id="4"> <span>4</span>
                                    </label>
                                </li>
                                <li>
                                    <label for="5">
                                        <input type="checkbox" name="5" id="5"> <span>5</span>
                                    </label>
                                </li>
                                <li>
                                    <label for="6">
                                        <input type="checkbox" name="6" id="6"> <span>6</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class=" boxloai bg-white mt-5">
                        <h3 class="p-2">Sản phẩm theo giá</h3>
                        <div class="">
                            <ul>
                                <li>Sách Văn học</li>
                                <li>Sách Thiên Văn học</li>
                                <li>Sách Giáo dục</li>
                                <li>Sách Trinh Thám</li>
                                <li>Sách Thiếu Nhi</li>
                                <li>Bút chì</li>
                                <li>Bút bi</li>
                                <li>Balo học sinh</li>
                                <li>Hộp bút</li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section class="col-9 bg-white">
                    <div class="thanhchucnang mt-3">
                        <div class="row p-3">
                            <div class="col-2 mt-2"> <label>Sắp xếp theo: </label></div>
                            <div class="col-3">
                                <select class="form-select thanhsapxep" aria-label="Default select example">
                                    <option selected>Bán chạy tuần</option>
                                    <option value="1">Bán chạy tháng</option>
                                    <option value="2">Bán chạy năm</option>
                                    <option value="3">Giá từ cao đến thấp</option>
                                    <option value="3">Giá từ thấp đến cao</option>
                                </select>
                            </div>

                            <div class="col-3">
                                <select class="form-select thanhsapxep" aria-label="Default select example">
                                    <option selected>12 sản phẩm</option>
                                    <option value="1">24 sản phẩm</option>
                                    <option value="2">36 sản phẩm</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="box">
                        <div class="row p-3">
                            <div class="col-3 p-2 sanpham">
                                <div class="boxsanpham p-2">
                                    <div class="img">
                                        <img src="uploads/mua-he-khong-ten---bia-mem---qua-tang-kem-1.jpg"
                                            alt="muahekhongten">
                                    </div>
                                    <div class="title">
                                        <h3>
                                            <a href="">Mùa Hè Không Tên - Tặng Kèm Bookmark 2 Mặt + Poster Tranh + Chữ
                                                Ký
                                                Tác Giả Ngẫu Nhiên</a>
                                        </h3>
                                    </div>
                                    <div class="gia">
                                        <span>117.000 đ</span><br>
                                        <p><del>150.000 đ</del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 p-2 sanpham">
                                <div class="boxsanpham p-2">
                                    <div class="img">
                                        <img src="uploads/mua-he-khong-ten---bia-mem---qua-tang-kem-1.jpg"
                                            alt="muahekhongten">
                                    </div>
                                    <div class="title">
                                        <h3>
                                            <a href="">Mùa Hè Không Tên - Tặng Kèm Bookmark 2 Mặt + Poster Tranh + Chữ
                                                Ký
                                                Tác Giả Ngẫu Nhiên</a>
                                        </h3>
                                    </div>
                                    <div class="gia">
                                        <span>117.000 đ</span><br>
                                        <p><del>150.000 đ</del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 p-2 sanpham">
                                <div class="boxsanpham p-2">
                                    <div class="img">
                                        <img src="uploads/mua-he-khong-ten---bia-mem---qua-tang-kem-1.jpg"
                                            alt="muahekhongten">
                                    </div>
                                    <div class="title">
                                        <h3>
                                            <a href="">Mùa Hè Không Tên - Tặng Kèm Bookmark 2 Mặt + Poster Tranh + Chữ
                                                Ký
                                                Tác Giả Ngẫu Nhiên</a>
                                        </h3>
                                    </div>
                                    <div class="gia">
                                        <span>117.000 đ</span><br>
                                        <p><del>150.000 đ</del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 p-2 sanpham">
                                <div class="boxsanpham p-2">
                                    <div class="img">
                                        <img src="uploads/mua-he-khong-ten---bia-mem---qua-tang-kem-1.jpg"
                                            alt="muahekhongten">
                                    </div>
                                    <div class="title">
                                        <h3>
                                            <a href="">Mùa Hè Không Tên - Tặng Kèm Bookmark 2 Mặt + Poster Tranh + Chữ
                                                Ký
                                                Tác Giả Ngẫu Nhiên</a>
                                        </h3>
                                    </div>
                                    <div class="gia">
                                        <span>117.000 đ</span><br>
                                        <p><del>150.000 đ</del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 p-2 sanpham">
                                <div class="boxsanpham p-2">
                                    <div class="img">
                                        <img src="uploads/mua-he-khong-ten---bia-mem---qua-tang-kem-1.jpg"
                                            alt="muahekhongten">
                                    </div>
                                    <div class="title">
                                        <h3>
                                            <a href="">Mùa Hè Không Tên - Tặng Kèm Bookmark 2 Mặt + Poster Tranh + Chữ
                                                Ký
                                                Tác Giả Ngẫu Nhiên</a>
                                        </h3>
                                    </div>
                                    <div class="gia">
                                        <span>117.000 đ</span><br>
                                        <p><del>150.000 đ</del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 p-2 sanpham">
                                <div class="boxsanpham p-2">
                                    <div class="img">
                                        <img src="uploads/mua-he-khong-ten---bia-mem---qua-tang-kem-1.jpg"
                                            alt="muahekhongten">
                                    </div>
                                    <div class="title">
                                        <h3>
                                            <a href="">Mùa Hè Không Tên - Tặng Kèm Bookmark 2 Mặt + Poster Tranh + Chữ
                                                Ký
                                                Tác Giả Ngẫu Nhiên</a>
                                        </h3>
                                    </div>
                                    <div class="gia">
                                        <span>117.000 đ</span><br>
                                        <p><del>150.000 đ</del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 p-2 sanpham">
                                <div class="boxsanpham p-2">
                                    <div class="img">
                                        <img src="uploads/mua-he-khong-ten---bia-mem---qua-tang-kem-1.jpg"
                                            alt="muahekhongten">
                                    </div>
                                    <div class="title">
                                        <h3>
                                            <a href="">Mùa Hè Không Tên - Tặng Kèm Bookmark 2 Mặt + Poster Tranh + Chữ
                                                Ký
                                                Tác Giả Ngẫu Nhiên</a>
                                        </h3>
                                    </div>
                                    <div class="gia">
                                        <span>117.000 đ</span><br>
                                        <p><del>150.000 đ</del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 p-2 sanpham">
                                <div class="boxsanpham p-2">
                                    <div class="img">
                                        <img src="uploads/mua-he-khong-ten---bia-mem---qua-tang-kem-1.jpg"
                                            alt="muahekhongten">
                                    </div>
                                    <div class="title">
                                        <h3>
                                            <a href="">Mùa Hè Không Tên - Tặng Kèm Bookmark 2 Mặt + Poster Tranh + Chữ
                                                Ký
                                                Tác Giả Ngẫu Nhiên</a>
                                        </h3>
                                    </div>
                                    <div class="gia">
                                        <span>117.000 đ</span><br>
                                        <p><del>150.000 đ</del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 p-2 sanpham">
                                <div class="boxsanpham p-2">
                                    <div class="img">
                                        <img src="uploads/mua-he-khong-ten---bia-mem---qua-tang-kem-1.jpg"
                                            alt="muahekhongten">
                                    </div>
                                    <div class="title">
                                        <h3>
                                            <a href="">Mùa Hè Không Tên - Tặng Kèm Bookmark 2 Mặt + Poster Tranh + Chữ
                                                Ký
                                                Tác Giả Ngẫu Nhiên</a>
                                        </h3>
                                    </div>
                                    <div class="gia">
                                        <span>117.000 đ</span><br>
                                        <p><del>150.000 đ</del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 p-2 sanpham">
                                <div class="boxsanpham p-2">
                                    <div class="img">
                                        <img src="uploads/mua-he-khong-ten---bia-mem---qua-tang-kem-1.jpg"
                                            alt="muahekhongten">
                                    </div>
                                    <div class="title">
                                        <h3>
                                            <a href="">Mùa Hè Không Tên - Tặng Kèm Bookmark 2 Mặt + Poster Tranh + Chữ
                                                Ký
                                                Tác Giả Ngẫu Nhiên</a>
                                        </h3>
                                    </div>
                                    <div class="gia">
                                        <span>117.000 đ</span><br>
                                        <p><del>150.000 đ</del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 p-2 sanpham">
                                <div class="boxsanpham p-2">
                                    <div class="img">
                                        <img src="uploads/mua-he-khong-ten---bia-mem---qua-tang-kem-1.jpg"
                                            alt="muahekhongten">
                                    </div>
                                    <div class="title">
                                        <h3>
                                            <a href="">Mùa Hè Không Tên - Tặng Kèm Bookmark 2 Mặt + Poster Tranh + Chữ
                                                Ký
                                                Tác Giả Ngẫu Nhiên</a>
                                        </h3>
                                    </div>
                                    <div class="gia">
                                        <span>117.000 đ</span><br>
                                        <p><del>150.000 đ</del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 p-2 sanpham">
                                <div class="boxsanpham p-2">
                                    <div class="img">
                                        <img src="uploads/mua-he-khong-ten---bia-mem---qua-tang-kem-1.jpg"
                                            alt="muahekhongten">
                                    </div>
                                    <div class="title">
                                        <h3>
                                            <a href="">Mùa Hè Không Tên - Tặng Kèm Bookmark 2 Mặt + Poster Tranh + Chữ
                                                Ký
                                                Tác Giả Ngẫu Nhiên</a>
                                        </h3>
                                    </div>
                                    <div class="gia">
                                        <span>117.000 đ</span><br>
                                        <p><del>150.000 đ</del></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="box">
                        <div class="row p-3">
                            <div class="col-3 sanpham">
                                <div class="boxsanpham p-2">
                                    <div class="img">
                                        <img src="uploads/mua-he-khong-ten---bia-mem---qua-tang-kem-1.jpg"
                                            alt="muahekhongten">
                                    </div>
                                    <div class="title">
                                        <h3>
                                            <a href="">Mùa Hè Không Tên - Tặng Kèm Bookmark 2 Mặt + Poster Tranh + Chữ
                                                Ký
                                                Tác Giả Ngẫu Nhiên</a>
                                        </h3>
                                    </div>
                                    <div class="gia">
                                        <span>117.000 đ</span><br>
                                        <p><del>150.000 đ</del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 sanpham">
                                <div class="boxsanpham p-2">
                                    <div class="img">
                                        <img src="uploads/mua-he-khong-ten---bia-mem---qua-tang-kem-1.jpg"
                                            alt="muahekhongten">
                                    </div>
                                    <div class="title">
                                        <h3>
                                            <a href="">Mùa Hè Không Tên - Tặng Kèm Bookmark 2 Mặt + Poster Tranh + Chữ
                                                Ký
                                                Tác Giả Ngẫu Nhiên</a>
                                        </h3>
                                    </div>
                                    <div class="gia">
                                        <span>117.000 đ</span><br>
                                        <p><del>150.000 đ</del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 sanpham">
                                <div class="boxsanpham p-2">
                                    <div class="img">
                                        <img src="uploads/mua-he-khong-ten---bia-mem---qua-tang-kem-1.jpg"
                                            alt="muahekhongten">
                                    </div>
                                    <div class="title">
                                        <h3>
                                            <a href="">Mùa Hè Không Tên - Tặng Kèm Bookmark 2 Mặt + Poster Tranh + Chữ
                                                Ký
                                                Tác Giả Ngẫu Nhiên</a>
                                        </h3>
                                    </div>
                                    <div class="gia">
                                        <span>117.000 đ</span><br>
                                        <p><del>150.000 đ</del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 sanpham">
                                <div class="boxsanpham p-2">
                                    <div class="img">
                                        <img src="uploads/mua-he-khong-ten---bia-mem---qua-tang-kem-1.jpg"
                                            alt="muahekhongten">
                                    </div>
                                    <div class="title">
                                        <h3>
                                            <a href="">Mùa Hè Không Tên - Tặng Kèm Bookmark 2 Mặt + Poster Tranh + Chữ
                                                Ký
                                                Tác Giả Ngẫu Nhiên</a>
                                        </h3>
                                    </div>
                                    <div class="gia">
                                        <span>117.000 đ</span><br>
                                        <p><del>150.000 đ</del></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="row p-3">
                            <div class="col-3 sanpham">
                                <div class="boxsanpham p-2">
                                    <div class="img">
                                        <img src="uploads/mua-he-khong-ten---bia-mem---qua-tang-kem-1.jpg"
                                            alt="muahekhongten">
                                    </div>
                                    <div class="title">
                                        <h3>
                                            <a href="">Mùa Hè Không Tên - Tặng Kèm Bookmark 2 Mặt + Poster Tranh + Chữ
                                                Ký
                                                Tác Giả Ngẫu Nhiên</a>
                                        </h3>
                                    </div>
                                    <div class="gia">
                                        <span>117.000 đ</span><br>
                                        <p><del>150.000 đ</del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 sanpham">
                                <div class="boxsanpham p-2">
                                    <div class="img">
                                        <img src="uploads/mua-he-khong-ten---bia-mem---qua-tang-kem-1.jpg"
                                            alt="muahekhongten">
                                    </div>
                                    <div class="title">
                                        <h3>
                                            <a href="">Mùa Hè Không Tên - Tặng Kèm Bookmark 2 Mặt + Poster Tranh + Chữ
                                                Ký
                                                Tác Giả Ngẫu Nhiên</a>
                                        </h3>
                                    </div>
                                    <div class="gia">
                                        <span>117.000 đ</span><br>
                                        <p><del>150.000 đ</del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 sanpham">
                                <div class="boxsanpham p-2">
                                    <div class="img">
                                        <img src="uploads/mua-he-khong-ten---bia-mem---qua-tang-kem-1.jpg"
                                            alt="muahekhongten">
                                    </div>
                                    <div class="title">
                                        <h3>
                                            <a href="">Mùa Hè Không Tên - Tặng Kèm Bookmark 2 Mặt + Poster Tranh + Chữ
                                                Ký
                                                Tác Giả Ngẫu Nhiên</a>
                                        </h3>
                                    </div>
                                    <div class="gia">
                                        <span>117.000 đ</span><br>
                                        <p><del>150.000 đ</del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 sanpham">
                                <div class="boxsanpham p-2">
                                    <div class="img">
                                        <img src="uploads/mua-he-khong-ten---bia-mem---qua-tang-kem-1.jpg"
                                            alt="muahekhongten">
                                    </div>
                                    <div class="title">
                                        <h3>
                                            <a href="">Mùa Hè Không Tên - Tặng Kèm Bookmark 2 Mặt + Poster Tranh + Chữ
                                                Ký
                                                Tác Giả Ngẫu Nhiên</a>
                                        </h3>
                                    </div>
                                    <div class="gia">
                                        <span>117.000 đ</span><br>
                                        <p><del>150.000 đ</del></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="row p-3">
                            <div class="col-3 sanpham">
                                <div class="boxsanpham p-2">
                                    <div class="img">
                                        <img src="uploads/mua-he-khong-ten---bia-mem---qua-tang-kem-1.jpg"
                                            alt="muahekhongten">
                                    </div>
                                    <div class="title">
                                        <h3>
                                            <a href="">Mùa Hè Không Tên - Tặng Kèm Bookmark 2 Mặt + Poster Tranh + Chữ
                                                Ký
                                                Tác Giả Ngẫu Nhiên</a>
                                        </h3>
                                    </div>
                                    <div class="gia">
                                        <span>117.000 đ</span><br>
                                        <p><del>150.000 đ</del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 sanpham">
                                <div class="boxsanpham p-2">
                                    <div class="img">
                                        <img src="uploads/mua-he-khong-ten---bia-mem---qua-tang-kem-1.jpg"
                                            alt="muahekhongten">
                                    </div>
                                    <div class="title">
                                        <h3>
                                            <a href="">Mùa Hè Không Tên - Tặng Kèm Bookmark 2 Mặt + Poster Tranh + Chữ
                                                Ký
                                                Tác Giả Ngẫu Nhiên</a>
                                        </h3>
                                    </div>
                                    <div class="gia">
                                        <span>117.000 đ</span><br>
                                        <p><del>150.000 đ</del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 sanpham">
                                <div class="boxsanpham p-2">
                                    <div class="img">
                                        <img src="uploads/mua-he-khong-ten---bia-mem---qua-tang-kem-1.jpg"
                                            alt="muahekhongten">
                                    </div>
                                    <div class="title">
                                        <h3>
                                            <a href="">Mùa Hè Không Tên - Tặng Kèm Bookmark 2 Mặt + Poster Tranh + Chữ
                                                Ký
                                                Tác Giả Ngẫu Nhiên</a>
                                        </h3>
                                    </div>
                                    <div class="gia">
                                        <span>117.000 đ</span><br>
                                        <p><del>150.000 đ</del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 sanpham">
                                <div class="boxsanpham p-2">
                                    <div class="img">
                                        <img src="uploads/mua-he-khong-ten---bia-mem---qua-tang-kem-1.jpg"
                                            alt="muahekhongten">
                                    </div>
                                    <div class="title">
                                        <h3>
                                            <a href="">Mùa Hè Không Tên - Tặng Kèm Bookmark 2 Mặt + Poster Tranh + Chữ
                                                Ký
                                                Tác Giả Ngẫu Nhiên</a>
                                        </h3>
                                    </div>
                                    <div class="gia">
                                        <span>117.000 đ</span><br>
                                        <p><del>150.000 đ</del></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </section>
            </div>

        </div> --}}


    </main>
    <!-- Footer Start -->
    {{-- <footer>
        <section>
            <div class="container pt-5">
                <div class="row">
                    <div class="col-lg-5 text-start">
                        <a href="#">
                            <img class="w-75 mb-3" src="img/logo.png" alt="">
                        </a>
                        <p>
                            <i class="bi bi-geo-alt"></i>
                            <strong>Địa chỉ: </strong>
                            <span style="color: rgb(48, 48, 48);">Cong vien phan mem Quang Trung</span>
                        </p>
                        <p>
                            <i class="bi bi-telephone"></i>
                            <strong>Số điện thoại: </strong>
                            <span style="color: rgb(48, 48, 48);"> 0123456789</span>
                        </p>
                        <p>
                            <i class="bi bi-envelope"></i>
                            <strong>Email: </strong>
                            <span style="color: rgb(48, 48, 48);">fightingtogether@gmail.com</span>
                        </p>
                    </div>
                    <div class="col-lg-3 p-3">
                        <h5>Về Fighting Together</h5>
                        <div>
                            <p>
                                <a class="text-decoration-none text-dark" href="#" title="Home">Trang chủ</a>
                            </p>
                            <p>
                                <a class="text-decoration-none text-dark" href="#" title="Shop">Cửa hàng</a>
                            </p>
                            <p>
                                <a class="text-decoration-none text-dark" href="#" title="Contact">Liên hệ</a>
                            </p>
                            <p>
                                <a class="text-decoration-none text-dark" href="#" title="About">Giới thiệu</a>
                            </p>
                            <p>
                                <a class="text-decoration-none text-dark" href="#">Chính sách</a>
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-4 p-3">
                        <h5>Tổng đài hỗ trợ</h5>
                        <p>Gọi mua hàng: <b>0123456789</b> (7h30-17h00)</p>
                        <p>Gọi khiếu nại: <b>0123456789</b> (7h30-17h00)</p>
                        <h5>Phương thức thanh toán</h5>
                        <p><img class="w-75" src="img/footer-pay.jpg" alt=""></p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid text-center bg-dark text-light">
                <span>Bản quyền © 2023 . Thiết kế Khavd</span>
            </div>
        </section>
    </footer> --}}
    @include('footer')
    <!-- Footer End -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>