@extends('layouts\layoutUser')

@section('title')
ĐẶT PHÒNG CFF
@endsection

@section('noidung')

<section class="banner_area">
    <div class="booking_table d_flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="banner_content text-center">
                <h6>Rời xa cuộc sống đơn điệu</h6>
                <h2>ĐẶT PHÒNG KHÁCH SẠN</h2>
                <p>Tạo Dấu Ấn Cho Cuộc Hành Trình<br> Khám Phá và Đặt Chỗ Khách Sạn Hấp Dẫn Của Bạn Ngay Hôm Nay!</p>
                <a href="#" class="btn theme_btn button_hover">Bắt đầu</a>
            </div>
        </div>
    </div>
    <div class="hotel_booking_area position">
        <div class="container">
            <div class="hotel_booking_table">
                <div class="col-md-3">
                    <h2>ĐẶT PHÒNG <br> CỦA BẠN</h2>
                </div>
                <div class="col-md-9">
                    <div class="boking_table">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="book_tabel_item">
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker11'>
                                            <input type='text' class="form-control" placeholder="Ngày Đến"/>
                                            <span class="input-group-addon">
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker1'>
                                            <input type='text' class="form-control" placeholder="Ngày Đi"/>
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
                                            <option data-display="Độ tuổi">Độ tuổi</option>
                                            <option value="1">Trẻ em</option>
                                            <option value="2">người lớn</option>
                                            <option value="3">Người cao niên</option>
                                        </select>
                                    </div>
                                    <div class="input-group">
                                        <select class="wide">
                                            <option data-display="Trẻ nhỏ">Child</option>
                                            <option value="1">Child</option>
                                            <option value="2">Baby</option>
                                            <option value="3">Child</option>
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
    </div>
</section>
<!--================Banner Area =================-->
<!--================ Accomodation Area  =================-->
<section class="accomodation_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color">Chỗ ở tại khách sạn</h2>
            <p>Chúng ta đều sống trong một thời đại thuộc về những người trẻ tuổi tại trái tim. Cuộc sống đang trở nên cực kỳ nhanh chóng, </p>
        </div>
        <div class="row mb_30">
            @foreach($viewsp as $product)
            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="{{ asset('storage/'.$product->anh) }}" alt="{{ $product->tenSP }}">
                        <a href="#" class="btn theme_btn button_hover">Đặt ngay</a>
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
<!--================ Accomodation Area  =================-->
<!--================ Facilities Area  =================-->
<section class="facilities_area section_gap">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
    </div>
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_w">Tiện nghi hoàng gia</h2>
            <p>Những người yêu môi trường thân thiện với hệ thống.</p>
        </div>
        <div class="row mb_30">
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-dinner"></i>Nhà hàng</h4>
                    <p>Sự sử dụng Internet ngày càng phổ biến do sự tiến bộ nhanh chóng của công nghệ và sức mạnh.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-bicycle"></i>Câu lạc bộ thể thao</h4>
                    <p>Sự sử dụng Internet ngày càng phổ biến do sự tiến bộ nhanh chóng của công nghệ và sức mạnh.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-shirt"></i>Hồ bơi</h4>
                    <p>Sự sử dụng Internet ngày càng phổ biến do sự tiến bộ nhanh chóng của công nghệ và sức mạnh.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-car"></i>Thuê xe</h4>
                    <p>Sự sử dụng Internet ngày càng phổ biến do sự tiến bộ nhanh chóng của công nghệ và sức mạnh.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-construction"></i>Phòng tập thể dục</h4>
                    <p>Sự sử dụng Internet ngày càng phổ biến do sự tiến bộ nhanh chóng của công nghệ và sức mạnh.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-coffee-cup"></i>Quầy bar</h4>
                    <p>Sự sử dụng Internet ngày càng phổ biến do sự tiến bộ nhanh chóng của công nghệ và sức mạnh.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ Facilities Area  =================-->
<!--================ About History Area  =================-->
<section class="about_history_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d_flex align-items-center">
                <div class="about_content ">
                    <h2 class="title title_color">Về chúng tôi <br>Lịch sử của chúng tôi<br>Sứ mệnh & Tầm nhìn</h2>
                    <p>Hành vi không thích hợp thường bị coi như "các chàng trai sẽ là các chàng trai", trong khi phụ nữ đối diện với các tiêu chuẩn hành vi cao hơn đặc biệt trong môi trường làm việc. Đó là lý do tại sao việc hành vi của chúng ta trong công việc cần phải vượt qua được. Hành vi không thích hợp thường bị coi như "các chàng trai sẽ là các chàng trai".</p>
                    <a href="#" class="button_hover theme_btn_two">Yêu cầu giá theo yêu cầu</a>
                </div>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="/image/about_bg.jpg" alt="img">
            </div>
        </div>
    </div>
