<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\NhanVien;
use App\CuaHang;

class NhanVienController extends Controller
{
    public function index()
    {
        $response['active'] = 'nhan-vien';
        $response['nhanvien'] = NhanVien::get();
        $response['cuahang'] = CuaHang::get(['id','name']);
        return view('Admin.nhan-vien')->with($response);
    }

    function add(Request $rq){
        $data = $rq->all();
        $nv = new NhanVien();
        $nv->full_name = $data['fullname'];
        $nv->birthday = $data['birthday'];
        $nv->address = $data['address'];
        $nv->mobile = $data['mobile'];
        $nv->cuahang_id = $data['cuahang'];

        return json_encode($nv->save());
    }
}
