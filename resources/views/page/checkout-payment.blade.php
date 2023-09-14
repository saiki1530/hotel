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
                    <h1 class="fs-6">Enter your details</h1>
                    <div class="warning mb-3">
                        <div class="d-flex">
                            <p><i class="fa-solid fa-circle-exclamation me-3" style="color: #000000;"></i></p>
                            <p>Almost done! Just fill in the * required info</p>
                        </div>
                    </div>
                    <div class="country">
                        <div class="row">
                            <div class="col-7">
                                <label for="time-select" class="bold-title"> Vui lòng nhập số điện thoại: </label>
                                <div class="form-outline mb-3" style="width: 100%; max-width: 22rem">
                                    <input type="text" id="phone" class="form-control"
                                        data-mdb-input-mask="+48 999-999-999" />
                                </div>
                            </div>
                            <div class="col-5 ps-5">
                                <div class="mini-profile">
                                    <h1 class="fs-6">
                                        Name
                                    </h1>
                                    <p>Lê Gia Nhật</p>
                                    <h1 class="fs-6">
                                        Email
                                    </h1>
                                    <p>Lê Gia Nhật</p>
                                    <a href="#">Change</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="container">
                        <div class="card-title">
                            <h1 class="fs-1">Thanh toán</h1>
                        </div>
                        <div class="card-body">
                            <div class="payment-type">
                                <h4>Chọn phương thức thanh toán</h4>
                                <div class="types flex justify-space-between">
                                    <div class="type selected" data-payment-method="credit-card">
                                        <div class="logo">
                                            <i class="far fa-credit-card"></i>
                                        </div>
                                        <div class="text">
                                            <p>Thẻ ngân hàng</p>
                                        </div>
                                    </div>
                                    <div class="type" data-payment-method="paypal">
                                        <div class="logo">
                                            <i class="fab fa-paypal"></i>
                                        </div>
                                        <div class="text">
                                            <p>Momo</p>
                                        </div>
                                    </div>
                                    <div class="type">
                                        <div class="logo">
                                            <i class="fab fa-amazon"></i>
                                        </div>
                                        <div class="text">
                                            <p>Pay with Amazon</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="credit-card-section" style="display: none;">
                                <div class="payment-info flex justify-space-between">
                                    <div class="column billing">
                                        <div class="title">
                                            <h4>Thông tin thẻ</h4>
                                        </div>
                                        <div class="field full">
                                            <label for="name">Tên chủ thẻ* </label>
                                            <input id="name" type="text" placeholder="Tên chủ thẻ">
                                        </div>
                                        <div class="field full">
                                            <label for="address">Số thẻ* </label>
                                            <input id="address" type="text" placeholder="Số thẻ">
                                        </div>
                                        <div class="flex justify-space-between">
                                            <div class="field half">
                                                <label for="city">Ngày hết hạn* </label>
                                                <input id="expDate" type="text" pattern="(0[1-9]|1[0-2])\/\d{2}"
                                                    placeholder="MM/YY" required>
                                            </div>
                                            <div class="field half">
                                                <label for="state">CVC* </label>
                                                <input id="state" type="text" placeholder="Mã bảo mật">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="paypal-section" style="display: none;">
                                <div class="payment-info flex justify-space-between">
                                    <div class="column billing">
                                        Thanh toán bằng momo
                                    </div>
                                </div>
                            </div>
                            <div id="amazon-section" style="display: none;">
                                <div class="payment-info flex justify-space-between">
                                    <div class="column billing">
                                        Thanh toán bằng amazon
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-actions flex justify-space-between">
                            <div class="flex-start">
                                <button class="button button-secondary">Return to Store</button>
                            </div>
                            <div class="flex-end">
                                <div class="checkout">
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
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
