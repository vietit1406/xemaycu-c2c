<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('dangki',[
	'as'=>'signin',
	'uses'=>'PageController@getSignin'
]);

Route::post('dangki',[
	'as'=>'signin',
	'uses'=>'PageController@postSignin'
]);

Route::post('sendmail',[
	'as'=>'sendmail',
	'uses'=>'PageController@sendMail'
]);


Route::get('dangnhap',[
	'as'=>'dangnhap',
	'uses'=>'PageController@getLogin'
]);
/*
Route::post('dangnhap',[
	'as'=>'login',
	'uses'=>'PageController@postLogin'
]); */

Route::get('index',[
	'as'=>'trangchu',
	'uses'=>'PageController@getIndex'
]);

Route::get('product',[
	'as'=>'sanpham',
	'uses'=>'PageController@getProduct'
]);

Route::get('producttheohang/{hang}',[
	'as'=>'sanphamtheohang',
	'uses'=>'PageController@getProducttheohang'
]);

Route::get('producttheophankhoi/{phankhoi}',[
	'as'=>'sanphamtheophankhoi',
	'uses'=>'PageController@getProducttheophankhoi'
]);

Route::get('producttheoloaixe/{loaixe}',[
	'as'=>'sanphamtheoloaixe',
	'uses'=>'PageController@getProducttheoloaixe'
]);

Route::get('chitietsanpham',[
	'as'=>'chitietsanpham',
	'uses'=>'PageController@getChitietsanpham'
]);

Route::get('buynew',[
	'as'=>'muatin',
	'uses'=>'PageController@getBuynew'
]);

Route::get('buynew2',[
	'as'=>'luuhdmuatin',
	'uses'=>'PageController@getLuuhdmuatin'
]);

Route::get('buyphitv',[
	'as'=>'muaphitv',
	'uses'=>'PageController@getBuyphitv'
]);

Route::get('buyphitv2',[
	'as'=>'luuhdmuaphitv',
	'uses'=>'PageController@getLuuhdmuaphitv'
]);

Route::get('postnew',[
	'as'=>'dangtin',
	'uses'=>'PageController@getPostnew'
]);

Route::post('postnew',[
	'as'=>'dangtin',
	'uses'=>'PageController@postPostnew'
]);

Route::get('lichsugiaodich',[
	'as'=>'lichsugiaodich',
	'uses'=>'PageController@getLichsugiaodich'
]);

Route::get('danhgia',[
	'as'=>'danhgia',
	'uses'=>'PageController@getDanhgia'
]);

Route::post('danhgia',[
	'as'=>'danhgia',
	'uses'=>'PageController@postDanhgia'
]);

Route::get('qlbh',[
	'as'=>'quanlybanhang',
	'uses'=>'PageController@getQuanlybanhang'
]);

Route::get('capnhatdb',[
	'as'=>'capnhatdonhang',
	'uses'=>'PageController@getCapnhatdonhang'
]);

Route::post('capnhatdb',[
	'as'=>'capnhatdonhang',
	'uses'=>'PageController@postCapnhatdonhang'
]);

Route::get('chitietsanpham',[
	'as'=>'chitietsanpham',
	'uses'=>'PageController@getChitietsanpham'
]);

Route::get('timkiem',[
	'as'=>'timkiem',
	'uses'=>'PageController@getTimkiem'
]);

Route::get('lapdh',[
	'as'=>'lapdonhang',
	'uses'=>'PageController@getLapdonhang'
]);

Route::get('filterproduct',[
'as'=>'filterproduct',
'uses'=>'PageController@getFilterr']);

Route::get('relatingproduct',[
'as'=>'relatingproduct',
'uses'=>'PageController@getRelatingproduct']);

Route::get('contact',[
	'as'=>'lienhe',
	'uses'=>'PageController@getContact'
]);

Route::get('cart',[
	'as'=>'giohang',
	'uses'=>'PageController@getCart'
]);

Route::get('dangxuat',[
	'as'=>'logout1',
	'uses'=>'PageController@postLogout'
]);

Route::get('trangcanhan/{sdtt}',[
	'as'=>'userpage',
	'uses'=>'PageController@getUserpage'
]);
Route::get('dangtin',[
	'as'=>'upload',
	'uses'=>'PageController@getUpload'
]);


//ADMIN
Route::get('admin',[
	'as'=>'admin',
	'uses'=>'PageController@getAdmin'
]);
Route::get('duyetbai/{matin}',[
	'as'=>'duyetbai',
	'uses'=>'PageController@getDuyet'
]);

Route::get('suathongtin/{matin}',[
	'as'=>'suathongtin',
	'uses'=>'PageController@getEdituser'
]);
Route::post('suathongtin/{matin}',[
	'as'=>'suathongtin',
	'uses'=>'PageController@postEdituser'
]);

Route::get('suathongtinproduct/{iduser}/{matin}',[
	'as'=>'suathongtinproduct',
	'uses'=>'PageController@getEditproduct'
]);
Route::post('suathongtinproduct/{iduser}/{matin}',[
	'as'=>'suathongtinproduct',
	'uses'=>'PageController@postEditproduct'
]);
Route::get('hideproduct/{iduser}/{matin}',[
	'as'=>'hideproduct',
	'uses'=>'PageController@getHideproduct'
]);
//QLSP
Route::get('qlsp',[
	'as'=>'qlsp',
	'uses'=>'PageController@getQLSP'
]);
Route::get('qlsp/{kiemduyet}',[
	'as'=>'filtersanpham',
	'uses'=>'PageController@getQLSP_filter'
]);


//QLUSER
Route::get('qluser',[
	'as'=>'qluser',
	'uses'=>'PageController@getQLUser'
]);
Route::get('qluser/{linkuser}',[
	'as'=>'urluser',
	'uses'=>'PageController@getUrluser'
]);
Route::get('resetpass/{id}',[
	'as'=>'resetpass',
	'uses'=>'PageController@getResetPass'
]);
Route::get('blockuser/{id}',[
	'as'=>'khoataikhoan',
	'uses'=>'PageController@getBlockUser'
]);
Route::get('openuser/{id}',[
	'as'=>'motaikhoan',
	'uses'=>'PageController@getOpenUser'
]);


//QLDH
Route::get('qldh',[
	'as'=>'qldh',
	'uses'=>'PageController@getQLDH'
]);
Route::get('qldh/{ngaydh}',[
	'as'=>'filterdonhang',
	'uses'=>'PageController@getQLDH_filter'
]);
Route::get('qldh/c/{nguoimua}',[
	'as'=>'filterdonhangC',
	'uses'=>'PageController@getQLDH_filter_2'
]);

//QLHD
Route::get('qlhd',[
	'as'=>'qlhd',
	'uses'=>'PageController@getQLHD'
]);
Route::get('qlhd/{ngayhd}',[
	'as'=>'filterhoadon',
	'uses'=>'PageController@getQLHD_filter'
]);
