<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
    	<base href="{{asset('')}}">
		<title>Admin</title>
		<link rel="stylesheet" href="srouce/css/qldh.css">
		<link rel="stylesheet" href="source/css/styles.css">
	</head>
	<body>
        @if((Auth::check()) && (Auth::user()->loaitv == 'W'))
		<div class="wrapper">
			<div class="header">
				<span class="title-header">ADMIN AREA</span>
				<div class="nav-right">
                    <img src="source/images/icons/user-icon.svg">
                    <div class="ten-admin">{{Auth::user()->name}}</div>
                    <a href="{{route('logout')}}">
                        <div style="font-size: 15px;margin:17px 8px 0 8px">Đăng Xuất</div>
                    </a>
                </div>
			</div>
			<div class="left-menu">
				<a class="left-menu__item" href="{{route('admin')}}"><span id="speed-icon"></span>Thống kê</a>
                <a class="left-menu__item" href="{{route('qlsp')}}"><span class="icon" id="product-icon"></span>Quản lý sản phẩm</a>
                <a class="left-menu__item" href="{{route('qluser')}}"><span class="icon" id="user-icon"></span>Quản lý User</a>
                <a class="left-menu__item" href="{{route('qldh')}}"><span class="icon" id="don-hang-icon"></span>Quản lý đơn hàng</a>
                <a class="left-menu__item active" href="{{route('qlhd')}}"><span class="icon" id="hoa-don-icon"></span>Quản lý hóa đơn</a>
			</div>
			<div class="main">
				<div class="breadcrumb">
					<span><a href="{{route('trangchu')}}">Home</a></span><span> / </span><span>Admin</span><span> / </span><span>Quản lý Đơn hàng</span>
				</div>
				<div class="section">
					<table id="table-dh">
						<thead>
							<tr>
								<th colspan="5">DANH SÁCH HÓA ĐƠN</th>
							</tr>
							<tr>
								<th colspan="2" >Chọn người mua: 
									<select id="" onchange="top.location.href = this.options[this.selectedIndex].value">
										<option value="luachon" selected>---Lựa chọn---</option>
										@if(isset($nguoimua_dt))
										@foreach($nguoimua_dt as $hoadon)
										<option value="{{route('filterhoadon',$hoadon->tennguoimua)}}">{{$hoadon->tennguoimua}}</option>
										@endforeach
										@endif
										<option value="{{route('qlhd')}}">Tất cả</option>
									</select>
								</th>
								<th colspan="2">Chọn ngày lập hóa đơn: 
									<select id="" onchange="top.location.href = this.options[this.selectedIndex].value">
										<option value="luachon" selected>---Lựa chọn---</option>
										@if(isset($ngayhd_dt))
										@foreach($ngayhd_dt as $hoadon)
										<option value="{{route('filterhoadon',date('Y-m-d', strtotime($hoadon->ngayhdd)))}}">
											{{date('Y-m-d', strtotime($hoadon->ngayhdd))}}
										</option>
										@endforeach
										@endif
										<option value="{{route('qlhd')}}">Tất cả</option>
									</select>
								</th>
								<th colspan="2">Chọn loại hóa đơn: 
									<select id="" onchange="top.location.href = this.options[this.selectedIndex].value">
										<option value="luachon" selected>---Lựa chọn---</option>
										@if(isset($loai_dt))
										@foreach($loai_dt as $hoadon)
										<option value="{{route('filterhoadon',$hoadon->loaihd)}}">{{$hoadon->loaihd}}</option>
										@endforeach
										@endif
										<option value="{{route('qlhd')}}">Tất cả</option>
									</select>
								</th>
							</tr>
							<tr>
								<th>STT</th>
								<th>Người Mua</th>
								<th>Thời Điểm Đặt Hàng</th>
								<th>Loại hóa đơn</th>
								<th>Tổng Tiền</th>
							</tr>
						</thead>
						<tbody>							
							@if(isset($dshd_ft)) 
                        	@foreach($dshd_ft as $hoadon)
							<tr>
								<td>{{$hoadon->mahd}}</td>
								<td><a href="{{route('urluser',$hoadon->matv)}}">{{$hoadon->name}}</a></td>
								<td>{{$hoadon->ngayhd}}</td>
								<td>{{$hoadon->loaihd}}</td>
								<td>{{number_format($hoadon->tongtien)}}</td>
							</tr>
							@endforeach
							@endif
							@if(isset($dshd_ft_name)) 
                        	@foreach($dshd_ft_name as $hoadon)
							<tr>
								<td>{{$hoadon->mahd}}</td>
								<td><a href="{{route('urluser',$hoadon->matv)}}">{{$hoadon->name}}</a></td>
								<td>{{$hoadon->ngayhd}}</td>
								<td>{{$hoadon->loaihd}}</td>
								<td>{{number_format($hoadon->tongtien)}}</td>
							</tr>
							@endforeach
							@endif
							@if(isset($dshd_ft_loai)) 
                        	@foreach($dshd_ft_loai as $hoadon)
							<tr>
								<td>{{$hoadon->mahd}}</td>
								<td><a href="{{route('urluser',$hoadon->matv)}}">{{$hoadon->name}}</a></td>
								<td>{{$hoadon->ngayhd}}</td>
								<td>{{$hoadon->loaihd}}</td>
								<td>{{number_format($hoadon->tongtien)}}</td>
							</tr>
							@endforeach
							@endif
							@if(isset($dshd)) 
                        	@foreach($dshd as $hoadon)
							<tr>
								<td>{{$hoadon->mahd}}</td>
								<td><a href="{{route('urluser',$hoadon->matv)}}">{{$hoadon->name}}</a></td>
								<td>{{$hoadon->ngayhd}}</td>
								<td>{{$hoadon->loaihd}}</td>
								<td>{{number_format($hoadon->tongtien)}}</td>
							</tr>
							@endforeach
							@endif
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="popup-themsp">
			<div class="popup-themsp__content">
				<div class="popup-themsp__title">Chi Tiết Đơn Hàng</div>
				<div class="popup-themsp-left">
					<div class="popup-themsp-left__label">Khách hàng</div>
					<div class="popup-themsp-left__label">Thời điểm đặt hàng</div>
					<div class="popup-themsp-left__label">Iphone XS MAX</div>
					<div class="popup-themsp-left__label">Tổng tiền</div>
					<div class="popup-themsp-left__label">Tình trạng</div>
				</div>
				<div class="popup-themsp-right">
					<div class="popup-themsp-left__input">xxx</div>
					<div class="popup-themsp-left__input">xxx</div>
					<div class="popup-themsp-left__input">xxx</div>
					<div class="popup-themsp-left__input">xxx</div>
					<div class="popup-themsp-left__input">xxx</div>
				</div>
				<span class="back" onclick="close_popup_themsp()">&times;</span>
			</div>
		</div>
		@else <h1 style="text-align: center;">Bạn không phải là Webmaster</h1>
        @endif
		<script src="source/js/all.js"></script>
	</body>
</html>