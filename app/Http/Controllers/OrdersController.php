<?php

namespace App\Http\Controllers;

use App\Models\donhang;
use App\Models\san_pham;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function success()
    {
        echo 'Thanh toán thành công';
    }
    public function cancel()
    {
        echo 'Thanh toán thất bại';
    }
    public function checkout()
    {
        $cart = session('cart');
        $line_items = [];
        foreach ($cart as $item) {
            $line_items[] = [
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => $item['tenSP'],
                    ],
                    'unit_amount' => $item['gia_goc'],
                ],
                'quantity' => $item['so_luong'],
            ];
        }

        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET_KEY'));
        $checkout_session = $stripe->checkout->sessions->create([
            'line_items' => $line_items,
            'mode' => 'payment',
            'success_url' => route('success', [], true),
            'cancel_url' => route('cancel', [], true),
        ]);

        return redirect($checkout_session->url);
        // echo '<pre>';
        // print_r($cart);
        // echo '</pre>';
    }

    function cart()
    {
        // $sanpham = DB::table('sanpham')->get();



        return view('page.cart');
    }
    // public function addcart(Request $req, $id) {

    //     $sanpham = DB::table('sanpham')
    //     ->where('id_sp',$id)->first();
    //     if ($sanpham!=null) {
    //         if (Session('cart') !=null)
    //         $oldCart = Session('cart') ? Session('cart') : null;;
    //         $newCart = new Cart($oldCart);
    //         $newCart->addcart($sanpham,$id);
    //         $req->session()->put('cart',$newCart);

    //     }
    //  return view('giaodien.cart',compact('newCart'));

    // }
    public function addcart($id)
    {
        $sanpham = san_pham::findOrFail($id);

        $cart = session()->get('cart', []);
        if (!isset($cart[$id])) {
            $cart[$id] = [
                "tenSP" => $sanpham->tenSP,
                "anh" => $sanpham->anh,
                "gia_goc" => $sanpham->gia_goc,
                "so_luong" => 1
            ];
        } else {
            $cart[$id]['so_luong']++;
        }

        session()->put('cart', $cart);
        // dd($cart);
        return redirect()->back();
    }
    public function removeFromCart($id)
    {
        // Lấy giỏ hàng từ session
        $cart = session()->get('cart');

        // Xóa sản phẩm khỏi giỏ hàng nếu tồn tại
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        // Redirect hoặc trả về view tùy theo yêu cầu của bạn
        return redirect()->route('cart'); // Ví dụ: quay trở lại trang giỏ hàng
    }

    public function updateCart(Request $request)
    {
        $ids = $request->input('id');
        $quantities = $request->input('so_luong');

        foreach ($ids as $index => $id) {
            $quantity = $quantities[$index];

            // Perform any validation on the quantity if needed

            // Update the quantity for the product in the cart
            if ($quantity > 0) {
                session()->put("cart.$id.so_luong", $quantity);
            } else {
                // If quantity is 0 or negative, remove the product from the cart
                session()->forget("cart.$id");
            }
        }

        return redirect()->back();
    }
    public function session(Request $request)
    {
        $user_id = auth()->user()->id; // Lấy ID người dùng đã đăng nhập
        $cartItems = session('cart');
        $totalAmount = 0;
        if ($cartItems !== null) {
            foreach ($cartItems as $id => $details) {
                $totalAmount += $details['gia_goc'] * $details['so_luong'];
            }
        }

        // Tạo đơn hàng
        $order = donhang::create([
            'id_user' => $user_id,
            'tongtien' => $totalAmount,
            'id_lp' => $request->input('id_lp'),
            'thoidiemmua' => now(),
            'tennguoinhan' => $request->input('tennguoinhan'),
            'dienthoai' => $request->input('dienthoai'),
            'diachigiaohang' => $request->input('diachigiaohang')
        ]);
        if ($cartItems !== null) {
            foreach ($cartItems as $id => $details) {
                $order->items()->create([
                    'id' => $id,
                    'tenSP' => $details['tenSP'],
                    'so_luong' => $details['so_luong'],
                    'gia_goc' => $details['gia']
                ]);
            }
        } else {
            return back();
        }


        // Xóa giỏ hàng sau khi tạo đơn hàng
        session()->forget('cart');

        return redirect()->back()->with('success', 'Đơn hàng đã được tạo thành công.');

}

}
