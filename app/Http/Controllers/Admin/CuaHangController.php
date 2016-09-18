<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\CuaHang;

class CuaHangController extends Controller
{
    public function index()
    {
        $response['active'] = 'cua-hang';
        $response['cuahang'] = CuaHang::get();
        return view('Admin.cua-hang')->with($response);
    }
}
