@extends('layouts\layoutAD')

@section('title')
    Quản lý sản phẩm
@endsection

@section('noidung')
<style></style>
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
                <a class="nav-link" href="/admin/allorder">
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
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Sản phẩm</h2>
                            <p class="card-description">
                                <a href="/admin/products/create" style="text-decoration: none;"><i class="bi bi-patch-plus"></i> Thêm sản phẩm</a>
                            </p>
                            <div class="table-responsive pt-3">
                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th>
                                                #
                                            </th>
                                            <th colspan="2">
                                                Tên sản phẩm
                                            </th>
                                            <th>
                                                Giá cũ
                                            </th>
                                            <th>
                                                Giá khuyến mãi
                                            </th>
                                            <th colspan="2">
                                                Hành động
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $i = 1 @endphp
                                        @foreach ($sanpham as $product)
                                            <tr>
                                                <td>
                                                    {{ $i }}
                                                </td>
                                                <td>
                                                    {{ trim(substr($product->tenSP, 0, 10)) }}
                                                </td>
                                                <td>
                                                    <center>
                                                        @if ($product->anh)
                                                            <img src="{{ asset('storage/'.$product->anh) }}" alt="{{ $product->anh }}" width="100" height="100">
                                                        @endif
                                                    </center>
                                                </td>
                                                <td>
                                                    {{ number_format($product->gia_goc) }}đ
                                                </td>
                                                <td>
                                                    {{ number_format($product->gia_khuyen_mai) }}đ
                                                </td>
                                                <td>
                                                    <a href="{{ url('admin/editss', $product->id) }}"><i class="bi bi-pen" style="font-size: 23px"></i></a>
                                                </td>
                                                <td>
                                                    <a href="{{ url('admin/xoa', $product->id) }}"><i class="bi bi-trash" style="font-size: 23px"></i></a>
                                                </td>
                                            </tr>
                                            @php $i++ @endphp
                                        @endforeach

                                    </tbody>
                                </table>

                                <!-- Hiển thị phân trang -->
                                <div class="pagination justify-content-center">
                                    {{ $sanpham->links('pagination::bootstrap-4') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a
                        href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i
                        class="mdi mdi-heart text-danger"></i></span>
            </div>
        </footer>
        <!-- partial -->
    </div>
    <!-- main-panel ends -->
</div>

@endsection
<!-- JavaScript -->

