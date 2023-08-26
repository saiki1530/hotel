@extends('layouts\layoutAD')

@section('title')
    Quản lý sản phẩm
@endsection

@section('noidung')
<style>
    .primary-btn {
    /* Tùy chỉnh màu sắc nền và màu chữ */
    background-color: #3498db; /* Màu nền */
    color: #fff; /* Màu chữ */

    /* Tùy chỉnh font chữ và padding */
    font-size: 14px;
    font-weight: bold;
    padding: 10px 8px;

    /* Tùy chỉnh viền */
    border: none;
    border-radius: 5px;

    /* Hiệu ứng hover khi di chuột */
    transition: background-color 0.3s ease-in-out;
}

.primary-btn:hover {
    background-color: #2980b9; /* Màu nền khi di chuột qua */
}

</style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="/admin/dashboard">
                        <i class="mdi mdi-home menu-icon"></i>
                        <span class="menu-title">Bảng điều khiển</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                        aria-controls="ui-basic">
                        <i class="mdi mdi-circle-outline menu-icon"></i>
                        <span class="menu-title">Quản lý</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="../../admin/allsp">Quản lý sản phẩm</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../../admin/allus">Quản Lý người dùng</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/orders">
                        <i class="mdi mdi-view-headline menu-icon"></i>
                        <span class="menu-title">Đơn hàng</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/charts/chartjs.html">
                        <i class="mdi mdi-chart-pie menu-icon"></i>
                        <span class="menu-title">Charts</span>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="d-flex justify-content-between flex-wrap">
                            <div class="d-flex align-items-end flex-wrap">
                                <div class="mr-md-3 mr-xl-5">
                                    <h2>Welcome back,</h2>
                                    <p class="mb-md-0">Your analytics dashboard template.</p>
                                </div>
                                <div class="d-flex">
                                    <i class="mdi mdi-home text-muted hover-cursor"></i>
                                    <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                                    <p class="text-primary mb-0 hover-cursor">Analytics</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <ul class="nav nav-tabs" id="myTabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="tab1-tab" data-bs-toggle="tab" href="#tab1"
                                            role="tab" aria-controls="tab1" aria-selected="true">Đã thanh toán</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="tab2-tab" data-bs-toggle="tab" href="#tab2"
                                            role="tab" aria-controls="tab2" aria-selected="false">Đang vận chuyển</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="tab3-tab" data-bs-toggle="tab" href="#tab3"
                                            role="tab" aria-controls="tab3" aria-selected="false">Hoàn tất</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabsContent">
                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel"
                                        aria-labelledby="tab1-tab">
                                        <div class="table-responsive">
                                            <table id="tab1-listing" class="table">
                                                <thead>
                                                    <tr >
                                                        <th class="text-center">Mã đơn hàng</th>
                                                        <th>Tên người dùng</th>
                                                        <th>Thời điểm mua</th>
                                                        <th>Chi tiết đơn hàng</th>

                                                        <th>Trạng thái</th>
                                                        <th>Hoạt động</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($donhang as $product)
                                                        @if ($product->trangthai == 0)
                                                            <tr>
                                                                <td class="text-center">{{ $product->id_dh }}</td>
                                                                <td>{{ $product->name }}</td>
                                                                <td>{{ $product->thoidiemmua }}</td>
                                                                <td><a href="/admin/orderItem/{{$product->id_dh}}" style=" text-decoration: none;"><i class="bi bi-box-arrow-up-right"></i>Chi tiết đơn hàng</a></td>
                                                                <td>Chưa xác nhận</td>
                                                                <td>
                                                                    <form action="/admin/thaydoitrangthai" method="post">
                                                                        @csrf
                                                                        <input type="hidden" name="id_dh"
                                                                            value="{{ $product->id_dh }}">
                                                                        <button type="submit"  class="primary-btn">Xác
                                                                            nhận</button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                        @endif
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab2" role="tabpanel"
                                        aria-labelledby="tab2-tab">
                                        <div class="table-responsive">
                                            <table id="tab2-listing" class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Mã đơn hàng</th>
                                                        <th>Tên người dùng</th>
                                                        <th>Thời điểm mua</th>
                                                        <th>Chi tiết đơn hàng</th>
                                                        <th>Trạng thái</th>
                                                        <th>Hoạt động</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($donhang as $product)
                                                        @if ($product->trangthai == 1)
                                                            <tr>
                                                                <td class="text-center">{{ $product->id_dh }}</td>
                                                                <td>{{ $product->name }}</td>
                                                                <td>{{ $product->thoidiemmua }}</td>
                                                                <td><a href="/admin/orderItem/{{$product->id_dh}}" style=" text-decoration: none;"><i class="bi bi-box-arrow-up-right"></i>Chi tiết đơn hàng</a></td>
                                                                <td>Đang vận chuyển</td>
                                                                <td>
                                                                    <form action="/admin/thaydoitrangthai" method="post">
                                                                        @csrf
                                                                        <input type="hidden" name="id_dh"
                                                                            value="{{ $product->id_dh }}">
                                                                        <button type="submit" class="primary-btn">Hoàn
                                                                            tất</button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                        @endif
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab3" role="tabpanel"
                                        aria-labelledby="tab3-tab">
                                        <div class="table-responsive">
                                            <table id="tab3-listing" class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Mã đơn hàng</th>
                                                        <th>Tên người dùng</th>
                                                        <th>Thời điểm mua</th>
                                                        <th>Chi tiết đơn hàng</th>
                                                        <th>Trạng thái</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($donhang as $product)
                                                        @if ($product->trangthai == 2)
                                                            <tr>
                                                                <td class="text-center">{{ $product->id_dh }}</td>
                                                                <td>{{ $product->name }}</td>
                                                                <td>{{ $product->thoidiemmua }}</td>
                                                                <td><a href="/admin/orderItem/{{$product->id_dh}}" style=" text-decoration: none;"><i class="bi bi-box-arrow-up-right"></i>Chi tiết đơn hàng</a></td>
                                                                <td>Hoàn tất</td>
                                                                <td>

                                                                </td>
                                                            </tr>
                                                        @endif
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a
                            href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i
                            class="mdi mdi-heart text-danger"></i></span>
                </div>
            </footer>
        </div>
        <!-- main-panel ends -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
    </script>
@endsection
<!-- JavaScript -->
