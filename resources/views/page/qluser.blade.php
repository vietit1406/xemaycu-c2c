<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Admin</title>
        <base href="{{asset('')}}">
		<link rel="stylesheet" href="source/css/styles.css">
		<link rel="stylesheet" href="source/css/qluser.css">
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
                <a class="left-menu__item active" href="{{route('qluser')}}"><span class="icon" id="user-icon"></span>Quản lý User</a>
                <a class="left-menu__item" href="{{route('qldh')}}"><span class="icon" id="don-hang-icon"></span>Quản lý đơn hàng</a>
                <a class="left-menu__item" href="{{route('qlhd')}}"><span class="icon" id="hoa-don-icon"></span>Quản lý hóa đơn</a>
			</div>
			<div class="main">
				<div class="breadcrumb">
					<span><a href="{{route('trangchu')}}">Home</a></span><span> / </span><span>Admin</span><span> / </span><span>Quản lý User</span>
				</div>
            <div class="section">
                @if(Session::has('success'))
                    <div style="color:#27ae60">{{Session::get('success')}}</div>
                @endif
                <table id="table-dh">
                    <thead>
                        <tr>
                            <th colspan="10" style="text-align:center;">DANH SÁCH NGƯỜI DÙNG</th>
                        </tr>
                        <tr>
                            <th>ID</th>
                            <th>Họ Tên</th>
                            <th>Địa Chỉ</th>
                            <th>SĐT</th>
                            <th>Email</th>
                            <th>Loại Thành Viên</th>
                            <th>Số tin tồn</th>
                            <th>Thời hạn đăng tin</th>
                            <th>Trạng thái</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($urluser))
                            <tr style="height: 80px;">
                            <td>{{$urluser->id}}</td>
                            <td>{{$urluser->name}}</td>
                            <td>{{$urluser->diachi}}</td>
                            <td>{{$urluser->sdt}}</td>
                            <td>{{$urluser->email}}</td>
                            <td>
                                @if($urluser->loaitv == "M") 
                                    Người bán
                                @elseif($urluser->loaitv== "C") 
                                    Người Mua
                                @else 
                                    Webmaster
                                @endif
                            </td>
                            <td>{{$urluser->sotinton}}</td>
                            <td>{{$urluser->thoihandangtin}}</td>
                            <td>{{$urluser->kichhoat}}</td>
                            <td>
                                @if($urluser->kichhoat=="Kích hoạt")
                                <a href="{{route('khoataikhoan',$urluser->id)}}" class="thaotac" style="text-decoration: none;">
                                    Khóa Tài Khoản
                                </a>
                                @else
                                <a href="{{route('motaikhoan',$urluser->id)}}" class="thaotac" style="text-decoration: none;">
                                    Mở Tài Khoản
                                </a>
                                @endif
                                <br><br>
                                
                                <a href="{{route('resetpass',$urluser->id)}}" class="thaotac" style="text-decoration: none;">Reset Password</a>
                            </td>
                        </tr>
                        @endif
                        @if(isset($dsuser)) 
                        @foreach($dsuser as $user)
                        <tr style="height: 80px;">
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->diachi}}</td>
                            <td>{{$user->sdt}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                @if($user->loaitv == "M") 
                                    Người bán
                                @elseif($user->loaitv== "C") 
                                    Người Mua
                                @else 
                                    Webmaster
                                @endif
                            </td>
                            <td>{{$user->sotinton}}</td>
                            <td>{{$user->thoihandangtin}}</td>
                            <td>{{$user->kichhoat}}</td>
                            <td>
                                @if($user->kichhoat=="Kích hoạt")
                                <a href="{{route('khoataikhoan',$user->id)}}" class="thaotac" style="text-decoration: none;">
                                    Khóa Tài Khoản
                                </a>
                                @else
                                <a href="{{route('motaikhoan',$user->id)}}" class="thaotac" style="text-decoration: none;">
                                    Mở Tài Khoản
                                </a>
                                @endif
                                <br><br>
                                
                                <a href="{{route('resetpass',$user->id)}}" class="thaotac" style="text-decoration: none;">Reset Password</a>
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