@extends('layouts\layoutUser')

@section('title')
    Khách sạn
@endsection

@section('noidung')
    <section class="breadcrumb_area">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-tittle">Khách sạn</h2>
                <ol class="breadcrumb">
                    <li><a href="/">Trang chủ</a></li>
                    <li class="active">Khách sạn</li>
                </ol>
            </div>
        </div>
    </section>
    <!--================ Khu vực Breadcrumbs =================-->

    <!--================ Khu vực Chỗ ở đặc biệt =================-->
    <section class="accomodation_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color">Chỗ ở đặc biệt</h2>
                <p>Chúng ta đều sống trong một thời đại thuộc về những người trẻ tại trái tim. Cuộc sống đang trở nên vô
                    cùng nhanh chóng,</p>
            </div>
            <div class="row mb_30">
                @foreach ($viewsp as $product)
                    <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="{{ asset('storage/'.$product->anh) }}" alt="{{ $product->tenSP }}">
                                <a href="/addcart/{{ $product->id }}" class="btn theme_btn button_hover">Đặt ngay</a>
                            </div>
                            <a href="#">
                                <h4 class="sec_h4">{{ $product->tenSP }}</h4>
                            </a>
                            <h5>${{ $product->gia_goc }}<small>/đêm</small></h5>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!--================ Khu vực Chỗ ở đặc biệt =================-->
    <!--================ Khu vực Đặt bàn =================-->
    <section class="hotel_booking_area">
        <div class="container">
            <div class="row hotel_booking_table">
                <div class="col-md-3">
                    <h2>Đặt<br> Phòng của bạn</h2>
                </div>
                <div class="col-md-9">
                    <div class="boking_table">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="book_tabel_item">
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker11'>
                                            <input type='text' class="form-control" placeholder="Ngày đến" />
                                            <span class="input-group-addon">
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker1'>
                                            <input type='text' class="form-control" placeholder="Ngày đi" />
                                            <span class="input-group-addon">
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="book_tabel_item">
                                    <div class="input-group">
                                        <select class="wide">
                                            <option data-display="Người lớn">Người lớn</option>
                                            <option value="1">Người già</option>
                                            <option value="2">Người trẻ</option>
                                            <option value="3">Khoai tây</option>
                                        </select>
                                    </div>
                                    <div class="input-group">
                                        <select class="wide">
                                            <option data-display="Trẻ em">Trẻ em</option>
                                            <option value="1">Trẻ em</option>
                                            <option value="2">Em bé</option>
                                            <option value="3">Trẻ em</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="book_tabel_item">
                                    <div class="input-group">
                                        <select class="wide">
                                            <option data-display="Loại phòng">Loại phòng</option>
                                            @foreach ($loaiphong as $loai)
                                                <option value="{{ $loai->id }}">{{ $loai->loaiphong }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <a class="book_now_btn button_hover" href="#">Đặt Ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Khu vực Đặt bàn =================-->
    <!--================ Khu vực Chỗ ở thường =================-->
    <section class="accomodation_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color">Chỗ ở thường</h2>
                <p>Chúng ta đều sống trong một thời đại thuộc về những người trẻ tại trái tim. Cuộc sống đang trở nên vô
                    cùng nhanh chóng,</p>
            </div>
            <div class="row accomodation_two">
                @foreach ($sanphams as $sanpham)

                        <div class="col-lg-3 col-sm-6">
                            <form action="" method="POST" enctype="multipart/form-data">
                                @csrf
                            <div class="accomodation_item text-center">
                                <div class="hotel_img">

                                    <input type="hidden" value="{{ $sanpham->id }}" name="id">
                                    <input type="hidden" value="{{ $sanpham->tenSP }}" name="tenSP">
                                    <input type="hidden" value="{{ $sanpham->gia_goc }}" name="gia_goc">
                                    <input type="hidden" value="{{ $sanpham->anh }}" name="anh">
                                    <input type="hidden" value="1" name="soluong">
                                    <img src="{{ asset('storage/'.$sanpham->anh) }}" alt="{{ $sanpham->tenSP }}">
                                    <a href="/addcart/{{ $sanpham->id }}" class="btn theme_btn button_hover">Đặt
                                        ngay</a>
                                </div>
                                <a href="#">
                                    <h4 class="sec_h4">{{ $sanpham->tenSP }}</h4>
                                </a>
                                <h5>${{ $sanpham->gia_goc }}<small>/đêm</small></h5>
                            </div>
                        </form>
                        </div>

                @endforeach


            </div>
            {{ $sanphams->links() }}
        </div>
    </section>
@endsection
