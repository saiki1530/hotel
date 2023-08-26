@extends('layouts.layoutAD')

@section('noidung')
    <div class="container-fluid page-body-wrapper">
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
                        <span class="menu-title">Biểu đồ</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <h4 class="card-title">Thêm sản phẩm</h4>

                                    <form class="forms-sample">
                                        <div class="form-group">
                                            <label for="tenSP">Tên sản phẩm</label>
                                            <input type="text" class="form-control" id="tenSP" name="tenSP" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="id_lp">Loại phòng</label>
                                            <select class="form-control" id="id_lp" name="id_lp" required>
                                                <option value="">Chọn loại phòng</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}" style="color: black">{{ $category->loaiphong }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="anh">Ảnh sản phẩm</label>
                                            <input type="file" class="form-control-file" id="anh" name="anh">
                                        </div>
                                        <div class="form-group">
                                            <label for="gia_goc">Giá gốc</label>
                                            <input type="number" class="form-control" id="gia_goc" name="gia_goc" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="so_luong">Số lượng</label>
                                            <input type="number" class="form-control" id="so_luong" name="so_luong" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="gia_khuyen_mai">Giá khuyến mãi</label>
                                            <input type="number" class="form-control" id="gia_khuyen_mai" name="gia_khuyen_mai">
                                        </div>
                                        <div class="form-group">
                                            <label for="tinh_trang">Tình trạng</label>
                                            <select class="form-control" id="tinh_trang" name="tinh_trang" required>
                                                <option value="Còn">Còn hàng</option>
                                                <option value="Hết">Hết hàng</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="mo_ta">Mô tả</label>
                                            <textarea class="form-control" id="mo_ta" name="mo_ta" rows="4"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="hot">Sản phẩm nổi bật</label>
                                            <select class="form-control" id="hot" name="hot" required>
                                                <option value="1">Có</option>
                                                <option value="0">Không</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="rate">Đánh giá</label>
                                            <input type="number" class="form-control" id="rate" name="rate" step="0.1"
                                                min="1" max="5" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="view">Lượt xem</label>
                                            <input type="number" class="form-control" id="view" name="view" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">Thêm</button>
                                        <button class="btn btn-light">Hủy</button>
                                    </form>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
