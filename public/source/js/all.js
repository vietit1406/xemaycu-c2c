/**
 * [DonHang description]
 * @param {[type]} khach_hang [description]
 * @param {[type]} thoi_diem  [description]
 * @param {[type]} tong_tien  [description]
 * @param {[type]} tinh_trang [description]
 */
function DonHang(khach_hang, thoi_diem, tong_tien, tinh_trang) {
    this.khach_hang = khach_hang;
    this.thoi_diem = thoi_diem;
    this.tong_tien = tong_tien;
    this.tinh_trang = tinh_trang;
}
var donhang = new Array();
/**
 * [TheLoai description]
 * @param {[type]} stt      [description]
 * @param {[type]} ten      [description]
 * @param {[type]} thu_tu   [description]
 * @param {[type]} hien_thi [description]
 */
function DanhMuc(ten, thu_tu, hien_thi) {
    this.ten = ten;
    this.thu_tu = thu_tu;
    this.hien_thi = hien_thi;
}
var danhmuc = new Array();
/**
 * [User description]
 * @param  {[type]} name      [description]
 * @param  {[type]} dia_chi   [description]
 * @param  {[type]} sdt       [description]
 * @param  {[type]} email     [description]
 * @param  {[type]} gioi_tinh [description]
 * @param  {[type]} ngsinh    [description]
 */
function User(name, dia_chi, sdt, email, gioi_tinh, ngsinh) {
    this.name = name;
    this.dia_chi = dia_chi;
    this.sdt = sdt;
    this.email = email;
    this.gioi_tinh = gioi_tinh;
    this.ngsinh = ngsinh;
}
user = new Array();
/**
 * [san_pham description]
 * @param  {[type]} masp  [description]
 * @param  {[type]} matl  [description]
 * @param  {[type]} tensp [description]
 * @param  {[type]} gia   [description]
 * @param  {[type]} hinh  [description]
 */
function san_pham(masp, matl, tensp, gia, hinh, loai, hien_thi) {
    this.masp = masp;
    this.matl = matl;
    this.tensp = tensp;
    this.gia = gia;
    this.hinh = hinh;
    this.loai = loai;
    this.hien_thi = hien_thi;
}
var phone = new Array();

// -------------------------------------------Hoàn tất khởi tạo----------------------------
// 


function load_don_hang() {
    var s = 0;
    var stt = 1;
    for (var i = 0; i < donhang.length; i++) {
        s += donhang[i].tong_tien;
        document.getElementsByTagName("tbody")[0].innerHTML += '\
                            <tr>\
                                <td>' + (stt++) + '</td>\
                                <td>' + donhang[i].khach_hang + '</td>\
                                <td>' + donhang[i].thoi_diem + '</td>\
                                <td>' + donhang[i].tong_tien + ' VND</td>\
                                <td>' + donhang[i].tinh_trang + '</td>\
                            </tr>';
    }
    document.getElementsByTagName("tbody")[0].innerHTML += '\
                <tr>\
                    <td colspan="5" style="color: red;background: white;text-align:right;padding-right:10px">Tổng tiền : ' + s + ' VND</td>\
                </tr>';
}


function load_quan_ly_user() {
    for (var i = 0; i < user.length; i++) {
        document.getElementById('table-user').innerHTML += '\
                    <tr>\
                        <td>' + (i + 1) + '</td>\
                        <td>' + user[i].name + '</td>\
                        <td>' + user[i].dia_chi + '</td>\
                        <td>' + user[i].sdt + '</td>\
                        <td>' + user[i].email + '</td>\
                        <td>' + user[i].gioi_tinh + '</td>\
                        <td>' + user[i].ngsinh + '</td>\
                        <td>\
                            <button class="xoa_sp">Xóa</button><br>\
                        </td>\
                    </tr>';
    }
}

function load_quan_ly_danh_muc() {
    for (var i = 0; i < danhmuc.length; i++) {
        document.getElementById('table-dm').innerHTML += '\
                    <tr>\
                        <td>' + (i + 1) + '</td>\
                        <td>' + danhmuc[i].ten + '</td>\
                        <td>' + danhmuc[i].thu_tu + '</td>\
                        <td>' + danhmuc[i].hien_thi + '</td>\
                        <td>\
                            <button class="xoa_sp">Xóa</button><br>\
                            <button class="sua_sp">Sửa</button>\
                        </td>\
                    </tr>';
    }
}

function load_quan_ly_sp() {
    for (var i = 0; i < phone.length; i++) {
        document.getElementById('table-sp').innerHTML += '\
                    <tr>\
                        <td>' + (i + 1) + '</td>\
                        <td><img src="../' + phone[i].hinh + '" width="110px"></td>\
                        <td>' + phone[i].tensp + '</td>\
                        <td>' + phone[i].gia + '</td>\
                        <td>' + phone[i].loai + '</td>\
                        <td>' + phone[i].masp + '</td>\
                        <td>\
                            <button class="xoa_sp">Xóa</button><br>\
                            <button class="sua_sp">Sửa</button>\
                        </td>\
                    </tr>';
    }
}


//Load nội dung lên từng trang
window.onload = () => {
    url = window.location.href;
    if (url.indexOf('qldh') !== -1) {
        //load_don_hang();
        document.getElementById('trang_thai').onchange = function() {
            //load_trang_thai_don_hang(this.value);
            xem_chi_tiet_hoa_don();
        };
        xem_chi_tiet_hoa_don();
    } else if (url.indexOf('qluser') !== -1) {
        //load_quan_ly_user();
        //xoa_user();
    } else if (url.indexOf('qldm') !== -1) {
        //load_quan_ly_danh_muc();
        //them_xoa_dm();
    } else if (url.indexOf('qlsp') !== -1) {
        //load_quan_ly_sp();
        //them_xoa_sp();
    }
};

