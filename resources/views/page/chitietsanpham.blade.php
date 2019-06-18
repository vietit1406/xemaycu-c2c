<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product Detail</title>
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
											Sản phẩm 
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

	<!-- breadcrumb -->
	<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
		<a href="{{route('trangchu')}}" class="s-text16">
			Home
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<a href="{{route('sanpham')}}" class="s-text16">
			Sản phẩm
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		

		<span class="s-text17">
			{{$pro->tenxe}}
		</span>
	</div>

	<!-- Product Detail -->
	<div class="container bgwhite p-t-35 p-b-80">
		<div class="flex-w flex-sb">
			<div class="w-size13 p-t-30 respon5">
				<div class="wrap-slick3 flex-sb flex-w">
					<div class="wrap-slick3-dots"></div>

					<div class="slick3">
				 		<div class="item-slick3" data-thumb="source\images\tin\{{$pro->hinh1}}">
							<div class="wrap-pic-w">
								<img src="source\images\tin\{{$pro->hinh1}}" alt="IMG-PRODUCT">
							</div>
						</div>

						<div class="item-slick3" data-thumb="source\images\tin\{{$pro->hinh2}}">
							<div class="wrap-pic-w">
								<img src="source\images\tin\{{$pro->hinh2}}" alt="IMG-PRODUCT">
							</div>
						</div>

						<div class="item-slick3" data-thumb="source\images\tin\{{$pro->hinh3}}">
							<div class="wrap-pic-w">
								<img src="source\images\tin\{{$pro->hinh3}}" alt="IMG-PRODUCT">
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="w-size14 p-t-30 respon5">
				<h4 class="product-detail-name m-text16 p-b-13">
					{{$pro->tenxe}} - Biển số : {{$pro->bienso}}
				</h4>

				<span class="m-text17">
					{{number_format($pro->gia)}} VNĐ
				</span>

				<p class="s-text8 p-t-10">
					{{$pro->tenxe}} màu {{$pro->mau}}, năm đăng kí {{$pro->namdangky}}, odo {{$pro->sokmdadi}} km
				</p>

				<a href="{{route('userpage',$pro->id)}}"><p class="s-text8 p-t-10">
					Người bán: {{$pro->name}}
				<a></p>

				<!--  -->
				<div class="p-t-33 p-b-60">								
					<!-- Button -->
						@if(Auth::check() && Auth::user()->id == $user->id)
						<a href="index">
						<button class="flex-c-m sizefull bg9 bo-rad-23 hov1 s-text1 trans-0-4" style="height: 40px">					
									<i class="fa fa-phone m-r-20" aria-hidden="true"></i> Bạn không được mua sản phẩm của bạn !!!
						</button>
						</a>

						@elseif(Auth::check() && $pro->kiemduyet == 1)
						<a href="lapdh?nguoiban={{$user->id}}&nguoimua={{Auth::user()->id}}&matin={{$pro->matin}}&tongtien={{$pro->gia}}">
						<button class="flex-c-m sizefull bg9 bo-rad-23 hov1 s-text1 trans-0-4" style="height: 40px">					
									<i class="fa fa-phone m-r-20" aria-hidden="true"></i> Lập đơn hàng
						</button>
						</a>
						@elseif(Auth::check() && $pro->kiemduyet != 1)
						<a href="index">
						<button class="flex-c-m sizefull bg9 bo-rad-23 hov1 s-text1 trans-0-4" style="height: 40px">					
									<i class="fa fa-phone m-r-20" aria-hidden="true"></i> Sản phẩm đã được đặt hàng !!!
						</button>
						</a>
						@elseif(!Auth::check())
						<a href="dangnhap">
						<button class="flex-c-m sizefull bg9 bo-rad-23 hov1 s-text1 trans-0-4" style="height: 40px">					
									<i class="fa fa-phone m-r-20" aria-hidden="true"></i> Vui lòng đăng nhập !!!
						</button>
						</a>
						@endif
				</div>
				<!--  -->
				<div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Mô tả
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<pre class="s-text8">
							{{$pro->mota}}
						</pre>
					</div>
				</div>

				<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Thông tin thêm
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<div class="d-flex">
							<div class="p-2" style="flex:1">
								<i class="fa fa-bookmark-o" aria-hidden="true"></i>
								Hãng xe : {{$tenhang->tenhang}}
															</div>
							<div class="p-2" style="flex:1">
								<i class="fa fa-tag" aria-hidden="true"></i>
								Dòng xe : {{$pro->tenxe}}
							</div>
						</div>
						<div class="d-flex">
							<div class="p-2" style="flex:1">
								<i class="fa fa-calendar" aria-hidden="true"></i>
								Năm đăng ký : {{$pro->namdangky}}
							</div>
							<div class="p-2" style="flex:1">
								<i class="fa fa-tachometer" aria-hidden="true"></i>
								Số Km đã đi : {{$pro->sokmdadi}}
							</div>
						</div>
						<div class="d-flex">
							<div class="p-2" style="flex:1">
								<i class="fa fa-id-card-o" aria-hidden="true"></i>
								Tình trạng : {{$pro->tinhtrangxe}}
							</div>
							
						</div>
						<div class="d-flex">
							<div class="p-2">
							<i class="fa fa-cogs" aria-hidden="true"></i>
								Dung tích xe : {{$phankhoi->phankhoi}}
							</div>
						</div>
						<br/>
						<i class="fa fa-map-marker" aria-hidden="true"></i>
						<span class="m-text12">
							Khu vực:
						</span>
						<span>Tp. Hồ Chí Minh</span>
					</div>
				</div>

				<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Đánh giá
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23 t-center">
						<?php for ($i = 1; $i <6; $i++){
								if($i<$avarage_Star+1)
 	   								echo '<span class="fa fa-star checked fs-25"></span>';
 	   							else
 	   								echo '<span class="fa fa-star fs-25"></span>';
 	   							
 	   							}
						?>
	                  
                        <p> {{$avarage_Star}} average based on {{$all_Star}} reviews.</p>
                        <hr style="border:10px solid #f1f1f1">
                        <div class="row">
                        	<?php
                        	for($i=5;$i>0;$i--)
								    {$label="";
								    switch ($i) {
								    case 5:
								        $label=$five_Star;
								        break;
								    case 4:
								       $label=$four_Star;
								        break;
								    case 3:
								       $label=$three_Star;
								        break;
								         case 2:
								       $label=$two_Star;
								        break;
								         case 1:
								       $label=$one_Star;
								     
								      
								  
								        
								}
									echo'<div class="side">';
									echo'<div>'.$i.' star</div>';
									echo'</div>';
									echo'<div class="middle">';
									echo'<div class="bar-container">';
									echo'<div class="bar-'.$i.'" style="width:'.(($label*100)/$all_Star).'%"></div>';
									echo'</div>';
									echo'</div>';
									echo' <div class="side right">';
                            		echo'<div>'.$label.'</div>';
                            		echo'                          			  </div>';
                        		}
                        	?>
                           	
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Comment -->
	<!--
	<h2 class="m-text5 t-center">Nhận xét</h2>
	<div class="Comment m-l-150">
		<span>Đánh giá của bạn về người bán: </span>
		<span class="product-review-stars">
        	<input type="radio" id="star5" name="rating" value="5" class="visuallyhidden" />
        	<label for="star5" title="Rocks!">★</label>
        	<input type="radio" id="star4" name="rating" value="4" class="visuallyhidden" />
        	<label for="star4" title="Pretty good">★</label>
        	<input type="radio" id="star3" name="rating" value="3" class="visuallyhidden" />
        	<label for="star3" title="Meh">★</label>
        	<input type="radio" id="star2" name="rating" value="2" class="visuallyhidden" />
        	<label for="star2" title="Kinda bad">★</label>
    	    <input type="radio" id="star1" name="rating" value="1" class="visuallyhidden" />
        	<label for="star1" title="Sucks big time">★</label>
		</span> 
		<div>Viết nhận xét của bạn vào bên dưới: </div>
		<textarea name="comment" placeholder="Nhận xét của bạn về người bán" rows="6" cols="80"></textarea>
		<a href="" class="flex-c-m bg1 bo-rad-20 hov1 s-text1 trans-0-4 w-size19 m-t-10" style="height: 40px">
			Gửi nhận xét
		</a>
		<hr>
	</div>
	-->
	<!-- Advertisement -->
	
	

	<!-- Relate Product -->
	<section class="relateproduct bgwhite p-t-45 p-b-138">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Sản phẩm liên quan
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">

					

					@foreach($relativepro as $rlpro)
					<div class="item-slick2 p-l-15 p-r-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative">
								<img src="source/images/tin/{{$rlpro->hinh1}}" alt="IMG-PRODUCT" height="200px">

								<div class="block2-overlay trans-0-4">
									

									<div class="block2-btn-addcart w-size1 trans-0-4">
										<!-- Button -->
										<a href="chitietsanpham?matin={{$rlpro->matin}}">
										<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											Information
										</button>
									</div>
								</div>
							</div>

							<div class="block2-txt p-t-20">
								<a href="chitietsanpham?matin={{$rlpro->matin}}" class="block2-name dis-block s-text3 p-b-5">
									{{$rlpro->tenxe}}
								</a>

								<span class="block2-price m-text6 p-r-5">
									{{number_format($rlpro->gia)}} VNĐ
								</span>
							</div>
						</div>
					</div>
					@endforeach

					

					

					

					

					
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
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="source/vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="source/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="source/vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});

		$('.btn-addcart-product-detail').each(function(){
			var nameProduct = $('.product-detail-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>

<!--===============================================================================================-->
	<script src="source/js/main.js"></script>

</body>
</html>
