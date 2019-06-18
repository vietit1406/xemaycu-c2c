<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đăng ký</title>
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
	<link rel="stylesheet" type="text/css" href="source/vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/css/util.css">
	<link rel="stylesheet" type="text/css" href="source/css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		@include('header')

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

							<div class="topbar-language rs1-select2">
								<select class="selection-1" name="time">
									<option>USD</option>
									<option>EUR</option>
								</select>
							</div>
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
						<a href="index.html">Home</a>
						<ul class="sub-menu">
							<li><a href="index.html">Homepage V1</a></li>
							<li><a href="home-02.html">Homepage V2</a></li>
							<li><a href="home-03.html">Homepage V3</a></li>
						</ul>
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>

					<li class="item-menu-mobile">
						<a href="product.html">Shop</a>
					</li>

					<li class="item-menu-mobile">
						<a href="product.html">Sale</a>
					</li>

					<li class="item-menu-mobile">
						<a href="cart.html">Features</a>
					</li>

					<li class="item-menu-mobile">
						<a href="blog.html">Blog</a>
					</li>

					<li class="item-menu-mobile">
						<a href="about.html">About</a>
					</li>

					<li class="item-menu-mobile">
						<a href="contact.html">Contact</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>

	<!-- Advertisement -->
	

	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-38">
		<div class="container">
			<div class="row">
				<div class="col-md-4 p-b-30 p-t-70">
					
				</div>

				@if(Auth::check())
				<div class="col-md-8 p-b-30">
					<h3 class="m-text26 p-t-15 p-b-16" style="padding-left: 5%;">
						Chào {{Auth::user()->name}} !!!
					</h3>
				</div>
				@else
				<div class="col-md-8 p-b-30">
					<h3 class="m-text26 p-t-15 p-b-16" style="padding-left: 20%;">
						Đăng ký
					</h3>

					<form action="{{route('register')}}" method="post" enctype="multipart/form-data" class ="formdangky">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						@if(count($errors)>0)
							<div class="alert alert-danger">
								@foreach($errors->all() as $err)
									{{$err}} </br>
								@endforeach
							</div>
						@endif

						@if(Session::has('thanhcong'))
							<div class="alert alert-success">{{Session::get('thanhcong')}}</div>
						@endif	
						
						@if(Session::has('sendmail'))
							<div class="alert alert-success">{{Session::get('sendmail')}}</div>
						@endif

						@if(isset($_REQUEST['hoten']))
						<label>Họ tên:</label>
						<div class="pos-relative bo12 of-hidden size25">							
							<input type="text" name="hoten" id="hoten" value="{{$_REQUEST['hoten']}}" class="s-text7 size16 p-l-23 p-r-50">
						</div>
						@else
						<label>Họ tên:</label>
						<div class="pos-relative bo12 of-hidden size25">							
							<input type="text" name="hoten" id="hoten" class="s-text7 size16 p-l-23 p-r-50">
						</div>
						@endif

						@if(isset($_REQUEST['sdt']))
						<label>SĐT:</label>
						<div class="pos-relative bo12 of-hidden size25">							
							<input type="text" name="sdt" id="sdt" value="{{$_REQUEST['sdt']}}" class="s-text7 size16 p-l-23 p-r-50">
						</div>
						@else
						<label>SĐT:</label>
						<div class="pos-relative bo12 of-hidden size25">							
							<input type="text" name="sdt" id="sdt" class="s-text7 size16 p-l-23 p-r-50">
						</div>
						@endif

						@if(isset($_REQUEST['cmnd']))
						<label>CMND:</label>
						<div class="pos-relative bo12 of-hidden size25">							
							<input type="text" name="cmnd" id="cmnd" value="{{$_REQUEST['cmnd']}}" class="s-text7 size16 p-l-23 p-r-50">
						</div>
						@else
						<label>CMND:</label>
						<div class="pos-relative bo12 of-hidden size25">							
							<input type="text" name="cmnd" id="cmnd" class="s-text7 size16 p-l-23 p-r-50">
						</div>
						@endif

						@if(isset($_REQUEST['email']))
						<label>Email:</label>
						<div class="pos-relative bo12 of-hidden size25" style="clear: both;">				<input type="text" name="email" id="email" value="{{$_REQUEST['email']}}" class="s-text7 size16 p-l-23 p-r-50">
						</div>
						@else
						<label>Email:</label>
						<div class="pos-relative bo12 of-hidden size25" style="clear: both;">				<input type="text" name="email" id="email" class="s-text7 size16 p-l-23 p-r-50">
						</div>
						@endif
						
						@if(isset($_REQUEST['diachi']))
						<label>Địa chỉ:</label>
						<div class="pos-relative bo12 of-hidden size25" style="clear: both;">				<input type="text" name="diachi" id="diachi" value="{{$_REQUEST['diachi']}}" class="s-text7 size16 p-l-23 p-r-50">
						</div>
						@else
						<label>Địa chỉ:</label>
						<div class="pos-relative bo12 of-hidden size25" style="clear: both;">				<input type="text" name="diachi" id="diachi" class="s-text7 size16 p-l-23 p-r-50">
						</div>
						@endif
					
						@if(isset($_REQUEST['password']))
						<label>Password:</label>
						<div class="pos-relative bo12 of-hidden size25">							
							<input type="password" name="password" id="password" value="{{$_REQUEST['password']}}" class="s-text7 size16 p-l-23 p-r-50">
						</div>
						@else
						<label>Password:</label>
						<div class="pos-relative bo12 of-hidden size25">							
							<input type="password" name="password" id="password" class="s-text7 size16 p-l-23 p-r-50">
						</div>
						@endif

						@if(isset($_REQUEST['repassword']))
						<label>Retype-Password:</label>
						<div class="pos-relative bo12 of-hidden size25">							
							<input type="password" name="repassword" id="repassword" value="{{$_REQUEST['repassword']}}" class="s-text7 size16 p-l-23 p-r-50">
						</div>
						@else
						<label>Retype-Password:</label>
						<div class="pos-relative bo12 of-hidden size25">							
							<input type="password" name="repassword" id="repassword" class="s-text7 size16 p-l-23 p-r-50">
						</div>
						@endif

						@if(isset($_REQUEST['loaitv']))
						<label>Loại thành viên:</label>
						<div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size21 m-t-8 m-b-12">	
							@if($_REQUEST['loaitv'] == 'M')											
							<select name="loaitv" id="loaitv" class="selection-2">
  								<option selected="selected" value="M">Merchant</option>	
  								<option value="C">Customer</option> 									
							</select>
							@else
							<select name="loaitv" id="loaitv" class="selection-2">
  								<option value="M">Merchant</option>	
  								<option selected="selected" value="C">Customer</option> 								
							</select>
							@endif
						</div>
						@else
						<label>Loại thành viên:</label>
						<div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size21 m-t-8 m-b-12">												
							<select name="loaitv" id="loaitv" class="selection-2">
  								<option value="M">Merchant</option>
  								<option value="C">Customer</option> 								
							</select>
						</div>
						@endif

						

						@if(isset($_REQUEST['data']))
						<input type="hidden" name="makichhoatan" value="{{$_REQUEST['data']}}">
						@else
						<input type="hidden" name="makichhoatan" >
						@endif

						<label>Ảnh đại diện :</label>
						<div class="pos-relative m-b-15 of-hidden size26" style="clear: both;">								
							<input type="file" name="avatar" id="avatar" required="true" >
						</div>

						<label></label>
						<button class="flex-c-m bg4 bo-rad-23 hov1 m-text3 trans-0-4" style="width: 60%;height: 40px;">
							Đăng ký
						</button>
					</form>

						
				</div>
				@endif
			</div>
		</div>
	</section>


	<!-- Footer -->
	@include('footer')



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>



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

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
<!--===============================================================================================-->
	<script src="source/js/main.js"></script>

</body>
</html>