//Các hàm xử lý đối tượng
//
//
//
//
function popup_themsp() {
    document.getElementsByClassName('popup-themsp')[0].style.display = 'block';
}

function close_popup_themsp() {
    document.getElementsByClassName('popup-themsp')[0].style.display = 'none';
    try {
        document.getElementsByClassName('popup-themsp')[1].style.display = 'none';
    } catch (e) {
        console.log("Đang ở trang Quản lý Đơn Hàng");
    }
}
//Thêm sự kiện cho nút sửa và xoá
function them_xoa_sp() {
    var sua_sp = document.getElementsByClassName('sua_sp');
    var xoa_sp = document.getElementsByClassName('xoa_sp');
    for (var i = 0; i < sua_sp.length; i++) {
        them_thong_tin_sua_sp(sua_sp[i], i);
        xoa_sp_i(xoa_sp[i], i);
    }
};

function them_xoa_dm() {
    var sua_sp = document.getElementsByClassName('sua_sp');
    var xoa_sp = document.getElementsByClassName('xoa_sp');
    for (var i = 0; i < sua_sp.length; i++) {
        them_thong_tin_sua_dm(sua_sp[i], i);
        xoa_dm_i(xoa_sp[i], i);
    }
};
// Xoá sp thứ i
function xoa_sp_i(e, i) {
    e.addEventListener('click', function(e) {
        if (confirm('Xác nhận xoá')) {
            document.querySelectorAll('tbody tr')[i].style.display = 'none';
        }
    });
}
//load thông tin của sản phẩm lên form sửa sản phẩm
function them_thong_tin_sua_sp(e, i) {
    e.addEventListener('click', function() {
        document.getElementsByClassName('popup-themsp')[1].style.display = 'block';
        document.getElementsByClassName('them-ten')[1].value = phone[i].tensp;
        document.getElementsByClassName('them-gia')[1].value = phone[i].gia;
        document.getElementsByClassName('them-thu-tu')[1].value = phone[i].masp;
        document.getElementsByClassName('them-loai')[1].value = phone[i].loai;
        document.getElementsByClassName('sua-hinh')[0].setAttribute('src', '../' + phone[i].hinh);
    });
}
// Xoá dm thứ i
function xoa_dm_i(e, i) {
    e.addEventListener('click', function(e) {
        if (confirm('Xác nhận xoá')) {
            document.querySelectorAll('tbody tr')[i].style.display = 'none';
        }
    });
}
//load thông tin của sản phẩm lên form sửa danh mục
function them_thong_tin_sua_dm(e, i) {
    e.addEventListener('click', function() {
        document.getElementsByClassName('popup-themsp')[1].style.display = 'block';
        document.getElementsByClassName('them-ten')[1].value = danhmuc[i].ten;
        document.getElementsByClassName('them-thu-tu')[1].value = danhmuc[i].thu_tu;
        document.getElementsByClassName('hien-thi')[1].setAttribute('checked', '');
        // document.getElementsByClassName('them-loai')[1].value = phone[i].loai;
        // document.getElementsByClassName('sua-hinh')[0].setAttribute('src', '../' + phone[i].hinh);
    });
}


//quản lý user
function xoa_user() {
    var xoa_sp = document.getElementsByClassName('xoa_sp');
    for (var i = 0; i < xoa_sp.length; i++) {
        xoa_user_i(xoa_sp[i], i);
    }
};
// Xoá sp thứ i
function xoa_user_i(e, i) {
    e.addEventListener('click', function(e) {
        if (confirm('Xác nhận xoá')) {
            document.querySelectorAll('tbody tr')[i].style.display = 'none';
        }
    });
}



function load_trang_thai_don_hang(va) {
    var s = 0;
    var stt = 1;
    document.getElementsByTagName("tbody")[0].innerHTML = "";
    for (var i = 0; i < donhang.length; i++) {
        if (va == donhang[i].tinh_trang || va == "all") {
            s += donhang[i].tong_tien;
            document.getElementsByTagName("tbody")[0].innerHTML += '\
                            <tr>\
                                <td>' + (stt++) + '</td>\
                                <td>' + donhang[i].khach_hang + '</td>\
                                <td>' + donhang[i].thoi_diem + '</td>\
                                <td>' + donhang[i].tong_tien + ' VND</td>\
                                <td>' + donhang[i].tinh_trang + '</td>\
                            </tr>';
        }
    }
    document.getElementsByTagName("tbody")[0].innerHTML += '\
                <tr>\
                    <td colspan="5" style="color: red;background: white;text-align:right;padding-right:10px">Tổng tiền : ' + s + ' VND</td>\
                </tr>';
}

function xem_chi_tiet_hoa_don() {
    var tr = document.querySelectorAll('tbody tr');
    for (var i = 0; i < tr.length - 1; i++) {
        load_chi_tiet_hoa_don(i, tr[i]);
    }
}

function load_chi_tiet_hoa_don(i, e) {
    e.onclick = () => {
        document.getElementsByClassName('popup-themsp')[0].style.display = "block";
        console.log(donhang[i].khach_hang);
        document.getElementsByClassName('popup-themsp-left__input')[0].innerHTML = donhang[i].khach_hang;
        document.getElementsByClassName('popup-themsp-left__input')[1].innerHTML = donhang[i].thoi_diem;
        document.getElementsByClassName('popup-themsp-left__input')[2].innerHTML = donhang[i].tong_tien;
        document.getElementsByClassName('popup-themsp-left__input')[3].innerHTML = donhang[i].tong_tien;
        document.getElementsByClassName('popup-themsp-left__input')[4].innerHTML = donhang[i].tinh_trang;
    }
}