@extends('layout')
@section('tieudetrang')
Trang sản phẩm
@endsection
@section('noidung')
<div class="container ">
    <div class="row pt-5 pb-5">
        <section class="col-3">
            <div class=" boxloai bg-white">
                <h3 class="p-2">Sản phẩm theo loại</h3>
                <div class="">
                    <?php
                    $danhmuc = DB::table('category')->select('id','name')
                    ->orderby('thutu','asc')
                    ->where('hidden','=','1')
                    ->get();
                    ?>
                    <ul>
                        @foreach ($danhmuc as $dm)
                        <li>
                            <a href=""><span>{{$dm->name}}</span></a>
                        </li>
                        @endforeach
                        
                        {{-- <li>
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
                        </li> --}}


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
                    @foreach ($data as $sanpham)
                    <div class="col-md-6 col-xl-3 p-2 sanpham ">
                        <div class="boxsanpham  p-2">
                            <div class="img">
                                <img src="{{$sanpham->img}}"
                                    alt="muahekhongten" width="200px" height="200px">
                            </div>
                            <div class="title">
                                <h3>
                                    <a href="">{{$sanpham->name}}</a>
                                </h3>
                            </div>
                            <div class="gia">
                                <span>{{$sanpham->price}} đ</span><br>
                                <p><del>{{$sanpham->priceSale}} đ</del></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    {{-- <div class="col-xl-3 p-2 sanpham">
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
                    <div class="col-xl-3 p-2 sanpham">
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
                    <div class="col-xl-3 p-2 sanpham">
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
                    </div> --}}
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

</div>
@endsection