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
                            <button class="btn btn-primary" data-toggle="modal" data-target="#modalAdd">Thêm mới</button>
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
                                            <td>{{ $d->created_at }}</td>
                                            <td></td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- Modal -->
                        <div id="modalAdd" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <span class="h3">Thêm mới</span>
                                        <i class="close fa fa-times" data-dismiss="modal"></i>
                                    </div>
                                    <form id="frmAddDoanhThu" action="{{ url('doanh-thu/add') }}" method="post">
                                        <div class="modal-body clearfix">
                                            <div class="col-xs-12 ">
                                                <select class="form-control input-lg" name="cuahang">
                                                    @if($cuahang)
                                                        @foreach($cuahang as $ch)
                                                            <option value="{{ $ch['id'] }}">{{ $ch['name'] }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
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
                                                <select class="form-control input-lg" >
                                                    <option value="" selected name="dichvu">Dịch vụ</option>
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
                                                <select class="form-control input-lg" >
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
                            </div>
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
