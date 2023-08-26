<?php

namespace App\Http\Controllers;


use App\Models\san_pham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\user;
use App\Models\donhang;

use App\Models\donhangchitiet;
use App\Models\loai_phong;

class AdminController extends Controller
{
    public function dashboard()
    {
        $tongsp = DB::table('san_pham')->count();
        // tổng lượt xem
        $tonglx = DB::table('san_pham')->sum('view');
        // tổng đơn hàng
        $tong_order = DB::table('donhang')->count();
        // tổng user
        $tong_user = DB::table('users')->count();

        $tt_order = DB::table('donhang')->sum('tongtien');

        return view('admin.dashboard', compact('tongsp', 'tonglx', 'tong_order', 'tong_user','tt_order'));
    }
    function allsp()
    {
        
        // $products=sanpham::take(10)->get();
        // $products = san_pham::orderBy('created_at', 'desc')->get();
        $sanpham = san_pham::orderBy('created_at', 'desc')->paginate(10);
        // $sanpham = sanpham::all();
        return view('admin/allsp', ['sanpham' => $sanpham]);
    }
    function allus()
    {
        // $products=sanpham::take(10)->get();
        $user = user::get();
        // $sanpham = sanpham::all();
        return view('admin/allus', ['user' => $user]);
    }



    function editss(Request $request, $id_sp)
    {
        $sanpham = san_pham::find($id_sp);
        if ($sanpham == null) return Redirect('/thongbao');
        return view('admin/editss', ['sanpham' => $sanpham]);
    }
    function editus(Request $request, $id)
    {
        $user = user::find($id);
        if ($user == null) return Redirect('/thongbao');
        return view('admin/editus', ['user' => $user]);
    }
    function updateus(Request $request, $id)
    {
        $user = user::find($id);
        if ($user == null) return Redirect('/thongbao');
        $user->name = $_POST['name'];

        // $sanpham->urlHinh = $_POST['upload/images/'.'urlHinh'];

        $user->hinh = '/upload/images/' . $_POST['hinh'];
        $user->email = $_POST['email'];
        $user->diachi = $_POST['diachi'];
        $user->save();
        return Redirect('admin/allus');
    }
    function editpq(Request $request, $id)
    {
        $user = user::find($id);
        if ($user == null) return Redirect('/thongbao');
        return view('admin/editus', ['user' => $user]);
    }
    function updatepq(Request $request, $id)
    {
        $user = User::find($id);
        if ($user == null) {
            return Redirect('/thongbao');
        }

        $user->role = $_POST['role']; // Giả sử giá trị role được gửi qua biểu mẫu là role mới
        $user->save();

        return Redirect('admin/allus');
    }

    function updateSanPham(Request $request, $id_sp)
    {
        $sanpham = san_pham::find($id_sp);
        if ($sanpham == null) return Redirect('/thongbao');
        $sanpham->ten_sp = $_POST['ten_sp'];
        $sanpham->gia = $_POST['gia'];
        // $sanpham->urlHinh = $_POST['upload/images/'.'urlHinh'];
        $sanpham->gia_km = $_POST['gia_km'];
        $sanpham->hinh = 'upload/images/' . $_POST['hinh'];
        $sanpham->save();
        return Redirect('admin/allsp');
    }

    // xóa
    function xoa($id)
    {
        $sanpham = san_pham::find($id);
        if ($sanpham == null) return Redirect('/thongbao');
        $sanpham->delete();
        return Redirect('admin/allsp');
    }
    // thêm
    public function create()
    {
        $categories = loai_phong::all();
        return view('admin.addsp', compact('categories'));
    }

    public function store(Request $request)
    {

        // Validate input data
        $validatedData = $request->validate([
            'id_lp' => 'required',
            'tenSP' => 'required',
            'anh' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'gia_goc' => 'required|numeric|min:0',
            'so_luong' => 'required|integer|min:0',
            'gia_khuyen_mai' => 'nullable|numeric|min:0',
            'tinh_trang' => 'required|in:Còn,Hết',
            'mo_ta' => 'nullable|string',
            'hot' => 'required|boolean',
            'rate' => 'required|numeric|min:1|max:5',
            'view' => 'required|integer|min:0',
        ]);

        // Upload image if provided
        $anhPath = null;
        if ($request->hasFile('anh')) {
            $anhPath = $request->anh->store('upload/img', 'public');
        }

        // Create new product
        san_pham::create([
            'id_lp' => $validatedData['id_lp'],
            'tenSP' => $validatedData['tenSP'],
            'anh' => $anhPath,
            'gia_goc' => $validatedData['gia_goc'],
            'so_luong' => $validatedData['so_luong'],
            'gia_khuyen_mai' => $validatedData['gia_khuyen_mai'],
            'tinh_trang' => $validatedData['tinh_trang'],
            'mo_ta' => $validatedData['mo_ta'],
            'hot' => $validatedData['hot'],
            'rate' => $validatedData['rate'],
            'view' => $validatedData['view'],
        ]);

        return redirect()->route('admin.allsp')->with('success', 'Product added successfully.');
    }

    public function donhang()
    {
        $donhang = san_pham::join('users', 'users.id', '=', 'donhang.id_user')
            ->select('donhang.*', 'users.name')
            ->paginate(10);
        return view('admin.allorder', compact('donhang'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function restore()
    {

        return redirect('admin/allorder');
    }
    public function restore_us()
    {

        return redirect('admin/allus');
    }

    function orderItem($id_dh)
    {
        $order = san_pham::with('items')->find($id_dh);

        if (!$order) {
            return redirect()->route('admin.allorder')->with('error', 'Không tìm thấy đơn hàng.');
        }

        $donhang = san_pham::join('users', 'users.id', '=', 'donhang.id_user')
            ->select('donhang.*', 'users.name')
            ->where('donhang.id_dh', $id_dh)
            ->first();

        // Lấy danh sách sản phẩm liên quan trong đơn hàng
        $sanphams = san_pham::join('donhangchitiet', 'donhangchitiet.id_sp', '=', 'sanpham.id_sp')
            ->whereIn('donhangchitiet.id_dh', [$id_dh])
            ->select('donhangchitiet.*', 'sanpham.hinh')
            ->get();

        return view('admin.orderItem', compact('order', 'donhang', 'sanphams'));
    }


    public function thayDoiTrangThai(Request $request)
    {
        $orderId = $request->input('id_dh');
        $newStatus = 0; // Thay đổi thành trạng thái 1 (Đang vận chuyển), bạn có thể thay đổi tùy theo trường hợp

        $order = donhang::findOrFail($orderId);

        if ($order) {
            if ($order->trangthai == 0) {
                $newStatus = 1;
            } elseif ($order->trangthai == 1) {
                $newStatus = 2;
            }

            $order->trangthai = $newStatus;
            $order->save();

            return redirect()->back();
        }
    }
}
