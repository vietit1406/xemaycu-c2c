<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Admin</title>
    	<base href="{{asset('')}}">
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
                <a class="left-menu__item active" href="{{route('qldh')}}"><span class="icon" id="don-hang-icon"></span>Quản lý đơn hàng</a>
            	<a class="left-menu__item" href="{{route('qlhd')}}"><span class="icon" id="hoa-don-icon"></span>Quản lý hóa đơn</a>
			</div>
			<div class="main">
				<div class="breadcrumb">
					<span><a href="{{route('trangchu')}}">Home</a></span><span> / </span><span>Admin</span><span> / </span><span>Quản lý Đơn hàng</span>
				</div>

				<div class="section">
					<table id="table-dh">
						<thead>
							<tr>
								<th colspan="5">DANH SÁCH ĐƠN HÀNG</th>
							</tr>
							<tr>
								<th colspan="2" >Chọn người mua: 
									<select id="" onchange="top.location.href = this.options[this.selectedIndex].value">
										<option value="luachon" selected>---Lựa chọn---</option>
										@if(isset($nguoimua_dt))
										@foreach($nguoimua_dt as $donhang)
										<option value="{{route('filterdonhangC',$donhang->tennguoimua)}}">{{$donhang->tennguoimua}}</option>
										@endforeach
										@endif
										<option value="{{route('qldh')}}">Tất cả</option>
									</select>
								</th>
								<th colspan="2">Chọn ngày đặt hàng: 
									<select id="" onchange="top.location.href = this.options[this.selectedIndex].value">
										<option value="luachon" selected>---Lựa chọn---</option>
										@if(isset($ngaydh_dt))
										@foreach($ngaydh_dt as $donhang)
										<option value="{{route('filterdonhang',date('Y-m-d', strtotime($donhang->ngaydhh)))}}">
											{{date('Y-m-d', strtotime($donhang->ngaydhh))}}
										</option>
										@endforeach
										@endif
										<option value="{{route('qldh')}}">Tất cả</option>
									</select>
								</th>					
								<th colspan="2">Chọn người bán: 
									<select id="" onchange="top.location.href = this.options[this.selectedIndex].value">
										<option value="luachon" selected>---Lựa chọn---</option>
										@if(isset($nguoiban_dt))
										@foreach($nguoiban_dt as $donhang)
										<option value="{{route('filterdonhang',$donhang->tennguoiban)}}">{{$donhang->tennguoiban}}</option>
										@endforeach
										@endif
										<option value="{{route('qldh')}}">Tất cả</option>
									</select>
								</th>								
							</tr>
							<tr>
								<th>STT</th>
								<th>Người Mua</th>
								<th>Thời Điểm Đặt Hàng</th>
								<th>Giá xe</th>
								<th>Người Bán</th>
							</tr>
						</thead>
						<tbody>
							@if(isset($dsdh_ft))
							@foreach($dsdh_ft as $donhang)
							<tr>
								<td>{{$donhang->madh}}</td>
								<td><a href="{{route('urluser',$donhang->nguoimua)}}">{{$donhang->tennguoimua}}</a></td>
								<td>{{$donhang->ngaydh}}</td>
								<td>{{number_format($donhang->tongtien)}}</td>
								<td><a href="{{route('urluser',$donhang->nguoiban)}}">{{$donhang->tennguoiban}}</a></td>
								<td>
								</td>
							</tr>
							@endforeach
							@endif
							@if(isset($dsdh_ft_name_M))
							@foreach($dsdh_ft_name_M as $donhang)
							<tr>
								<td>{{$donhang->madh}}</td>
								<td><a href="{{route('urluser',$donhang->nguoimua)}}">{{$donhang->tennguoimua}}</a></td>
								<td>{{$donhang->ngaydh}}</td>
								<td>{{number_format($donhang->tongtien)}}</td>
								<td><a href="{{route('urluser',$donhang->nguoiban)}}">{{$donhang->tennguoiban}}</a></td>
								<td>
								</td>
							</tr>
							@endforeach
							@endif
							@if(isset($dsdh_ft_name_C))
							@foreach($dsdh_ft_name_C as $donhang)
							<tr>
								<td>{{$donhang->madh}}</td>
								<td><a href="{{route('urluser',$donhang->nguoimua)}}">{{$donhang->tennguoimua}}</a></td>
								<td>{{$donhang->ngaydh}}</td>
								<td>{{number_format($donhang->tongtien)}}</td>
								<td><a href="{{route('urluser',$donhang->nguoiban)}}">{{$donhang->tennguoiban}}</a></td>
								<td>
								</td>
							</tr>
							@endforeach
							@elseif(isset($dsdh)) 
                        	@foreach($dsdh as $donhang)
							<tr>
								<td>{{$donhang->madh}}</td>
								<td><a href="{{route('urluser',$donhang->nguoimua)}}">{{$donhang->tennguoimua}}</a></td>
								<td>{{$donhang->ngaydh}}</td>
								<td>{{number_format($donhang->tongtien)}}</td>
								<td><a href="{{route('urluser',$donhang->nguoiban)}}">{{$donhang->tennguoiban}}</a></td>
								<td>
								</td>
							</tr>
							@endforeach
							@endif
						</tbody>
					</table>
				</div>
			</div>
		</div>
		@else <h1 style="text-align: center;">Bạn không phải là Webmaster</h1>
        @endif
		<script src="source/js/all.js"></script>
	</body>
</html>