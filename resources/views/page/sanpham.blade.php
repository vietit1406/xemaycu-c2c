<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product</title>
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
	<link rel="stylesheet" type="text/css" href="source/vendor/noui/nouislider.min.css">
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
	@if(isset($hangdactrung))
	@foreach($hangdactrung as $hangdt)	
	<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-color: #2d3436">
		<h2 class="l-text2 t-center">
			{{$hangdt->tenhang}}
		</h2>
		<p class="m-text13 t-center">
			{{$hangdt->tenhang}}
		</p>
	</section>
	@endforeach
	@endif

	<!-- Advertisement -->
	@if(isset($phankhoidactrung))
	@foreach($phankhoidactrung as $pkdt)	
	<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-color: #2d3436">
		<h2 class="l-text2 t-center">
			{{$pkdt->phankhoi}}
		</h2>
		<p class="m-text13 t-center">
			{{$pkdt->phankhoi}}
		</p>
	</section>
	@endforeach
	@endif

	<!-- Advertisement -->
	@if(isset($loaixedactrung))
	@foreach($loaixedactrung as $loaidt)	
	<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-color: #2d3436">
		<h2 class="l-text2 t-center">
			{{$loaidt->tenloai}}
		</h2>
		<p class="m-text13 t-center">
			{{$loaidt->tenloai}}
		</p>
	</section>
	@endforeach
	@endif

	<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<!--  -->
						<h4 class="m-text14 p-b-7">
							Phân loại xe
						</h4>

						
						<ul class="p-b-54">
							@if(isset($loaixe))
							@foreach($loaixe as $loai)
							<li class="p-t-4">
								<a href="{{route('sanphamtheoloaixe',$loai->maloai)}}" class="s-text13 active1">
									{{$loai->tenloai}}
								</a>
							</li>
							@endforeach
							@endif
						</ul>
						<!--  -->
						<h4 class="m-text14 p-b-7">
							Hãng xe
						</h4>

						<ul class="p-b-54">
							@if(isset($hangxe))
							@foreach($hangxe as $h)
							<li class="p-t-4">
								<a href="{{route('sanphamtheohang',$h->mahang)}}" class="s-text13 active1">
									{{$h->tenhang}}
								</a>
							</li>
							@endforeach
							@endif
						</ul>
						<!--  -->
						
						<!--  -->
						

						

						<!--<div class="search-product pos-relative bo4 of-hidden">
							<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product" placeholder="Search Products...">

							<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
								<i class="fs-12 fa fa-search" aria-hidden="true"></i>
							</button>
						</div>-->
					</div>
				</div>

				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
					<!--  -->
					<div class="flex-sb-m flex-w p-b-35">
						<div class="flex-r">
							<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
								<form action="filterproduct" method="get">
								<select id="status" class="selection-2" name="sorting" >
									<option value="0" disabled selected>Mặc định</option>
									<option @if(isset($_REQUEST['sorting']) && $_REQUEST['sorting']==1) selected @endif value="1">Mới</option>					
									<option @if(isset($_REQUEST['sorting']) && $_REQUEST['sorting']==3) selected @endif value="3">Giá: thấp đến cao</option>
									<option @if(isset($_REQUEST['sorting']) && $_REQUEST['sorting']==4) selected @endif value="4">Giá: cao đến thấp</option>
								</select>								
							</div>
						<button class="flex-c-m bg4 bo-rad-23 hov1 m-text3 trans-0-4 m-t-10" style="width: 20%;height: 40px;" type="submit">
							Lọc
						</button>
						</form>
						</div>
					</div>

					<!-- Product -->

					
					@if(isset($profilter))
					<div class="row">
						@if(isset($profilter))
						@foreach($profilter as $profil)
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative">
									<img src="source/images/tin/{{$profil->hinh1}}" alt="IMG-PRODUCT" height="200px">


									<div class="block2-overlay trans-0-4">
										


										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<a href="chitietsanpham?matin={{$profil->matin}}"><button  class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												Information
											</button></a>
										</div>
									</div>
								</div>


								<div class="block2-txt p-t-20">
									<a href="chitietsanpham?matin={{$profil->matin}}" class="block2-name dis-block s-text3 p-b-5">
										{{$profil->tenxe}}
									</a>
							
									<span class="block2-price m-text6 p-r-5">
										{{number_format($profil->gia)}} VNĐ
									</span>
								</div>
							</div>
						</div>
						@endforeach
					@endif
					</div>
						@if(isset($profilter))
						{{$profilter->links()}}
						@endif
					@endif

					@if(isset($protheoten))
					<div class="row">
						@if(isset($protheoten))
						@foreach($protheoten as $proten)
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative">
									<img src="source/images/tin/{{$proten->hinh1}}" alt="IMG-PRODUCT" height="200px">

									<div class="block2-overlay trans-0-4">
										

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<a href="chitietsanpham?matin={{$proten->matin}}"><button  class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												Information
											</button></a>
										</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<a href="chitietsanpham?matin={{$proten->matin}}" class="block2-name dis-block s-text3 p-b-5">
										{{$proten->tenxe}}
									</a>
							
									<span class="block2-price m-text6 p-r-5">
										{{number_format($proten->gia)}} VNĐ
									</span>
								</div>
							</div>
						</div>
						@endforeach
						@endif
					</div>

					@if(isset($protheoten))
					{{$protheoten->links()}}
					@endif
					
					@else

					<div class="row">
						@if(isset($product))
						@foreach($product as $pro)
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative">
									<img src="source/images/tin/{{$pro->hinh1}}" alt="IMG-PRODUCT" height="200px">

									<div class="block2-overlay trans-0-4">
										

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<a href="chitietsanpham?matin={{$pro->matin}}"><button  class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												Information
											</button></a>
										</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<a href="chitietsanpham?matin={{$pro->matin}}" class="block2-name dis-block s-text3 p-b-5">
										{{$pro->tenxe}}
									</a>
							
									<span class="block2-price m-text6 p-r-5">
										{{number_format($pro->gia)}} VNĐ
									</span>
								</div>
							</div>
						</div>
						@endforeach
						@endif
					</div>

					@if(isset($product))
					{{$product->links()}}
					@endif
					<div class="row">
						
						@if(isset($producttheohang))
						@foreach($producttheohang as $protheohang)
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative">
									<img src="source/images/tin/{{$protheohang->hinh1}}" alt="IMG-PRODUCT" height="200px">

									<div class="block2-overlay trans-0-4">
										<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
											<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
											<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
										</a>

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<a href="chitietsanpham?matin={{$protheohang->matin}}"><button  class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												Information
											</button></a>
										</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<a href="chitietsanpham?matin={{$protheohang->matin}}" class="block2-name dis-block s-text3 p-b-5">
										{{$protheohang->tenxe}}
									</a>

									<span class="block2-price m-text6 p-r-5">
										{{number_format($protheohang->gia)}} VNĐ
									</span>
								</div>
							</div>
						</div>
						@endforeach
						@endif
					</div>

					@if(isset($producttheohang))
					{{$producttheohang->links()}}
					@endif

						<div class="row">
						
						@if(isset($producttheophankhoi))
						@foreach($producttheophankhoi as $protheopk)
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative">
									<img src="source/images/tin/{{$protheopk->hinh1}}" alt="IMG-PRODUCT" height="200px">

									<div class="block2-overlay trans-0-4">
										<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
											<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
											<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
										</a>

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<a href="chitietsanpham?matin={{$protheopk->matin}}"><button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												Information
											</button></a>
										</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<a href="chitietsanpham?matin={{$protheopk->matin}}" class="block2-name dis-block s-text3 p-b-5">
										{{$protheopk->tenxe}}
									</a>

									<span class="block2-price m-text6 p-r-5">
										{{number_format($protheopk->gia)}} VNĐ
									</span>
								</div>
							</div>
						</div>
						@endforeach
						@endif
					</div>

					@if(isset($producttheophankhoi))
					{{$producttheophankhoi->links()}}
					@endif

					<div class="row">
						
						@if(isset($producttheoloaixe))
						@foreach($producttheoloaixe as $protheoloai)
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative">
									<img src="source/images/tin/{{$protheoloai->hinh1}}" alt="IMG-PRODUCT" height="200px">

									<div class="block2-overlay trans-0-4">
										<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
											<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
											<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
										</a>

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<a href="chitietsanpham?matin={{$protheoloai->matin}}"><button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												Information
											</button></a>
										</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<a href="chitietsanpham?matin={{$protheoloai->matin}}" class="block2-name dis-block s-text3 p-b-5">
										{{$protheoloai->tenxe}}
									</a>

									<span class="block2-price m-text6 p-r-5">
										{{number_format($protheoloai->gia)}} VNĐ
									</span>
								</div>
							</div>
						</div>
						@endforeach
						@endif
					</div>

					@if(isset($producttheoloaixe))
					{{$producttheoloaixe->appends(request()->query())->links()}}
					@endif

					@endif
				</div>
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
	<script type="text/javascript" src="source/vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="source/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="source/vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="source/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="source/vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
	</script>

<!--===============================================================================================-->
	<script type="text/javascript" src="source/vendor/noui/nouislider.min.js"></script>
	<script type="text/javascript">
		/*[ No ui ]
	    ===========================================================*/
	    var filterBar = document.getElementById('filter-bar');
	    noUiSlider.create(filterBar, {
	        start: [ 100, 200 ],
	        connect: true,
	        range: {
	            'min': 100,
	            'max': 200
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]) ;
	    });
	</script>
<!--===============================================================================================-->
	<script src="source/js/main.js"></script>

</body>
</html>
