<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\NhanVien;

class ChamCongController extends Controller
{
    public function index()
    {
        $data = [];
        $data['nhanvien'] = NhanVien::all();

        return view('Admin/cham-cong')->with($data);
    }
}
