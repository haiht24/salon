<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\NhanVien;
use App\DichVu;
use App\SanPham;
use App\DonHang;
use App\User;
use DB;

class ChamCongController extends Controller
{
    public function index()
    {
        $response['active'] = 'doanh-thu';
        $response['donhang'] = DB::table('don_hang')
            ->leftJoin('nhan_vien AS nv', 'nv.id', '=', 'don_hang.nhanvien_id')
            ->leftJoin('dich_vu AS dv', 'dv.id', '=', 'don_hang.dichvu_id')
            ->leftJoin('san_pham AS sp', 'sp.id', '=', 'don_hang.sanpham_id')
            ->select('don_hang.*', 'nv.full_name', 'dv.name as dichvu_name', 'sp.name as sanpham_name')
            ->orderBy('don_hang.id', 'DESC')
            ->get();
        return view('Admin/doanh-thu')->with($response);
    }

    public function getData()
    {
        $response = [];
        $response['nhanvien'] = NhanVien::get(['id', 'full_name']);
        $response['dichvu'] = DichVu::orderBy('name', 'ASC')->get();
        $response['sanpham'] = SanPham::orderBy('name', 'ASC')->get();
        return $response;
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

        $result = $dh->save();
        return json_encode($result);
    }
}
