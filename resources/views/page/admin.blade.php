<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Admin</title>
        <link rel="stylesheet" href="source/css/styles.css">
        <link rel="stylesheet" href="source/fontawesome/fontawesome-free-5.5.0-web/css/all.min.css">
        <link rel="stylesheet" href="source/fontawesome/fontawesome-free-5.5.0-web/webfonts/fa-brands-400.ttf">
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
                <a class="left-menu__item active" href="{{route('admin')}}"><span id="speed-icon"></span>Thống kê</a>
                <a class="left-menu__item" href="{{route('qlsp')}}"><span class="icon" id="product-icon"></span>Quản lý sản phẩm</a>
                <a class="left-menu__item" href="{{route('qluser')}}"><span class="icon" id="user-icon"></span>Quản lý User</a>
                <a class="left-menu__item" href="{{route('qldh')}}"><span class="icon" id="don-hang-icon"></span>Quản lý đơn hàng</a>
                <a class="left-menu__item" href="{{route('qlhd')}}"><span class="icon" id="hoa-don-icon"></span>Quản lý hóa đơn</a>
            </div>
            <div class="main" style="text-align: center;">
                <div class="breadcrumb">
                    <span><a href="{{route('trangchu')}}">Home</a></span>
                    <span> / </span><span>Admin</span><span> / </span><span>Thống kê</span>
                </div>
                <!--<div class="chart chart-bgred">
                    <div class="chart__num">12.558</div>
                    <div class="chart__label">Người Truy Cập</div>
                    <div class="chart__img chart__img-img1"></div>
                </div>-->
                <a href="{{route('qlhd')}}"><div class="chart chart-bgyellow" style="text-align: left;">
                    <div class="chart__num">@if(isset($doanhthu)) {{number_format($doanhthu)}} @endif VNĐ</div>
                    <div class="chart__label">Doanh Thu</div>
                    <div class="chart__img chart__img-img4"></div>
                </div></a>
                <br><br><hr><br>
                <a href="{{route('qlsp')}}"><div class="thong-ke" style="text-align: left;">
                    <div class="thong-ke__num">@if(isset($tongsanpham)) {{$tongsanpham}} @endif</div>
                    <div class="thong-ke__title">Tổng Sản Phẩm</div>
                    <div class="thong-ke__img img1"></div>
                </div></a>
                <a href="{{route('qluser')}}"><div class="thong-ke" style="text-align: left;">
                    <div class="thong-ke__num">@if(isset($sokhachhang)) {{$sokhachhang}} @endif</div>
                    <div class="thong-ke__title">Khách Hàng</div>
                    <div class="thong-ke__img img2"></div>
                </div></a>
                <a href="{{route('qlhd')}}"><div class="thong-ke" style="text-align: left;">
                    <div class="thong-ke__num">@if(isset($tonghoadon)) {{$tonghoadon}} @endif</div>
                    <div class="thong-ke__title">Hóa đơn</div>
                    <div class="thong-ke__img img3"></div>
                </div></a>
                <a href="{{route('qldh')}}"><div class="thong-ke" style="text-align: left;">
                    <div class="thong-ke__num">@if(isset($tongdonhang)) {{$tongdonhang}} @endif</div>
                    <div class="thong-ke__title">Đơn đặt hàng mua xe</div>
                    <div class="thong-ke__img img3"></div>
                </div></a>
            </div>
        </div>
        @else <h1 style="text-align: center;">Bạn không phải là Webmaster</h1>
        @endif
        <script src="js/all.js"></script>
    </body>
</html>