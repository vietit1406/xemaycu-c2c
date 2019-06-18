<!DOCTYPE html>
<html lang="en">
<head>
	<title>Trang chủ</title>
	<base href="{{asset('')}}">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="source/images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/css/util.css">
	<link rel="stylesheet" type="text/css" href="source/css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	<header class="header3">
		<!-- Header desktop -->
		<div class="container-menu-header-v3">
			<div class="wrap_header3 p-t-74 t-center">
				<!-- Logo -->
				<a href="index" class="logo3">
					<img src="source/images/icons/logo.png" alt="IMG-LOGO">
				</a>
				<!-- Header Icon -->
				<div class="header-icons3 p-t-38 p-b-60 p-l-8" style="justify-content: center">
						
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
									<a href="{{route('userpage',Auth::user()->id)}}">Trang cá nhân</a>
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

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="{{route('trangchu')}}">Trang chủ</a>
							</li>
							
							@if(Auth::check() && Auth::user()->loaitv == 'M')
							<li>
								<a href="{{route('dangtin')}}">Đăng tin</a>
							</li>

							<li>
								<a href="{{route('muatin')}}">Mua tin</a>
							</li>

							<li>
								<a href="{{route('muaphitv')}}">Gia hạn phí thành viên</a>
							</li>
							@elseif(Auth::check() && Auth::user()->loatv == 'C')
							@elseif(!Auth::check())
							<li>
								<a href="{{route('dangnhap')}}">Đăng nhập</a>
							</li>

							<li>
								<a href="{{route('signin')}}">Đăng ký</a>
							</li>
							@endif

							<li>
								<a href="{{route('sanpham')}}">Sản phẩm</a>
								<ul class="sub_menu">
									@foreach($hang as $ha)
									<li><a href="{{route('sanpham')}}">{{$ha->tenhang}}</a></li>
									@endforeach
								</ul>
							</li>

							<!--
							<li class="sale-noti">
								<a href="product.html">Sale</a>
							</li>
							-->

							

							<!--
							<li>
								<a href="blog.html">Blog</a>
							</li>
							-->

							<!--
							<li>
								<a href="about.html">About</a>
							</li>
							-->

							<li>
								<a href="{{route('lienhe')}}">Liên hệ</a>
							</li>
							<li style="margin-top: 20px">
								<form action="timkiem">
  									<input type="text" placeholder="Search.." name="search">
  									<button type="submit"><i class="fa fa-search"></i></button>
								</form>
							</li>
						</ul>
					</nav>
				</div>
			</div>

			<div class="bottombar flex-col-c p-b-65">
				<div class="bottombar-social t-center p-b-8">
					<a href="{{Request::url()}}" class="topbar-social-item fa fa-facebook"></a>
					<a href="{{Request::url()}}" class="topbar-social-item fa fa-instagram"></a>
					<a href="{{Request::url()}}" class="topbar-social-item fa fa-pinterest-p"></a>
					<a href="{{Request::url()}}" class="topbar-social-item fa fa-snapchat-ghost"></a>
					<a href="{{Request::url()}}" class="topbar-social-item fa fa-youtube-play"></a>
				</div>

				<!--<div class="bottombar-child2 p-r-20">
					<div class="topbar-language rs1-select2">
						<select class="selection-1" name="time">
							<option>USD</option>
							<option>EUR</option>
						</select>
					</div>
				</div>-->
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="index.html" class="logo-mobile">
				<img src="source/images/icons/logo.png" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<a href="#" class="header-wrapicon1 dis-block">
						<img src="source/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
						<img src="source/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="source/images/item-cart-01.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											White Shirt With Pleat Detail Back
										</a>

										<span class="header-cart-item-info">
											1 x $19.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="source/images/item-cart-02.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Converse All Star Hi Black Canvas
										</a>

										<span class="header-cart-item-info">
											1 x $39.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="source/images/item-cart-03.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Nixon Porter Leather Watch In Tan
										</a>

										<span class="header-cart-item-info">
											1 x $17.00
										</span>
									</div>
								</li>
							</ul>

							<div class="header-cart-total">
								Total: $75.00
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							Free shipping for standard order over $100
						</span>
					</li>

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
								fashe@example.com
							</span>

							<!--<div class="topbar-language rs1-select2">
								<select class="selection-1" name="time">
									<option>USD</option>
									<option>EUR</option>
								</select>
							</div>-->
						</div>
					</li>

					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
							<a href="#" class="topbar-social-item fa fa-facebook"></a>
							<a href="#" class="topbar-social-item fa fa-instagram"></a>
							<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
							<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
							<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
						</div>
					</li>

					<li class="item-menu-mobile">
						<a href="index.html">Trang chủ</a>
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>

					<li class="item-menu-mobile">
						<a href="signin.html">Đăng nhập</a>
					</li>

					<li class="item-menu-mobile">
						<a href="signup.html">Đăng ký</a>
					</li>

					<li class="item-menu-mobile">
						<a href="product.html">Sản phẩm</a>
						<ul class="sub-menu">
							<li><a href="">Honda</a></li>
							<li><a href="">Yamaha</a></li>
							<li><a href="">Suzuki</a></li>
							<li><a href="">Harley Davidson</a></li>
						</ul>
					</li>

					<li class="item-menu-mobile">
						<a href="cart.html">Giỏ hàng</a>
					</li>

					<li class="item-menu-mobile">
						<a href="contact.html">Liên hệ</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>

