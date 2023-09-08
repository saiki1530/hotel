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
                    <li class="active">Giỏ hàng</li>
                    <li class="active">Thanh toán</li>
                </ol>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="row">
            <div class="col-md-3 pt-3 pb-3">
                <div class="apartment mb-3">
                    <div class="d-flex">
                        <p style="padding-right: 10px;">Phòng</p>
                        <p><i class="fa-solid fa-thumbs-up" style="color: #febb02;"></i></p>
                    </div>
                    <h1 class="fs-6">Mr. Soof - By TLV2GO</h1>
                    <p>26 Sderot HaTmarim, Eilat, 8858503, Israel</p>
                    <p class="sub-title">Địa chỉ tốt — 8.5</p>
                    <div class="apartment-desc">
                        <div class="d-flex">
                            <p class="point">9.1</p>
                            <p>Tuyệt vời</p>
                            <p class="review">- 1,272 reviews</p>
                        </div>
                        <div class="d-flex">
                            <p class="me-2"><i class="fa-solid fa-paw" style="color: #000000;"></i></p>
                            <p class="me-3">Pet friendly</p>
                            <p class="me-2"><i class="fa-solid fa-wifi" style="color: #000000;"></i></p>
                            <p class="me-3">Free wifi</p>
                            <p class="me-2"><i class="fa-solid fa-square-parking" style="color: #000000;"></i></p>
                            <p>Parking</p>
                        </div>
                    </div>
                </div>
                <div class="booking-detail mb-3">
                    <h1 class="fs-6">Chi tiết đặt phòng</h1>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="check-in">
                                <p class="bold-title">Ngày nhận phòng</p>
                                <h1 class="fs-6">Wed, Aug 30, 2023</h1>
                                <p>Form 3:00 PM</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="check-out">
                                <p class="bold-title">Ngày trả phòng</p>
                                <h1 class="fs-6">Wed, Aug 30, 2023</h1>
                                <p>Until 3:00 PM</p>
                            </div>
                        </div>
                    </div>
                    <p class="bold-title">Tổng thời gian lưu trú:</p>
                    <p class="bold-title">1 Night</p>
                    <hr>
                    <div class="selected">
                        <div class="d-flex">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseOne" aria-expanded="false"
                                            aria-controls="flush-collapseOne">
                                            <div class="detail-people fs-6">
                                                <p>Bạn lựa chọn</p>
                                                <p>1 phòng cho 2 người lớn</p>
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>1 x Studio Apartment with Balcony</p>
                                            <p>2 adults</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <a href="">Thay đổi</a>
                </div>
                <div class="summary mb-3">
                    <h1 class="fs-6">Thành tiền</h1>
                    <hr>
                    <div class="total">
                        <div class="row">
                            <div class="col-md-3 text-start">
                                <h1 class="fs-5">Tổng cộng</h1>
                            </div>
                            <div class="col-md-9 text-end">
                                <h1 class="fs-5">VND 3,950,864</h1>
                                <p class="mb-2">Bao gồm thuế và phí</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cancel mb-3">
                    <h1 class="fs-6">Chi phí hủy bỏ</h1>
                    <div class="row">
                        <div class="col-md-7 text-start">
                            <p>Nếu hủy bỏ, sẽ phải trả</p>
                        </div>
                        <div class="col-md-5 text-start">
                            <p>VND 3,950,864 *</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 pt-3 pb-3">
                <div class="details mb-3">
                    <h1 class="fs-6">Nhập thông tin của bạn</h1>
                    <div class="warning mb-3">
                        <div class="d-flex">
                            <p><i class="fa-solid fa-circle-exclamation me-3" style="color: #000000;"></i></p>
                            <p>Sắp hoàn tất! Chỉ cần điền * thông tin bắt buộc
                            </p>
                        </div>
                    </div>
                    <div class="d-flex pt-2">
                        <div class="input-container me-3">
                            <label for="first-name" class="bold-title">Họ</label>
                            <input type="text" id="full-name" placeholder="Nhập họ của bạn">
                        </div>
                        <div class="input-container">
                            <label for="last-name" class="bold-title">Tên</label>
                            <input type="text" id="full-name" placeholder="Nhập tên của bạn">
                        </div>
                    </div>
                    <div class="input-container me-3">
                        <label for="gmail" class="bold-title">Gmail</label>
                        <input type="email" id="gmail" placeholder="Địa chỉ gmail" class="small-input">
                    </div>
                    <div class="bold-title mb-3">Bạn đặt phòng cho ai?</div>
                    <div class="d-flex">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="travel-purpose" id="work-yes">
                            <label class="form-check-label" for="myself">Cho bạn
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="travel-purpose" id="work-no">
                            <label class="form-check-label" for="other">Cho người khác
                            </label>
                        </div>
                    </div>
                </div>
                <div class="details-hotel mb-3">
                    <h1 class="fs-6 pb-3">Studio Apartment with Balcony</h1>
                    <div class="details-hotel-detail">
                        <div class="d-flex">
                            <div class="col-md-1 text-start">
                                <p> <i class="fa-regular fa-circle-xmark" style="color: #000000;"></i>
                                </p>
                            </div>
                            <div class="col-md-2 text-start">
                                <p>Không hoàn trả</p>
                            </div>
                            <div class="col-md-1 text-start">
                                <a href=""><i class="fa-regular fa-circle-question" style="color: #4095D1;"></i>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="col-md-1 text-start">
                                <p><i class="fa-solid fa-check" style="color: #2eff58;"></i></p>
                            </div>
                            <div class="col-md-11 text-start">
                                <p>Linh hoạt dời lịch nếu kế hoạch thay đổi</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="col-md-1 text-start">
                                <p> <i class="fa-solid fa-person" style="color: #000000;"></i>
                                </p>
                            </div>
                            <div class="col-md-2 text-start">
                                <p>Khách: 2 người lớn</p>
                            </div>
                            <div class="col-md-1 text-start">
                                <a href=""><i class="fa-regular fa-circle-question" style="color: #4095D1;"></i>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="col-md-1 text-start">
                                <p> <i class="fa-solid fa-ban-smoking" style="color: #000000;"></i>
                                </p>
                            </div>
                            <div class="col-md-2 text-start">
                                <p>Không hút thuốc</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rule  mb-3">
                    <h1 class="fs-6 pb-3">Your arrival time
                    </h1>
                    <p>Chủ nhà muốn bạn đồng ý với các nội quy nhà sau:
                    </p>
                    <p>- Không hút thuốc
                    </p>
                    <p>- Không tiệc tùng
                    </p>
                    <p>- Giữ yên lặng từ 11h đêm đến 7h sáng
                    </p>
                    <div class="bold-title mb-3">Bằng cách tiếp tục sang bước tiếp theo, bạn đồng ý với các quy tắc chung
                        này.
                    </div>

                </div>
                <div class="submit-form ">
                    <button class="Btn">
                        Pay
                        <svg class="svgIcon" viewBox="0 0 576 512">
                            <path
                                d="M512 80c8.8 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0 24-10.7 24-24s-10.7-24-24-24H248z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>

        </div>
    </section>
@endsection
