<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="{{Request::url()}}" class="topbar-social-item fa fa-facebook"></a>
					<a href="{{Request::url()}}" class="topbar-social-item fa fa-instagram"></a>
					<a href="{{Request::url()}}" class="topbar-social-item fa fa-pinterest-p"></a>
					<a href="{{Request::url()}}" class="topbar-social-item fa fa-snapchat-ghost"></a>
					<a href="{{Request::url()}}" class="topbar-social-item fa fa-youtube-play"></a>
				</div>
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="{{route('trangchu')}}" class="logo">
					<img src="source/images/icons/logo.png" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="{{route('trangchu')}}">Trang chủ</a>
							</li>

							<li>
								<a href="{{route('sanpham')}}">Sản phẩm</a>
								<ul class="sub_menu">
									@foreach($hang as $h)
									<li><a href="{{route('sanphamtheohang',$h->mahang)}}">{{$h->tenhang}}</a></li>
									@endforeach
								</ul>
							</li>
							
							<li >
								<a href="{{route('sanpham')}}">Phân khúc xe</a>
								<ul class="sub_menu">
									@foreach($phankhoi as $pk)
									<li><a href="{{route('sanphamtheophankhoi',$pk->mapk)}}">{{$pk->phankhoi}}</a></li>									@endforeach
								</ul>
							</li>

							<li>
								<a href="{{route('sanpham')}}">Loại xe</a>
								<ul class="sub_menu">
									@foreach($loaixe as $loai)
									<li><a href="{{route('sanphamtheoloaixe',$loai->maloai)}}">{{$loai->tenloai}}</a></li>
									@endforeach
								</ul>
							</li>
							<!--
							<li>
								<a href="cart.html">Features</a>
							</li>

							<li>
								<a href="blog.html">Blog</a>
							</li>

							<li>
								<a href="about.html">About</a>
							</li>
							-->
							<li>
								<a href="{{route('lienhe')}}">Liên hệ</a>
							</li>
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">
					<form action="{{route('timkiem')}}" method="get" class="m-r-40 p-r-5 p-l-5 search-product pos-relative bo4 of-hidden ">
  									<input class="s-text7" type="text" placeholder="Tìm kiếm" name="search">
  									<button type="submit"><i class="fs-12 fa fa-search"></i></button>
					</form>

					
					@if(Auth::check())
					<!-- Account khi đã đăng nhập -->
					
					<div class="header-wrapicon2">
						<img src="source/images/icons/icon-header-01.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="t-center">
									Chào {{Auth::user()->name}}!!!
								</li>
								@if(Auth::user()->loaitv == 'M')
								<li class="t-center" style="width: 100%;">
									<a href="{{route('dangtin')}}" class="flex-c-m bg1 bo-rad-20 hov1 s-text1 trans-0-4 m-b-10" 
									>
										Đăng tin
									</a>
									<a href="{{route('muaphitv')}}" class="flex-c-m bg1 bo-rad-20 hov1 s-text1 trans-0-4 m-b-10" 
									>
										Mua gói gia hạn
									</a>
									<a href="{{route('muatin')}}" class="flex-c-m bg1 bo-rad-20 hov1 s-text1 trans-0-4 m-b-10" 
									>
										Mua tin
									</a>
								</li>
								@endif

								<li class="t-center">
									<i class="fa fa-user-circle" aria-hidden="true"></i>
									<a href="{{route('userpage',Auth::user()->id)}}">Trang cá nhan</a>
								</li>

								<li class="t-center">
									<i class="fa fa-shopping-bag" aria-hidden="true"></i>
									<a href="{{route('lichsugiaodich')}}">Lịch sử mua hàng</a>
								</li>
								@if(Auth::user()->loaitv == 'M')
								<li class="t-center">
									<i class="fa fa-user-plus" aria-hidden="true"></i>
									<a href="{{route('quanlybanhang')}}">Quản lý bán hàng</a>
								</li>
								@endif
								<li class="t-center">
									<a href="{{route('logout1')}}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Đăng xuất
									</a>
								</li>
							</ul>
						</div>
					</div>	
					
					
					@else
					<!-- Account khi chưa đăng nhập -->
					<div class="header-wrapicon2">
						<img src="source/images/icons/icon-header-01.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<div class="header-cart header-dropdown">						
							<a href="{{route('dangnhap')}}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Đăng nhập
							</a>
							<p>Bạn chưa có tài khoản? <a href="{{route('signin')}}" class="s-text20 hov2 p-l-5">
								Đăng ký ngay</a>
							</p>						
						</div>
					</div>	
					@endif
	
					

					
				</div>
			</div>
		</div>