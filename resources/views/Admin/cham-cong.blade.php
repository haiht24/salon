@extends('Admin.app')
@section('main')
	<!-- widget grid -->
	<section id="widget-grid" class="cham-cong">

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
						<h2>Very Basic Wizard Example </h2>

					</header>

					<!-- widget div-->
					<div>

						<!-- widget edit box -->
						<div class="jarviswidget-editbox">
							<!-- This area used as dropdown edit box -->

						</div>
						<!-- end widget edit box -->

						<!-- widget content -->
						<div class="widget-body">
							<div class="col-sm-12">
								{{--@foreach($nhanvien as $nv)--}}
									{{--<button class="btn btn-default">{{ $nv['full_name'] }}</button>--}}
								{{--@endforeach--}}
								<fieldset>
									<div class="form-group">
										{{--<label class="control-label col-md-2">Large Input</label>--}}
										{{--<div class="col-md-10">--}}
											{{--<input class="form-control input-lg" placeholder=".input-lg" type="text">--}}
										{{--</div>--}}
										<button class="btn btn-primary" data-toggle="modal" data-target="#modalAdd">Them</button>
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
                                <span class="h3">@{{ title }}</span>
                                <i class="close fa fa-times" data-dismiss="modal"></i>
                            </div>

                            <div class="modal-body clearfix">
								{{--<div class="col-xs-12 npd"><h5>Dịch vụ</h5></div>--}}
								{{--<div class="col-xs-12 npd">--}}
									{{--<div v-for="(index, dv) in response.dichvu">--}}
                                        {{--<div class="col-xs-12 npd pd">--}}
                                            {{--<div class="col-xs-4 npd">--}}
                                                {{--<div class="checkbox">--}}
                                                    {{--<label>--}}
                                                        {{--<input type="checkbox" v-model="arr.name" value="@{{ dv.id }}">@{{ dv.name }}--}}
                                                    {{--</label>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-xs-4">--}}
                                                {{--<input type="text" class="form-control" value="@{{ dv.price }}">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-xs-4">--}}
                                                {{--<select class="form-control">--}}
                                                    {{--<option v-for="nv in response.nhanvien" value="@{{ nv.id }}">@{{ nv.full_name }}</option>--}}
                                                {{--</select>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
								{{--</div>--}}
                                {{--<div class="col-xs-12 npd"><h5>Sản phẩm</h5></div>--}}
                                {{--<div class="col-xs-12 npd">--}}
                                    {{--<div v-for="sp in response.sanpham">--}}
                                        {{--<div class="col-xs-12 npd pd">--}}
                                            {{--<div class="col-xs-4 npd">--}}
                                                {{--<div class="checkbox">--}}
                                                    {{--<label>--}}
                                                        {{--<input type="checkbox">@{{ sp.name }}--}}
                                                    {{--</label>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-xs-4">--}}
                                                {{--<input type="text" class="form-control" value="@{{ sp.price }}">--}}
                                            {{--</div>--}}
                                            {{--<div class="col-xs-4">--}}
                                                {{--<select class="form-control">--}}
                                                    {{--<option v-for="nv in response.nhanvien" value="@{{ nv.id }}">@{{ nv.full_name }}</option>--}}
                                                {{--</select>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                <div class="col-xs-12 ">
                                    <select class="form-control input-lg" v-model="donhang.nhanvien">
                                        <option value="" selected>Nhân viên</option>
                                        <option  v-for="nv in response.nhanvien" value="@{{ nv.id }}">@{{ nv.full_name }}</option>
                                    </select>
                                </div>

                                <div class="col-xs-6 ">
                                    <select class="form-control input-lg" v-model="donhang.dichvu">
                                        <option value="" selected>Dịch vụ</option>
                                        <option v-for="dv in response.dichvu" value="@{{ dv.id }}">@{{ dv.name }}</option>
                                    </select>
                                </div>
                                <div class="col-xs-6">
                                    <input v-model="donhang.tiendichvu" type="text" class="form-control input-lg" placeholder="Thành tiền" >
                                </div>

                                <div class="col-xs-6 ">
                                    <select class="form-control input-lg" v-model="donhang.sanpham">
                                        <option value="" selected>Sản phẩm</option>
                                        <option v-for="sp in response.sanpham" value="@{{ sp.price }}">@{{ sp.name }}</option>
                                    </select>
                                </div>
                                <div class="col-xs-6 ">
                                    <input v-model="donhang.tiensanpham" type="text" class="form-control input-lg" placeholder="Thành tiền" >
                                </div>

                                <div class=" col-xs-12">
                                    <button class="btn btn-primary" v-on:click="confirm(donhang)">Xác nhận</button>
                                </div>
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
        var include_chamCongJs = true;
    </script>
@endsection