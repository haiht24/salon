<aside id="left-panel">

    <!-- User info -->
    <div class="login-info">
				<span> <!-- User image size is adjusted inside CSS, it should stay as it -->

					<a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
						<img src="img/avatars/sunny.png" alt="me" class="online" />
						<span>
							{{ Auth::check() ? Auth::user()['name'] : '' }}
						</span>
						<i class="fa fa-angle-down"></i>
					</a>

				</span>
    </div>
    <!-- end user info -->

    <!-- NAVIGATION : This navigation is also responsive-->
    <nav>
        <ul>
            <li class="{{ (isset($active) && $active === 'dashboard') ? 'active':'' }}">
                <a href="{{ url('dashboard') }}" title="Dashboard"><i class="fa fa-lg fa-fw  fa-tachometer"></i> <span class="menu-item-parent">Dashboard</span></a>
            </li>
            {{--<li class="{{ (isset($active) && $active === 'doanh-thu') ? 'active':'' }}">--}}
                {{--<a href="{{ url('doanh-thu') }}"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Doanh thu</span></a>--}}
            {{--</li>--}}
            {{--<li class="open">--}}
            <li>
                <a href="#">
                    <i class="fa fa-lg fa-fw fa-home"></i>
                    <span class="menu-item-parent">Quản lý</span>
                    <b class="collapse-sign"><em class="fa fa-minus-square-o"></em></b>
                </a>
                <ul style="display: none;">
                    <li class="{{ (isset($active) && $active === 'cua-hang') ? 'active':'' }}">
                        <a href="{{ url('cua-hang') }}">Cửa hàng</a>
                    </li>
                    <li class="{{ (isset($active) && $active === 'nhan-vien') ? 'active':'' }}">
                        <a href="{{ url('nhan-vien') }}">Nhân viên</a>
                    </li>
                    <li class="{{ (isset($active) && $active === 'dich-vu') ? 'active':'' }}">
                        <a href="{{ url('dich-vu') }}">Dịch vụ</a>
                    </li>
                    <li class="{{ (isset($active) && $active === 'san-pham') ? 'active':'' }}">
                        <a href="{{ url('san-pham') }}">Sản phẩm</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <span class="minifyme" data-action="minifyMenu">
        <i class="fa fa-arrow-circle-left hit"></i>
    </span>

</aside>