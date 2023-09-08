<!DOCTYPE html>
<html lang="vi">

<head>
    <!-- Thẻ meta bắt buộc -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Majestic Admin</title>
    <!-- Thư viện CSS -->
    <link rel="stylesheet" href="/admin/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/admin/vendors/base/vendor.bundle.base.css">
    <!-- Kết thúc chèn CSS -->
    <!-- Thư viện CSS cho trang này -->
    <link rel="stylesheet" href="/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <!-- Kết thúc thư viện CSS cho trang này -->
    <!-- Chèn CSS -->
    <link rel="stylesheet" href="/admin/css/style.css">

    <!-- Kết thúc chèn CSS -->
    <link rel="shortcut icon" href="/admin/images/favicon.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>

<body>
    <div class="container-scroller">
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex justify-content-center">
                <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
                    <a class="navbar-brand brand-logo" href="/admin/dashboard"><img src="/admin/images/logo.svg"
                            alt="logo" /></a>
                    <a class="navbar-brand brand-logo-mini" href="/admin/dashboard"><img
                            src="/admin/images/logo-mini.svg" alt="logo" /></a>
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-toggle="minimize">
                        <span class="mdi mdi-sort-variant"></span>
                    </button>
                </div>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <ul class="navbar-nav mr-lg-4 w-100">
                    <li class="nav-item nav-search d-none d-lg-block w-100">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="search">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Tìm kiếm" aria-label="search"
                                aria-describedby="search">
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown mr-1">
                        <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center"
                            id="messageDropdown" href="#" data-toggle="dropdown">
                            <i class="mdi mdi-message-text mx-0"></i>
                            <span class="count"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="messageDropdown">
                            <p class="mb-0 font-weight-normal float-left dropdown-header">Tin nhắn</p>
                            <a class="dropdown-item">
                                <div class="item-thumbnail">
                                    <img src="/admin/images/faces/face4.jpg" alt="image" class="profile-pic">
                                </div>
                                <div class="item-content flex-grow">
                                    <h6 class="ellipsis font-weight-normal">David Grey
                                    </h6>
                                    <p class="font-weight-light small-text text-muted mb-0">
                                        Cuộc họp đã bị hủy
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item">
                                <div class="item-thumbnail">
                                    <img src="/admin/images/faces/face2.jpg" alt="image" class="profile-pic">
                                </div>
                                <div class="item-content flex-grow">
                                    <h6 class="ellipsis font-weight-normal">Tim Cook
                                    </h6>
                                    <p class="font-weight-light small-text text-muted mb-0">
                                        Ra mắt sản phẩm mới
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item">
                                <div class="item-thumbnail">
                                    <img src="/admin/images/faces/face3.jpg" alt="image" class="profile-pic">
                                </div>
                                <div class="item-content flex-grow">
                                    <h6 class="ellipsis font-weight-normal"> Johnson
                                    </h6>
                                    <p class="font-weight-light small-text text-muted mb-0">
                                        Cuộc họp ban điều hành sắp tới
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown mr-4">
                        <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown"
                            id="notificationDropdown" href="#" data-toggle="dropdown">
                            <i class="mdi mdi-bell mx-0"></i>
                            <span class="count"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="notificationDropdown">
                            <p class="mb-0 font-weight-normal float-left dropdown-header">Thông báo</p>
                            <a class="dropdown-item">
                                <div class="item-thumbnail">
                                    <div class="item-icon bg-success">
                                        <i class="mdi mdi-information mx-0"></i>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <h6 class="font-weight-normal">Lỗi ứng dụng</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        Ngay bây giờ
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item">
                                <div class="item-thumbnail">
                                    <div class="item-icon bg-warning">
                                        <i class="mdi mdi-settings mx-0"></i>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <h6 class="font-weight-normal">Cài đặt</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        Tin nhắn riêng
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item">
                                <div class="item-thumbnail">
                                    <div class="item-icon bg-info">
                                        <i class="mdi mdi-account-box mx-0"></i>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <h6 class="font-weight-normal">Đăng ký người dùng mới</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        2 ngày trước
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"
                            id="profileDropdown">
                            <img src="{{ Auth::user()->hinh }}" alt="profile" style="display:inline;" />
                            <span class="nav-profile-name">{{ Auth::user()->name }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="mdi mdi-settings text-primary"></i>
                                Cài đặt
                            </a>
                            <a class="dropdown-item" href="/">
                                <b><i class="bi bi-shop text-primary"></i></b>
                                Cửa hàng
                            </a>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')" class=" dropdown-item nav-link"
                                    onclick="event.preventDefault();
                                            this.closest('form').submit(); ">
                                    <i class="mdi mdi-logout text-primary"></i>{{ __('Đăng xuất') }}
                                </x-dropdown-link>
                            </form>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>

        @yield('noidung')

    </div>
    <!-- container-scroller -->

    <!-- Thư viện JavaScript -->
    <script src="/admin/vendors/base/vendor.bundle.base.js"></script>
    <!-- Kết thúc chèn thư viện JavaScript -->
    <!-- Thư viện JavaScript cho trang này -->
    <script src="/admin/vendors/chart.js/Chart.min.js"></script>
    <script src="/admin/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <!-- Kết thúc thư viện JavaScript cho trang này -->
    <!-- Chèn JavaScript -->
    <script src="/admin/js/off-canvas.js"></script>
    <script src="/admin/js/hoverable-collapse.js"></script>
    <script src="/admin/js/template.js"></script>
    <!-- Kết thúc chèn JavaScript -->
    <!-- JavaScript tùy chỉnh cho trang này -->
    <script src="/admin/js/dashboard.js"></script>
    <script src="/admin/js/data-table.js"></script>
    <script src="/admin/js/jquery.dataTables.js"></script>
    <script src="/admin/js/dataTables.bootstrap4.js"></script>
    <!-- Kết thúc JavaScript tùy chỉnh cho trang này -->
</body>

</html>
