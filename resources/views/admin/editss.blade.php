<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
<center>
    <H1 class="text-danger">Update sản phẩm</H1>
    <h1>{{ $sanpham->ten_sp }}</h1>
</center>
<div class="pt-5">
    <form action="/admin/editss/{{ $sanpham->id_sp }}" method="post" class="col-7 m-auto">
        <p> Tên sản phẩm: <input name="ten_sp" class="form-control" value="{{ $sanpham->ten_sp }}"> </p>
        <p> Giá: <input name="gia" class="form-control" value="{{ $sanpham->gia }}"> </p>
        <p> Giá khuyến mãi: <input name="gia_km" class="form-control" value="{{ $sanpham->gia_km }}"> </p>

        <img src='{{ $sanpham->hinh }}' width="100px">
        <p> urlHinh: <input type="file" name="hinh" class="form-control" value="{{ $sanpham->hinh }}"></p>


        <center>
            <p><button type="submit" class="bg-warning p-2">Cập nhật</button></p>
        </center>
        @csrf
    </form>
</div>



<!-- Nút mở modal -->
