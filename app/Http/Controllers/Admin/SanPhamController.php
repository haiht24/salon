<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\SanPham;

class SanPhamController extends Controller
{
    public function index()
    {
        $response['active'] = 'san-pham';
        $response['sanpham'] = SanPham::get();
        return view('Admin.san-pham')->with($response);
    }

    function add(Request $rq){
        $data = $rq->all();
        $sp = new SanPham();
        $sp->name = $data['name'];
        $sp->price_in = (int)$data['price_in'];
        $sp->price_out = (int)$data['price_out'];
        $sp->quantity = (int)$data['quantity'];
        $sp->description = $data['description'];
        $sp->unit = $data['unit'];

        return json_encode($sp->save());
    }
}
