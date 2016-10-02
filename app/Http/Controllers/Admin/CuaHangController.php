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
        $this->isAdmin();
        $response['active'] = 'cua-hang';
        $response['cuahang'] = CuaHang::get();
        return view('Admin.cua-hang')->with($response);
    }

    function add(Request $rq){
        $data = $rq->all();
        $ch = new CuaHang();
        $ch->name = $data['name'];
        $ch->address = $data['address'];
        $ch->phone = $data['phone'];

        return json_encode($ch->save());
    }
}
