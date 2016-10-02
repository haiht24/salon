<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\DichVu;
use Auth;

class DichVuController extends Controller
{
    public function index()
    {
        $this->isAdmin();
        $response['active'] = 'dich-vu';
        $response['dichvu'] = DichVu::get();
        return view('Admin.dich-vu')->with($response);
    }

    function add(Request $rq){
        $data = $rq->all();
        $dv = new DichVu();
        $dv->name = $data['name'];
        $dv->price = (int)$data['price'];
        $dv->description = $data['description'];

        return json_encode($dv->save());
    }
}