</section>
<!--================ About History Area  =================-->
<!--================ Testimonial Area  =================-->
<section class="testimonial_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color">Phản hồi từ khách hàng của chúng tôi</h2>
            <p"Cách mạng Pháp đã tạo ra cho lương tâm của tầng lớp quý tộc thống trị một sự suy thoái từ </p>
        </div>
        <div class="testimonial_slider owl-carousel">
            <div class="media testimonial_item">
                <img class="rounded-circle" src="/image/testtimonial-1.jpg" alt="">
                <div class="media-body">
                    <p>Là những người nghèo đang du hành có ý thức, chúng ta luôn cần quan tâm đến Mẹ Trái Đất thân yêu của chúng ta. Nếu bạn suy nghĩ về điều đó, bạn đang du hành trên mặt mặt của Mẹ Trái Đất, và Chị ấy chính là</p>
                    <a href="#"><h4 class="sec_h4">Fanny Spencer</h4></a>
                    <div class="star">
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star-half-o"></i></a>
                    </div>
                </div>
            </div>
            <div class="media testimonial_item">
                <img class="rounded-circle" src="/image/testtimonial-1.jpg" alt="">
                <div class="media-body">
                    <p>Là những người nghèo đang du hành có ý thức, chúng ta luôn cần quan tâm đến Mẹ Trái Đất thân yêu của chúng ta. Nếu bạn suy nghĩ về điều đó, bạn đang du hành trên mặt mặt của Mẹ Trái Đất, và Chị ấy chính là</p>
                    <a href="#"><h4 class="sec_h4">Fanny Spencer</h4></a>
                    <div class="star">
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star-half-o"></i></a>
                    </div>
                </div>
            </div>
            <div class="media testimonial_item">
                <img class="rounded-circle" src="/image/testtimonial-1.jpg" alt="">
                <div class="media-body">
                    <p>Là những người nghèo đang du hành có ý thức, chúng ta luôn cần quan tâm đến Mẹ Trái Đất thân yêu của chúng ta. Nếu bạn suy nghĩ về điều đó, bạn đang du hành trên mặt mặt của Mẹ Trái Đất, và Chị ấy chính là</p>
                    <a href="#"><h4 class="sec_h4">Fanny Spencer</h4></a>
                    <div class="star">
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star-half-o"></i></a>
                    </div>
                </div>
            </div>
            <div class="media testimonial_item">
                <img class="rounded-circle" src="/image/testtimonial-1.jpg" alt="">
                <div class="media-body">
                    <p>Là những người nghèo đang du hành có ý thức, chúng ta luôn cần quan tâm đến Mẹ Trái Đất thân yêu của chúng ta. Nếu bạn suy nghĩ về điều đó, bạn đang du hành trên mặt mặt của Mẹ Trái Đất, và Chị ấy chính là</p>
                    <a href="#"><h4 class="sec_h4">Fanny Spencer</h4></a>
                    <div class="star">
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star-half-o"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ Testimonial Area  =================-->
<!--================ Latest Blog Area  =================-->
<section class="latest_blog_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color">Bài viết mới nhất từ blog</h2>
            <p"Cách mạng Pháp đã tạo ra cho lương tâm của tầng lớp quý tộc thống trị một sự suy thoái từ </p>
        </div>
        <div class="row mb_30">
            <div class="col-lg-4 col-md-6">
                <div class="single-recent-blog-post">
                    <div class="thumb">
                        <img class="img-fluid" src="/image/blog/blog-1.jpg" alt="post">
                    </div>
                    <div class="details">
                        <div class="tags">
                            <a href="#" class="button_hover tag_btn">Du lịch</a>
                            <a href="#" class="button_hover tag_btn">Lối sống</a>
                        </div>
                        <a href="#"><h4 class="sec_h4">Quảng cáo giá rẻ</h4></a>
                        <p>Mẫu câu kinh điển về mảng quảng cáo trong ngành tài chính. Rất hữu ích để tiếp cận khách hàng và thúc đẩy thương hiệu của bạn.</p>
                        <h6 class="date title_color">31 tháng 1, 2018</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-recent-blog-post">
                    <div class="thumb">
                        <img class="img-fluid" src="/image/blog/blog-2.jpg" alt="post">
                    </div>
                    <div class="details">
                        <div class="tags">
                            <a href="#" class="button_hover tag_btn">Du lịch</a>
                            <a href="#" class="button_hover tag_btn">Lối sống</a>
                        </div>
                        <a href="#"><h4 class="sec_h4">Bí mật thành công</h4></a>
                        <p>Mẫu câu kinh điển về mảng quảng cáo trong ngành tài chính. Rất hữu ích để tiếp cận khách hàng và thúc đẩy thương hiệu của bạn.</p>
                        <h6 class="date title_color">31 tháng 1, 2018</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-recent-blog-post">
                    <div class="thumb">
                        <img class="img-fluid" src="/image/blog/blog-3.jpg" alt="post">
                    </div>
                    <div class="details">
                        <div class="tags">
                            <a href="#" class="button_hover tag_btn">Du lịch</a>
                            <a href="#" class="button_hover tag_btn">Lối sống</a>
                        </div>
                        <a href="#"><h4 class="sec_h4">Khám phá thế giới</h4></a>
                        <p>Mẫu câu kinh điển về mảng quảng cáo trong ngành tài chính. Rất hữu ích để tiếp cận khách hàng và thúc đẩy thương hiệu của bạn.</p>
                        <h6 class="date title_color">31 tháng 1, 2018</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ Recent Area  =================-->
@endsection
