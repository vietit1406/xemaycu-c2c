<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đăng tin</title>
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
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="source/css/main.css">
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

	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-38">
		<div class="container">
			<div class="sec-title p-b-30">
				<h3 class="m-text5 t-center">
					Đăng tin
				</h3>
			</div>
			<div class="col-md-8 p-b-30" style="margin:0 auto;">
				<form action="{{route('dangtin')}}" method="post" enctype="multipart/form-data" class ="formdangtin" style="width: 800px;">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					@if(count($errors)>0)
							<div class="alert alert-danger">
								@foreach($errors->all() as $err)
									{{$err}} </br>						
								@endforeach
							</div>
					@endif

					@if(Session::has('success'))
							<div class="alert alert-success">{{Session::get('success')}}</div>
					@endif

					@if(Session::has('fail'))
							<div class="alert alert-danger">{{Session::get('fail')}}</div>
					@endif	

					<div class="row">
						<div class="col-6">
						<label>Tên xe máy:</label>
						<div class="pos-relative m-b-15 bo12 of-hidden">							
							<input type="text" name="tenxe" class="s-text7 size16 p-l-23 p-r-50">
						</div>

						<label>Hãng:</label>
						<div class="pos-relative m-b-15 m-b-15 of-hidden">							
							<select name="hang" id="brand" name="hang" class="size16">
								<option value="0" disabled selected>---Hãng xe---</option>
								@foreach($hangxe as $hang)
								<option value="{{$hang->mahang}}">{{$hang->tenhang}}</option>
								@endforeach	
							</select>
						</div>

						<label>Biển số</label>
						<div class="pos-relative m-b-15 bo12 of-hidden" style="clear: both;">							
							<input type="text" name="bienso" class="s-text7 size16 p-l-23 p-r-50">
						</div>
						<label>Màu</label>
						<div class="pos-relative m-b-15 bo12 of-hidden" style="clear: both;">							
							<input type="text" name="mau" class="s-text7 size16 p-l-23 p-r-50">
						</div>
						<label>Số km đã đi</label>
						<div class="pos-relative m-b-15 bo12 of-hidden" style="clear: both;">							
							<input type="text" name="sokmdadi" class="s-text7 size16 p-l-23 p-r-50">
						</div>
						<label>Tình trạng</label>
						<div class="pos-relative m-b-15 of-hidden" style="clear: both;">							
							<select name="tinhtrangxe" id="status" class="size16">
								<option value="0" disabled selected>---Tình trạng của xe---</option>
								<option value="mới">Mới</option>
								<option value="cũ">Cũ</option>
							</select>
						</div>

						<label>Loại xe</label>
						<div class="pos-relative m-b-15 of-hidden" style="clear: both;">							
							<select name="loaixe" id="categories" class="size16">
								<option disabled selected>---Chọn loại xe---</option>

								@foreach($loaixe as $loai)
								<option value="{{$loai->maloai}}">{{$loai->tenloai}}</option>
								@endforeach							
							</select>
						</div>
						</div>

						<div class="col-6">
						<label>Dung tích xe</label>
						<div class="pos-relative m-b-15 of-hidden" style="clear: both;">							
							<select name="phankhoi" id="phankhoi" class="size16">
								<option disabled selected>---Chọn dung tích xe---</option>

								@foreach($phankhoi as $pk)
								<option value="{{$pk->mapk}}">{{$pk->phankhoi}}</option>
								@endforeach					
							</select>
						</div>

						
						<label>Năm đăng ký</label>
						<div class="pos-relative m-b-15 of-hidden" style="clear: both;">				
							<select name="namdangky" id="dropdownYear" class="size16 p-r-50">
								<option value="0" selected disabled>---Chọn năm đăng ký---</option>
							</select>
						</div>
						<label>Mô tả</label>
						<div class="pos-relative m-b-15 of-hidden" style="clear: both;">				
							<textarea name="mota" id="mota" cols="39" rows="5"></textarea>
						</div>

						<label>Giá</label>
						<div class="pos-relative m-b-15 bo12 of-hidden" style="clear: both;">							
							<input type="text" name="gia" class="s-text7 size16 p-l-23 p-r-50">
						</div>

						<label>Cavet xe :</label>
						<div class="pos-relative m-b-15 of-hidden" style="clear: both;">				<input type="file" name="cavet" required="true">
						</div>

						<label>Ảnh (Tối thiểu 3 ảnh)</label>
						<div class="pos-relative m-b-15 of-hidden" style="clear: both;">				
							<input type="file" name="hinh1" required="true">
							<input type="file" name="hinh2" required="true">
							<input type="file" name="hinh3" required="true">
						</div>
					</div>
					</div>
						<label></label>
						<div class="row">
							<button class="flex-c-t bg4 bo-rad-23 hov1 m-text3 trans-0-4" style="width: 40%;height: 40px;margin:0 auto;" type="reset" value="reset">Reset
							</button>

							<button type="submit" value="upload" class="flex-c-m bg4 bo-rad-23 hov1 m-text3 trans-0-4" style="width: 40%;height: 40px;margin:0 auto;">
								Đăng tin
							</button>
						</div>
				</form>
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
		/*Clickable -row*/
		$(document).ready(function($) {
    		$(".table-row").click(function() {
        		window.document.location = $(this).data("href");
    		});
		});
		$('#dropdownYear').each(function() {
  			var year = (new Date()).getFullYear();
  			var current = year;
  			for (var i = 0; i < 70; i++) {
      			$(this).append('<option value="' + (year - i) + '">' + (year - i) + '</option>');
  			}
		});
	</script>
<!--===============================================================================================-->
	<script src="source/js/main.js"></script>

</body>
</html>
