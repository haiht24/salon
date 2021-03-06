@extends('Admin.app')
@section('main')
	<!-- widget grid -->
	<section id="widget-grid" class="doanh-thu">

		<!-- row -->
		<div class="row">

			<!-- NEW WIDGET START -->
			<article class="col-sm-12">

				<!-- Widget ID (each widget will need unique ID)-->
				<div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false" data-widget-deletebutton="false">
					<!-- widget options:
                    usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

                    data-widget-colorbutton="false"
                    data-widget-editbutton="false"
                    data-widget-togglebutton="false"
                    data-widget-deletebutton="false"
                    data-widget-fullscreenbutton="false"
                    data-widget-custombutton="false"
                    data-widget-collapsed="true"
                    data-widget-sortable="false"

                    -->
					<header>
						<span class="widget-icon"> <i class="fa fa-check"></i> </span>
						<h2>Doanh Thu</h2>
					</header>

					<!-- widget div-->
					<div class="npd">
						<!-- widget edit box -->
						<div class="jarviswidget-editbox">
							<!-- This area used as dropdown edit box -->
						</div>
						<!-- end widget edit box -->

						<!-- widget content -->
						<div class="widget-body npd">
							<div class="col-sm-12 npd-top">
								{{--@foreach($nhanvien as $nv)--}}
									{{--<button class="btn btn-default">{{ $nv['full_name'] }}</button>--}}
								{{--@endforeach--}}
								<fieldset>
									<div class="form-group ">
										{{--<label class="control-label col-md-2">Large Input</label>--}}
										{{--<div class="col-md-10">--}}
											{{--<input class="form-control input-lg" placeholder=".input-lg" type="text">--}}
										{{--</div>--}}
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

								</fieldset>
							</div>

						</div>
						<!-- end widget content -->

					</div>
					<!-- end widget div -->

				</div>
				<!-- end widget -->

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
                                        @if($donhang)
                                            @foreach($donhang as $dh)
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
                                    <button class="btn btn-primary"">Xác nhận</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
				</div>

			</article>
			<!-- WIDGET END -->

		</div>

		<!-- end row -->


	</section>
@endsection

@section('js')
    <script>
        var include_chamCongJs = true;
    </script>
@endsection