<?php

namespace App\Http\Controllers;

use App\Models\loai_phong;
use App\Models\san_pham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
class KhachSanController extends Controller
{
    public function __construct()
    {
        $loaiPhongs = loai_phong::all();
        View::share('loaiphong', $loaiPhongs);
    }
    public function index()
    {
        $viewsp = san_pham::orderBy('view', 'desc')->take(4)->get();

        return view('page.index',compact('viewsp'));
    }

    public function product()
    {
        $viewsp = san_pham::orderBy('view', 'desc')->take(4)->get();
        $sanphams = san_pham::paginate(16);
        return view('page.product',compact('viewsp','sanphams'));
    }
}
