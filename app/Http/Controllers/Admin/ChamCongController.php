<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\NhanVien;
use App\DichVu;
use App\SanPham;

class ChamCongController extends Controller
{
    public function index()
    {
        return view('Admin/cham-cong');
    }

    public function getData()
    {
        $response = [];
        $response['nhanvien'] = NhanVien::all();
        $response['dichvu'] = DichVu::orderBy('name', 'ASC')->get();
        $response['sanpham'] = SanPham::orderBy('name', 'ASC')->get();

        return $response;
    }

    public function add(Request $rq)
    {
        $data = $rq->all();
        return $data;
    }
}
