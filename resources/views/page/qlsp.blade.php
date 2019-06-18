<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <base href="{{asset('')}}">
    <link rel="stylesheet" href="source/css/styles.css">
    <link rel="stylesheet" href="source/css/qlsp.css">
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
            <a class="left-menu__item active" href="{{route('qlsp')}}"><span class="icon" id="product-icon"></span>Quản lý sản phẩm</a>
            <a class="left-menu__item" href="{{route('qluser')}}"><span class="icon" id="user-icon"></span>Quản lý User</a>
            <a class="left-menu__item" href="{{route('qldh')}}"><span class="icon" id="don-hang-icon"></span>Quản lý đơn hàng</a>
            <a class="left-menu__item" href="{{route('qlhd')}}"><span class="icon" id="hoa-don-icon"></span>Quản lý hóa đơn</a>
        </div>
        <div class="main">
            <div class="breadcrumb">
                <span><a href="{{route('trangchu')}}">Home</a></span><span> / </span><span>Admin</span><span> / </span><span>Quản lý sản phẩm</span>
            </div>
            <div class="section">
                @if(Session::has('success'))
                    <div style="color:#27ae60">{{Session::get('success')}}</div>
                @endif
                <!--<div class="them-sp"><button onclick="popup_themsp()">Thêm Sản Phẩm</button></div>-->
                <table id="table-dh">
                    <thead>

                        <tr>
                            <th colspan="9" style="text-align:center;">DANH SÁCH SẢN PHẨM</th>
                        </tr>
                        <tr>
                            <!--<th colspan="2">Chọn ngày đăng tin: 
                                <select id="">
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value="all" selected>Tất cả</option>
                                    </select>
                                </th>
                                <th colspan="2">Chọn người bán: 
                                    <select id="">
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value="all" selected>Tất cả</option>
                                    </select>
                                </th>
                                <th colspan="2">Chọn tình trạng xe: 
                                    <select id="">
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value="all" selected>Tất cả</option>
                                    </select>
                                </th>-->
                                <th colspan="2">Chọn tình trạng tin: 
                                    <select id="" onchange="top.location.href = this.options[this.selectedIndex].value">
                                        <option value="luachon" selected>---Lựa chọn---</option>
                                        @if(isset($kd_dt))
                                        @foreach($kd_dt as $tin)
                                        <option value="{{route('filtersanpham',$tin->kiemduyet)}}">
                                            @if(($tin->kiemduyet)==0) Chưa duyệt
                                            @elseif(($tin->kiemduyet)==-1) Đã ẩn
                                            @else Đã duyệt
                                            @endif 
                                        </option>
                                        @endforeach
                                        @endif
                                        <option value="{{route('qlsp')}}">Tất cả</option>
                                    </select>
                                </th>
                            </tr>
                        <tr>
                            <th>STT</th>
                            <th>Hình</th>
                            <th>Tên</th>
                            <th>Giá</th>
                            <th>Hãng</th>
                            <th>Người bán</th>
                            <th>Tình trạng xe</th>
                            <th>Ngày đăng tin</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($dssp_ft)) 
                        @foreach($dssp_ft as $sanpham)
                        <tr style="cursor:default;">
                            <td>{{$sanpham->matin}}</td>
                            <td><img src="source/images/tin/{{$sanpham->hinh1}}" width="110px"></td>
                            <td>{{$sanpham->tenxe}}</td>
                            <td>{{$sanpham->gia}}</td>
                            <td>{{$sanpham->tenhang}}</td>
                            <td>{{$sanpham->name}}</td>                               
                            <td>{{$sanpham->tinhtrangxe}}</td>                               
                            <td>{{$sanpham->ngaydangtin}}</td>                               
                            <td>
                                @if($sanpham->kiemduyet==0)
                                <a href="{{route('duyetbai',$sanpham->matin)}}" class="xoa_sp" style="text-decoration: none;">Duyệt bài</a>
                                @elseif($sanpham->kiemduyet==-1)
                                Đã ẩn
                                @else
                                Đã duyệt
                                @endif                              
                            </td>
                        </tr>
                        @endforeach
                        @endif
                        @if(isset($dssp)) 
                        @foreach($dssp as $sanpham)
                        <tr style="cursor:default;">
                            <td>{{$sanpham->matin}}</td>
                            <td><img src="source/images/tin/{{$sanpham->hinh1}}" width="110px"></td>
                            <td>{{$sanpham->tenxe}}</td>
                            <td>{{$sanpham->gia}}</td>
                            <td>{{$sanpham->tenhang}}</td>
                            <td>{{$sanpham->name}}</td>                               
                            <td>{{$sanpham->tinhtrangxe}}</td>                               
                            <td>{{$sanpham->ngaydangtin}}</td>                               
                            <td>
                                @if($sanpham->kiemduyet==0)
                                <a href="{{route('duyetbai',$sanpham->matin)}}" class="xoa_sp" style="text-decoration: none;">Duyệt bài</a>
                                @else
                                Đã duyệt
                                @endif                              
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- popup thêm sp -->
    <div class="popup-themsp">
        <div class="popup-themsp__content">
            <div class="popup-themsp__title">Thêm Sản Phẩm</div>
            <div class="popup-themsp-left">
                <div class="popup-themsp-left__label">Nhập Tên</div>
                <div class="popup-themsp-left__label">Nhập Giá</div>
                <div class="popup-themsp-left__label">Nhập Mã</div>
                <div class="popup-themsp-left__label">Chọn Hình</div>
                <div class="popup-themsp-left__label">Nhập Loại</div>
            </div>
            <div class="popup-themsp-right">
                <div class="popup-themsp-left__input"><input class="them-ten" type="text" placeholder="Tên sản phẩm"></div>
                <div class="popup-themsp-left__input"><input class="them-gia" type="text" placeholder="Giá sản phẩm"></div>
                <div class="popup-themsp-left__input"><input class="them-thu-tu" type="text" placeholder="Mã sản phẩm"></div>
                <div class="popup-themsp-left__input"><input class="them-hinh" type="file"></div>
                <div class="popup-themsp-left__input"><input class="them-loai" type="text" placeholder="Loại sản phẩm"></div>
            </div>
            <button class="popup-themsp__btn" onclick="alert('Thêm thành công')">Thêm</button>
            <span class="back" onclick="close_popup_themsp()">&times;</span>
        </div>
    </div>
    <!-- popup sửa sp -->
    <div class="popup-themsp">
        <div class="popup-themsp__content">
            <div class="popup-themsp__title">Sửa Sản Phẩm</div>
            <div class="popup-themsp-left">
                <div class="popup-themsp-left__label">Tên</div>
                <div class="popup-themsp-left__label_2">Mô tả</div>
                <div class="popup-themsp-left__label">Hình 1</div>
                <div class="popup-themsp-left__label">Hình 2</div>
                <div class="popup-themsp-left__label">Hình 3</div>
            </div>
            <div class="popup-themsp-right">
                <div class="popup-themsp-left__input"><input class="them-ten" type="text" placeholder="Tên sản phẩm"></div>
                <div class="popup-themsp-left__input_2"><textarea name="" id="" cols="37" rows="10" style="border: solid 1px black"></textarea></div>
                <div class="popup-themsp-left__input"><input class="them-hinh" type="file"></div>
                <div class="popup-themsp-left__input"><input class="them-hinh" type="file"></div>
                <div class="popup-themsp-left__input"><input class="them-hinh" type="file"></div>
            </div>
            <button class="popup-themsp__btn" onclick="alert('Sửa thành công')">Sửa</button>
            <span class="back" onclick="close_popup_themsp()">&times;</span>
            <img src="image/img-01.png" class="sua-hinh" width="185">
        </div>
    </div>
    @else <h1 style="text-align: center;">Bạn không phải là Webmaster</h1>
    @endif
    <script src="source/js/all.js"></script>
</body>

</html>