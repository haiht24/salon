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
					<header>
						<span class="widget-icon"> <i class="fa fa-check"></i> </span>
						<h2>Cửa hàng</h2>
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
								<fieldset>
									<div class="form-group ">
										<button class="btn btn-primary" data-toggle="modal" data-target="#modalAdd">Thêm mới</button>
									</div>

                                    <div class="table-responsive">

                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Tên</th>
                                                <th>Địa chỉ</th>
                                                <th>Điện thoại</th>
                                                <th>Ngày tạo</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {{--@if($donhang)--}}
                                                {{--@foreach($donhang as $d)--}}
                                                {{--<tr>--}}
                                                    {{--<td>{{ $d->dichvu_name }}</td>--}}
                                                    {{--<td>{{ $d->tien_dichvu > 0 ? $d->tien_dichvu : '' }}</td>--}}
                                                    {{--<td>{{ $d->sanpham_name }}</td>--}}
                                                    {{--<td>{{ $d->tien_sanpham > 0 ? $d->tien_sanpham : '' }}</td>--}}
                                                    {{--<td>{{ $d->full_name }}</td>--}}
                                                    {{--<td>{{ $d->created_at }}</td>--}}
                                                    {{--<td></td>--}}
                                                {{--</tr>--}}
                                                {{--@endforeach--}}
                                            {{--@endif--}}
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
                                <span class="h3">Thêm cửa hàng</span>
                                <i class="close fa fa-times" data-dismiss="modal"></i>
                            </div>

                            <div class="modal-body clearfix">
                                <form id="frmAddCuaHang" action="{{ url('cua-hang/add') }}" method="post">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="col-xs-12 ">
                                        <input name="name" type="text" class="form-control input-lg" placeholder="Tên cửa hàng">
                                    </div>
                                    <div class="col-xs-12 ">
                                        <input name="address" type="text" class="form-control input-lg" placeholder="Địa chỉ">
                                    </div>
                                    <div class="col-xs-12 ">
                                        <input name="phone" type="text" class="form-control input-lg" placeholder="Điện thoại">
                                    </div>

                                    <div class="btn-confirm col-xs-12">
                                        <button class="btn btn-primary">Xác nhận</button>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">

                            </div>
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
        var include_cuaHangJs = true;
    </script>
@endsection