<div class="container1-page">
	<!-- Slide1 -->
	<section class="slide1 rs1-slick1">
		<div class="wrap-slick1">
			<div class="slick1">

				@foreach($productratecao as $proratecao)		
				<div class="item-slick1 item1-slick1" style="background-image: url(source/images/tin/{{$proratecao->hinh1}});">
					<div class="wrap-content-slide1 size24 flex-col-c-m p-l-15 p-r-15 p-t-120 p-b-170">
						<h2 class="caption1-slide1 xl-text1 t-center bo14 p-b-3 animated visible-false m-b-25 p-l-5 p-r-5" data-appear="fadeInUp"
						style="background-color: #2d3436;color:#dfe6e9;">
							{{$proratecao->tenxe}}
						</h2>

						<span class="caption2-slide1 m-text13 t-center animated visible-false m-b-30 p-l-5 p-r-5" data-appear="fadeInDown" style="background-color: #2d3436;color:#dfe6e9;"">
							{{$proratecao->tenxe}}
						</span>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
							<!-- Button -->
							<a href="chitietsanpham?matin={{$proratecao->matin}}" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4 ">
								Information
							</a>
						</div>
					</div>
				</div>
				@endforeach

				

			</div>
		</div>
	</section>

	<!-- Top noti -->
	<div class="pos-relative">
		<div class="flex-c-m size22 bg0 s-text21 ab-b-l op-0-9">
			Bạn chưa có tài khoản?
			<a href="{{route('signin')}}" class="s-text22 hov6 p-l-5">
				Đăng ký ngay
			</a>

			<button class="flex-c-m pos2 size23 colorwhite eff3 trans-0-4 btn-romove-top-noti">
				<i class="fa fa-remove fs-13" aria-hidden="true"></i>
			</button>
		</div>
	</div>
	
	<!-- Banner -->
	<section class="banner bgwhite p-t-40 p-b-40">
		<div class="container">
			<div class="row">

				@foreach($hang as $ha)
				
				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->				
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="source/images/{{$ha->hinh1}}" alt="IMG-BENNER" height="250px">
						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="timkiem?search={{$ha->tenhang}}" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								{{$ha->tenhang}}
							</a>
						</div>
					</div>
											
				</div>

				
				@endforeach

				

			</div>
		</div>
	</section>

	<!-- New Product -->
	<section class="newproduct bgwhite p-t-45 p-b-105">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Sản phẩm mới
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2 rs1-slick2">
				<div class="slick2">
					@foreach($newproduct as $new)
					<div class="item-slick2 p-l-15 p-r-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
								<img src="source/images/tin/{{$new->hinh1}}" alt="IMG-PRODUCT" height="200" width="100px">

								<div class="block2-overlay trans-0-4">
									<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a>

									<div class="block2-btn-addcart w-size1 trans-0-4">
										<!-- Button -->
										<a href="chitietsanpham?matin={{$new->matin}}"><button  class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											Information
										</button></a>
									</div>
								</div>
							</div>

							<div class="block2-txt p-t-20">
								<a href="chitietsanpham?matin={{$new->matin}}" class="block2-name dis-block s-text3 p-b-5">
									{{$new->tenxe}}
								</a>

								<span class="block2-price m-text6 p-r-5">
									{{number_format($new->gia)}} VNĐ
								</span>
							</div>
						</div>
					</div>
					@endforeach
					
				</div>
			</div>

		</div>
	</section>

	<!-- Banner2 -->
	<div class="banner2 bg5 p-t-55 p-b-55 bg-img1" style="background-image: url(source/images/tin/{{$toprate->hinh2}});">
		<div class="container">
			<div class="flex-w flex-r-m flex-c-xl">
				<div class="p-t-15 p-b-15 w-size28">
					<div class="bgwhite hov-img-zoom pos-relative p-b-20per-ssm">
						<img src="source/images/tin/{{$toprate->hinh1}}" alt="IMG-BANNER">

						<div class="ab-t-l sizefull flex-col-c-b p-l-15 p-r-15 p-b-20">
							<div class="t-center" style="background-color:white">
								<p style="color:#eb4d4b;">Top Rate</p>
								<a href="chitietsanpham?matin={{$toprate->matin}}" class="dis-block s-text3 p-b-5">
									{{$toprate->tenxe}}
								</a>

								<!--<span class="block2-oldprice m-text7 p-r-5">
									$29.50
								</span>

								<span class="block2-newprice m-text8">
									$15.90
								</span>-->
								<span class="block2-price s-text3 ">
									Giá bán: {{number_format($toprate->gia)}} VNĐ
								</span>
							</div>

							<!--
							<div class="flex-c-m p-t-44 p-t-30-xl">
								<div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
									<span class="m-text10 p-b-1 days">
										69
									</span>

									<span class="s-text5">
										days
									</span>
								</div>

								<div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
									<span class="m-text10 p-b-1 hours">
										04
									</span>

									<span class="s-text5">
										hrs
									</span>
								</div>

								<div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
									<span class="m-text10 p-b-1 minutes">
										32
									</span>

									<span class="s-text5">
										mins
									</span>
								</div>

								<div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
									<span class="m-text10 p-b-1 seconds">
										05
									</span>

									<span class="s-text5">
										secs
									</span>
								</div>							
							</div>
							-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Our product -->
	<section class="bgwhite p-t-115 p-b-58">
	</section>

	<!-- Blog 
	<section class="blog bgwhite p-b-65">
		<div class="container">
			<div class="sec-title p-b-52">
				<h3 class="m-text5 t-center">
					Our Blog
				</h3>
			</div>
			<div class="row">
				<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
					 Block3
					<div class="block3">
						<a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
							<img src="source/images/blog-01.jpg" alt="IMG-BLOG">
						</a>

						<div class="block3-txt p-t-14">
							<h4 class="p-b-7">
								<a href="blog-detail.html" class="m-text11">
									Black Friday Guide: Best Sales & Discount Codes
								</a>
							</h4>

							<span class="s-text6">By</span> <span class="s-text7">Nancy Ward</span>
							<span class="s-text6">on</span> <span class="s-text7">July 22, 2017</span>

							<p class="s-text8 p-t-16">
								Duis ut velit gravida nibh bibendum commodo. Sus-pendisse pellentesque mattis augue id euismod. Inter-dum et malesuada fames
							</p>
						</div>
					</div>
				</div>
			
				<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
					Block3
					<div class="block3">
						<a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
							<img src="source/images/blog-02.jpg" alt="IMG-BLOG">
						</a>

						<div class="block3-txt p-t-14">
							<h4 class="p-b-7">
								<a href="blog-detail.html" class="m-text11">
									The White Sneakers Nearly Every Fashion Girls Own
								</a>
							</h4>

							<span class="s-text6">By</span> <span class="s-text7">Nancy Ward</span>
							<span class="s-text6">on</span> <span class="s-text7">July 18, 2017</span>

							<p class="s-text8 p-t-16">
								Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit ame
							</p>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
					Block3
					<div class="block3">
						<a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
							<img src="source/images/blog-03.jpg" alt="IMG-BLOG">
						</a>

						<div class="block3-txt p-t-14">
							<h4 class="p-b-7">
								<a href="blog-detail.html" class="m-text11">
									New York SS 2018 Street Style: Annina Mislin
								</a>
							</h4>

							<span class="s-text6">By</span> <span class="s-text7">Nancy Ward</span>
							<span class="s-text6">on</span> <span class="s-text7">July 2, 2017</span>

							<p class="s-text8 p-t-16">
								Proin nec vehicula lorem, a efficitur ex. Nam vehicula nulla vel erat tincidunt, sed hendrerit ligula porttitor. Fusce sit amet maximus nunc
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	-->
	<!-- Instagram 
	<section class="instagram p-t-20">
		<div class="sec-title p-b-52 p-l-15 p-r-15">
			<h3 class="m-text5 t-center">
				@ follow us on Instagram
			</h3>
		</div>

		<div class="flex-w rs1-block4">
			Block4
			<div class="block4 wrap-pic-w">
				<img src="source/images/gallery-03.jpg" alt="IMG-INSTAGRAM">

				<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

					<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
						<p class="s-text10 m-b-15 h-size1 of-hidden">
							Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
						</p>

						<span class="s-text9">
							Photo by @nancyward
						</span>
					</div>
				</a>
			</div>

			Block4
			<div class="block4 wrap-pic-w">
				<img src="source/images/gallery-07.jpg" alt="IMG-INSTAGRAM">

				<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

					<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
						<p class="s-text10 m-b-15 h-size1 of-hidden">
							Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
						</p>

						<span class="s-text9">
							Photo by @nancyward
						</span>
					</div>
				</a>
			</div>

			Block4
			<div class="block4 wrap-pic-w">
				<img src="source/images/gallery-09.jpg" alt="IMG-INSTAGRAM">

				<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

					<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
						<p class="s-text10 m-b-15 h-size1 of-hidden">
							Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
						</p>

						<span class="s-text9">
							Photo by @nancyward
						</span>
					</div>
				</a>
			</div>

			Block4
			<div class="block4 wrap-pic-w">
				<img src="source/images/gallery-13.jpg" alt="IMG-INSTAGRAM">

				<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

					<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
						<p class="s-text10 m-b-15 h-size1 of-hidden">
							Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
						</p>

						<span class="s-text9">
							Photo by @nancyward
						</span>
					</div>
				</a>
			</div>

			Block4
			<div class="block4 wrap-pic-w">
				<img src="source/images/gallery-15.jpg" alt="IMG-INSTAGRAM">

				<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

					<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
						<p class="s-text10 m-b-15 h-size1 of-hidden">
							Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
						</p>

						<span class="s-text9">
							Photo by @nancyward
						</span>
					</div>
				</a>
			</div>
		</div>
	</section>
	-->
	<!-- Shipping 
	<section class="shipping bgwhite p-t-62 p-b-46">
		<div class="flex-w p-l-15 p-r-15">
			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					Free Delivery Worldwide
				</h4>

				<a href="#" class="s-text11 t-center">
					Click here for more info
				</a>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
				<h4 class="m-text12 t-center">
					30 Days Return
				</h4>

				<span class="s-text11 t-center">
					Simply return it within 30 days for an exchange.
				</span>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					Store Opening
				</h4>

				<span class="s-text11 t-center">
					Shop open from Monday to Sunday
				</span>
			</div>
		</div>
	</section>
-->

	<!-- Footer -->
	@include('footer')
</div>


	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="source/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="source/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="source/vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="source/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="source/vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="source/vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="source/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="source/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="source/vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="source/vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
	</script>

<!--===============================================================================================-->
	<script src="source/js/main.js"></script>

</body>
</html>
