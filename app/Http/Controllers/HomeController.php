<?php

namespace App\Http\Controllers;

use App\CuaHang;
use App\Http\Requests;
use Illuminate\Http\Request;

use App\NhanVien;
use App\DichVu;
use App\SanPham;
use App\DonHang;
use App\User;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $user;
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $response['active'] = 'doanh-thu';
        $response['donhang'] = DB::table('don_hang')
            ->leftJoin('nhan_vien AS nv', 'nv.id', '=', 'don_hang.nhanvien_id')
            ->leftJoin('dich_vu AS dv', 'dv.id', '=', 'don_hang.dichvu_id')
            ->leftJoin('san_pham AS sp', 'sp.id', '=', 'don_hang.sanpham_id')
            ->leftJoin('users AS u', 'u.id', '=', 'don_hang.author')
            ->select('don_hang.*', 'nv.full_name', 'dv.name as dichvu_name', 'sp.name as sanpham_name', 'u.name as author')
            ->orderBy('don_hang.id', 'DESC')
            ->get();
        $response['nhanvien'] = NhanVien::get(['id', 'full_name']);
        $response['dichvu'] = DichVu::orderBy('name', 'ASC')->get(['id', 'name']);
        $response['sanpham'] = SanPham::orderBy('name', 'ASC')->get(['id', 'name']);
        $response['cuahang'] = CuaHang::get(['id', 'name']);

        return view('home')->with($response);
    }

    public function add(Request $rq)
    {
        $data = $rq->all();
        $dh = new DonHang();
        $dh->nhanvien_id = $data['nhanvien'];
        $dh->dichvu_id = $data['dichvu'];
        $dh->sanpham_id = $data['sanpham'];
        $dh->tien_dichvu = isset($data['tiendichvu']) ? $data['tiendichvu'] : 0;
        $dh->tien_sanpham = isset($data['tiensanpham']) ? $data['tiensanpham'] : 0;
        $dh->author = $this->user ? $this->user['id'] : 0;

        $result = $dh->save();
        return json_encode($result);
    }
}
