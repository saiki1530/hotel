@extends('layouts\layoutAD')

@section('title')
    Admin
@endsection

@section('noidung')
    <!-- phần giao diện -->
    <div class="container-fluid page-body-wrapper">
        <!-- sidebar -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <!-- Bảng điều khiển -->
                <li class="nav-item">
                    <a class="nav-link" href="/admin/dashboard">
                        <i class="mdi mdi-home menu-icon"></i>
                        <span class="menu-title">Bảng điều khiển</span>
                    </a>
                </li>
                <!-- Quản lý -->
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                        aria-controls="ui-basic">
                        <i class="mdi mdi-circle-outline menu-icon"></i>
                        <span class="menu-title">Quản lý</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="/admin/allsp">Quản lý sản phẩm</a></li>
                            <li class="nav-item"> <a class="nav-link" href="/admin/allus">Quản Lý người dùng</a></li>
                        </ul>
                    </div>
                </li>
                <!-- Đơn hàng -->
                <li class="nav-item">
                    <a class="nav-link" href="/admin/allorder">
                        <i class="mdi mdi-view-headline menu-icon"></i>
                        <span class="menu-title">Đơn hàng</span>
                    </a>
                </li>
                <!-- Biểu đồ -->
                <li class="nav-item">
                    <a class="nav-link" href="pages/charts/chartjs.html">
                        <i class="mdi mdi-chart-pie menu-icon"></i>
                        <span class="menu-title">Biểu đồ</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- phần giao diện chính -->
        <div class="main-panel">
            <div class="content-wrapper">
                <!-- hàng 1 -->
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="d-flex justify-content-between flex-wrap">
                            <div class="d-flex align-items-end flex-wrap">
                                <div class="mr-md-3 mr-xl-5">
                                    <h2>Xin chào
                                        <?php
                                        $name = Auth::user()->name;
                                        $lastWord = strrchr($name, ' ');
                                        if ($lastWord !== false) {
                                            $lastWord = trim($lastWord);
                                        } else {
                                            $lastWord = $name;
                                        }
                                        echo $lastWord;
                                        ?>!</h2>
                                    <p class="mb-md-0">Chúc {{ $lastWord }} có một ngày tràn đầy năng lượng!</p>
                                </div>
                                <div class="d-flex">
                                    <i class="mdi mdi-home text-muted hover-cursor"></i>
                                    <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Bảng điều khiển&nbsp;/&nbsp;</p>
                                    <p class="text-primary mb-0 hover-cursor">Phân tích số liệu</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                <button type="button" class="btn btn-light bg-white btn-icon mr-3 d-none d-md-block ">
                                    <i class="mdi mdi-download text-muted"></i>
                                </button>
                                <button type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">
                                    <i class="mdi mdi-clock-outline text-muted"></i>
                                </button>
                                <button type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">
                                    <i class="mdi mdi-plus text-muted"></i>
                                </button>
                                <button class="btn btn-primary mt-2 mt-xl-0">Tải báo cáo</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- hàng 2 -->
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body dashboard-tabs p-0">
                                <ul class="nav nav-tabs px-4" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview"
                                            role="tab" aria-controls="overview" aria-selected="true">Tổng quan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="sales-tab" data-toggle="tab" href="#sales" role="tab"
                                            aria-controls="sales" aria-selected="false">Sản phẩm</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="purchases-tab" data-toggle="tab" href="#purchases"
                                            role="tab" aria-controls="purchases" aria-selected="false">Đơn hàng</a>
                                    </li>
                                </ul>
                                <div class="tab-content py-0 px-0">
                                    <!-- tab tổng quan -->
                                    <div class="tab-pane fade show active" id="overview" role="tabpanel"
                                        aria-labelledby="overview-tab">
                                        <div class="d-flex flex-wrap justify-content-xl-between">
                                            <!-- Thông tin cập nhật -->
                                            <div
                                                class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                                <i class="mdi mdi-calendar-heart icon-lg mr-3 text-primary"></i>
                                                <div class="d-flex flex-column justify-content-around">
                                                    <small class="mb-1 text-muted">Ngày cập nhật gần nhất</small>
                                                    <div class="dropdown">
                                                        <a class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium"
                                                            href="#" role="button" id="dropdownMenuLinkA"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <h5 class="mb-0 d-inline-block">6 Tháng 8, 2023</h5>
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLinkA">
                                                            <a class="dropdown-item" href="#">5 Tháng 8, 2023</a>
                                                            <a class="dropdown-item" href="#">4 Tháng 8, 2023</a>
                                                            <a class="dropdown-item" href="#">3 Tháng 8, 2023</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Thống kê tổng user -->
                                            <div
                                                class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                                <i class="bi bi-person-fill mr-3 icon-lg text-success"></i>
                                                <div class="d-flex flex-column justify-content-around">
                                                    <small class="mb-1 text-muted">Tổng người dùng</small>
                                                    <h5 class="mr-2 mb-0">{{ $tong_user }}</h5>
                                                </div>
                                            </div>
                                            <!-- Thống kê tổng sản phẩm -->
                                            <div
                                                class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">

                                                <i class="bi bi-boxes mr-3 icon-lg text-warning"></i>
                                                <div class="d-flex flex-column justify-content-around">
                                                    <small class="mb-1 text-muted">Tổng sản phẩm</small>
                                                    <h5 class="mr-2 mb-0">{{ $tongsp }}</h5>
                                                </div>
                                            </div>
                                            <!-- Thống kê tổng đơn hàng -->
                                            <div
                                                class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                                <i class="bi bi-basket-fill mr-3 icon-lg text-danger"></i>

                                                <div class="d-flex flex-column justify-content-around">
                                                    <small class="mb-1 text-muted">Tổng đơn hàng</small>
                                                    <h5 class="mr-2 mb-0">{{ $tong_order }}</h5>
                                                </div>
                                            </div>
                                            <!-- Thống kê tổng lượt xem -->
                                            <div
                                                class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                                <i class="mdi mdi-eye mr-3 icon-lg text-danger"></i>
                                                <div class="d-flex flex-column justify-content-around">
                                                    <small class="mb-1 text-muted">Tổng lượt xem</small>
                                                    <h5 class="mr-2 mb-0">{{ $tonglx }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- tab sản phẩm -->
                                    <div class="tab-pane fade" id="sales" role="tabpanel"
                                        aria-labelledby="sales-tab">
                                        <div class="d-flex flex-wrap justify-content-xl-between">
                                            <!-- Thông tin cập nhật -->
                                            <div
                                                class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                                <i class="mdi mdi-calendar-heart icon-lg mr-3 text-primary"></i>
                                                <div class="d-flex flex-column justify-content-around">
                                                    <small class="mb-1 text-muted">Ngày cập nhật gần nhất</small>
                                                    <div class="dropdown">
                                                        <a class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium"
                                                            href="#" role="button" id="dropdownMenuLinkA"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <h5 class="mb-0 d-inline-block">6 Tháng 8, 2023</h5>
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLinkA">
                                                            <a class="dropdown-item" href="#">5 Tháng 8, 2023</a>
                                                            <a class="dropdown-item" href="#">4 Tháng 8, 2023</a>
                                                            <a class="dropdown-item" href="#">3 Tháng 8, 2023</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Thống kê tổng sản phẩm -->
                                            <div
                                                class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                                <i class="bi bi-boxes mr-3 icon-lg text-warning"></i>
                                                <div class="d-flex flex-column justify-content-around">
                                                    <small class="mb-1 text-muted">Tổng sản phẩm</small>
                                                    <h5 class="mr-2 mb-0">{{ $tongsp }}</h5>
                                                </div>
                                            </div>
                                            <!-- Đang cập nhật -->
                                            <div
                                                class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                                <i class="bi bi-eye-fill mr-3 icon-lg text-success"></i>
                                                <div class="d-flex flex-column justify-content-around">
                                                    <small class="mb-1 text-muted">Đang cập nhật</small>
                                                    <h5 class="mr-2 mb-0">....</h5>
                                                </div>
                                            </div>
                                            <!-- Đang cập nhật -->
                                            <div
                                                class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                                <i class="bi bi-basket-fill mr-3 icon-lg text-danger"></i>
                                                <div class="d-flex flex-column justify-content-around">
                                                    <small class="mb-1 text-muted">Đang cập nhật</small>
                                                    <h5 class="mr-2 mb-0">....</h5>
                                                </div>
                                            </div>
                                            <!-- Đang cập nhật -->
                                            <div
                                                class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                                <i class="mdi mdi-flag mr-3 icon-lg text-danger"></i>
                                                <div class="d-flex flex-column justify-content-around">
                                                    <small class="mb-1 text-muted">Đang cập nhật</small>
                                                    <h5 class="mr-2 mb-0">....</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- tab đơn hàng -->
                                    <div class="tab-pane fade" id="purchases" role="tabpanel"
                                        aria-labelledby="purchases-tab">
                                        <div class="d-flex flex-wrap justify-content-xl-between">
                                            <!-- Thông tin cập nhật -->
                                            <div
                                                class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                                <i class="mdi mdi-calendar-heart icon-lg mr-3 text-primary"></i>
                                                <div class="d-flex flex-column justify-content-around">
                                                    <small class="mb-1 text-muted">Ngày cập nhật gần nhất</small>
                                                    <div class="dropdown">
                                                        <a class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium"
                                                            href="#" role="button" id="dropdownMenuLinkA"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <h5 class="mb-0 d-inline-block">6 Tháng 8, 2023</h5>
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLinkA">
                                                            <a class="dropdown-item" href="#">5 Tháng 8, 2023</a>
                                                            <a class="dropdown-item" href="#">4 Tháng 8, 2023</a>
                                                            <a class="dropdown-item" href="#">3 Tháng 8, 2023</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Thống kê tổng đơn hàng -->
                                            <div
                                                class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                                <i class="bi bi-basket-fill mr-3 icon-lg text-danger"></i>
                                                <div class="d-flex flex-column justify-content-around">
                                                    <small class="mb-1 text-muted">Tổng đơn hàng</small>
                                                    <h5 class="mr-2 mb-0">{{ $tong_order }}</h5>
                                                </div>
                                            </div>
                                            <!-- Đã giao -->
                                            <div
                                                class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                                <i class="bi bi-check2-circle mr-3 icon-lg text-success"></i>
                                                <div class="d-flex flex-column justify-content-around">
                                                    <small class="mb-1 text-muted">Đã giao</small>
                                                    <h5 class="mr-2 mb-0">0</h5>
                                                </div>
                                            </div>
                                            <!-- Đang vận chuyển -->
                                            <div
                                                class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                                <i class="bi bi-truck mr-3 icon-lg text-warning"></i>
                                                <div class="d-flex flex-column justify-content-around">
                                                    <small class="mb-1 text-muted">Đang vận chuyển</small>
                                                    <h5 class="mr-2 mb-0">0</h5>
                                                </div>
                                            </div>
                                            <!-- Đơn hàng trong kho -->
                                            <div
                                                class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                                <i class="mdi mdi-flag mr-3 icon-lg text-danger"></i>
                                                <div class="d-flex flex-column justify-content-around">
                                                    <small class="mb-1 text-muted">Đơn hàng trong kho</small>
                                                    <h5 class="mr-2 mb-0">0</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- hàng 3 -->
                <div class="row">
                    <div class="col-md-7 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title">Tiền gửi</p>
                                <p class="mb-4">Để bắt đầu viết blog, hãy nghĩ về một chủ đề và trước tiên brainstorm các cách để viết chi tiết</p>
                                <div id="cash-deposits-chart-legend" class="d-flex justify-content-center pt-3"></div>
                                <canvas id="cash-deposits-chart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title">Tổng doanh thu</p>
                                <h1>{{ number_format($tt_order, 0, ',', '.') }}₫</h1>
                                <h4>Tổng doanh thu qua các năm</h4>
                                <p class="text-muted">Ngày nay, nhiều người dựa vào máy tính để làm bài tập về nhà, làm việc và sáng tạo.
                                    hoặc lưu trữ thông tin hữu ích. Vì vậy, điều quan trọng là</p>
                                <div id="total-sales-chart-legend"></div>
                            </div>
                            <canvas id="total-sales-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- phần footer -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Bản quyền © 2023 <a
                            href="https://www.urbanui.com/" target="_blank">VietNam</a>. Tất cả quyền được bảo lưu.</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><i
                            class="mdi mdi-heart text-danger"></i></span>
                </div>
            </footer>
            <!-- phần footer -->
        </div>
    </div>
    <!-- phần giao diện -->
@endsection
