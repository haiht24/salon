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
						<h2>Sản phẩm</h2>
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
                                                <th>Mô tả</th>
                                                <th>Giá Nhập</th>
                                                <th>Giá Bán</th>
                                                <th>Số lượng</th>
                                                <th>Đơn vị</th>
                                                
                                                <th>Ngày tạo</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if($sanpham)
                                                @foreach($sanpham as $sp)
                                                <tr>
                                                    <td>{{ $sp->name }}</td>
                                                    <td>{{ $sp->description }}</td>
                                                    <td>{{ $sp->price_in }}</td>
                                                    <td>{{ $sp->price_out }}</td>
                                                    <td>{{ $sp->quantity }}</td>
                                                    <td>{{ $sp->unit }}</td>
                                                    <td>{{ $sp->created_at }}</td>
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
                                <span class="h3">Thêm Sản phẩm</span>
                                <i class="close fa fa-times" data-dismiss="modal"></i>
                            </div>

                            <div class="modal-body clearfix">
                                <form id="frmAddSanPham" action="{{ url('san-pham/add') }}" method="post">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="col-xs-12 ">
                                        <input name="name" type="text" class="form-control input-lg" placeholder="Tên Sản phẩm">
                                    </div>
                                    <div class="col-xs-12 ">
                                        <input name="description" type="text" class="form-control input-lg" placeholder="Mô tả">
                                    </div>
                                    <div class="col-xs-12 ">
                                        <input name="price_in" type="text" class="form-control input-lg" placeholder="Giá nhập">
                                    </div>
                                    <div class="col-xs-12 ">
                                        <input name="price_out" type="text" class="form-control input-lg" placeholder="Giá bán">
                                    </div>
                                    <div class="col-xs-12 ">
                                        <input name="quantity" type="text" class="form-control input-lg" placeholder="Số lượng">
                                    </div>
                                    <div class="col-xs-12 ">
                                        <input name="unit" type="text" class="form-control input-lg" placeholder="Đơn vị">
                                    </div>

                                    <div class="btn-confirm col-xs-12">
                                        <button class="btn btn-primary">Xác nhận</button>
                                    </div>
                                </form>
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
        var include_sanPhamJs = true;
    </script>
@endsection