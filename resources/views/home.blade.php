@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Thống kê</div>

                <div class="panel-body">
                    <div class="doanh-thu">
                        <div class="form-group ">
                            <button class="btn btn-warning" data-toggle="collapse" data-target="#frmAdd">Thêm mới</button>
                        </div>

                        <div id="frmAdd" class="collapse">
                            <form id="frmAddDoanhThu" action="{{ url('doanh-thu/add') }}" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="modal-body clearfix">
                                    {{--<div class="col-xs-12 ">--}}
                                        {{--<select class="form-control input-lg" name="cuahang">--}}
                                            {{--@if($cuahang)--}}
                                                {{--@foreach($cuahang as $ch)--}}
                                                    {{--<option value="{{ $ch['id'] }}">{{ $ch['name'] }}</option>--}}
                                                {{--@endforeach--}}
                                            {{--@endif--}}
                                        {{--</select>--}}
                                    {{--</div>--}}
                                    <div class="col-xs-12 ">
                                        <select class="form-control input-lg" name="nhanvien">
                                            <option value="" selected>Nhân viên</option>
                                            @if($nhanvien)
                                                @foreach($nhanvien as $nv)
                                                    <option value="{{ $nv['id'] }}">{{ $nv['full_name'] }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>

                                    <div class="col-xs-6 ">
                                        <select name="dichvu" class="form-control input-lg" >
                                            <option value="" selected>Dịch vụ</option>
                                            @if($dichvu)
                                                @foreach($dichvu as $dv)
                                                    <option value="{{ $dv['id'] }}">{{ $dv['name'] }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div class="col-xs-6">
                                        <input name="tiendichvu" type="text" class="form-control input-lg" placeholder="Thành tiền" >
                                    </div>

                                    <div class="col-xs-6 ">
                                        <select name="sanpham" class="form-control input-lg" >
                                            <option value="" selected>Sản phẩm</option>
                                            @if($sanpham)
                                                @foreach($sanpham as $sp)
                                                    <option value="{{ $sp['id'] }}">{{ $sp['name'] }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div class="col-xs-6 ">
                                        <input name="tiensanpham" type="text" class="form-control input-lg" placeholder="Thành tiền" >
                                    </div>

                                    <div class="btn-confirm col-xs-12">
                                        <button class="btn btn-primary">Xác nhận</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Dịch vụ</th>
                                    <th>$ dịch vụ</th>
                                    <th>Sản phẩm</th>
                                    <th>$ sản phẩm</th>
                                    <th>Nhân viên</th>
                                    <th>Ngày tạo</th>
                                    <th>Người tạo</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($donhang)
                                    @foreach($donhang as $d)
                                        <tr>
                                            <td>{{ $d->dichvu_name }}</td>
                                            <td>{{ $d->tien_dichvu > 0 ? $d->tien_dichvu : '' }}</td>
                                            <td>{{ $d->sanpham_name }}</td>
                                            <td>{{ $d->tien_sanpham > 0 ? $d->tien_sanpham : '' }}</td>
                                            <td>{{ $d->full_name }}</td>
                                            <td>{{ Helper::dateFormat($d->created_at, true) }}</td>
                                            <td>{{ $d->author }}</td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script>
        var runHome = true;
    </script>
@endsection
