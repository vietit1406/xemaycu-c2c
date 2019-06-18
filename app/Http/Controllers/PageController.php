<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Tin;
use App\Hang;
use App\Loaixe;
use App\Phankhoi;
use App\Goitin;
use App\Hoadon;
use App\Goiphithanhvien;
use App\Donhang;
use App\Rating;
use Hash;
use Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
use DB;

class PageController extends Controller
{
    
    public function getSignin()
    {
    	return view('page.dangki');
    }

    public function postSignin(Request $req)
    {

        $this->validate($req,
            [
                'hoten'=>'required',
                'sdt' => 'required|unique:users|digits_between:10,15',
                'cmnd'=>'required',
                'email'=>'required|email|unique:users,email',
                'diachi'=>'required',
                'password'=>'required|min:6|max:20',
                'repassword'=>'required|same:password',
                'loaitv'=>'required',
                'makichhoat'=>'required|same:makichhoatan',
                'avatar'=>'image|max:5120'      
            ],
            [               
                'hoten.required'=>'Vui lòng nhập họ tên!!!',
                'sdt.required'=>'Vui lòng nhập SĐT!!!',
                'sdt.unique'=>'SĐT đã có người sử dụng!!!',
                'sdt.digits_between'=>'SĐT không đúng định dạng!!!',
                'cmnd.required'=>'Vui lòng nhập CMND!!!',
                'email.required'=>'Vui lòng nhập email!!!',
                'email.email'=>'Email không đúng định dạng!!!',
                'email.unique'=>'Email đã có người sử dụng!!!',
                'diachi.required'=>'Vui lòng nhập địa chỉ',
                'password.required'=>'Vui lòng nhập password',
                'password.min'=>'Mật khẩu phải có ít nhất 6 kí tự!!!',
                'password.max'=>'Mật khẩu không quá 20 kí tự!!!',
                'repassword.required'=>'Vui lòng nhập lại password',
                'repassword.same'=>"Nhập lại mật khẩu không khớp!!!",
                'loaitv.required'=>"Vui lòng nhập loại TV!!!",
                'makichhoat.required'=>"Vui lòng nhập mã kích hoạt!!!",
                'makichhoat.same'=>"Mã kích hoạt không đúng !!!Vui lòng kiểm tra lại email.",
                'avatar.image'=>'Ảnh đại diện không đúng định dạng!!!',
                'avatar.max'=>'Ảnh đại diện không quá 5 MB!!!'
            ]);

        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $user = new User();
        $user->name = $req->hoten;
        $user->sdt = $req->sdt;
        $user->cmnd = $req->cmnd;
        $user->diachi = $req->diachi;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->loaitv = $req->loaitv;
        $user->kichhoat = 'Kích hoạt';
        $user->sotinton = 0;
        $user->thoihandangtin = date('Y-m-d H:i:s');
        $user->ngaydangky = date('Y-m-d H:i:s');
        $user->avatar = $req->avatar->getClientOriginalName();
        $user->save();

        $req->avatar->move(public_path().'/source/images/avatar/',$req->avatar->getClientOriginalName());

        return redirect()->route('signin')->with('thanhcong','Tạo tài khoản thành công!!!');    
    }

     public function sendMail(Request $req)
    {
        $data  = rand();
        $hoten = $req->hoten2;
        $sdt = $req->sdt2;
        $cmnd = $req->cmnd2;
        $diachi = $req->diachi2;
        $email = $req->email2;
        $password = $req->password2;
        $repassword = $req->repassword2;
        $loaitv = $req->loaitv2;
        $makichhoat = $req->makichhoat2;
        Mail::send('page.mail',array('code' =>$data ), function($message) use ($req)
        {
            $message->to($req->email2, 'Vũ Trần')->subject('Xác nhận tài khoản!');
        });



        //return view('page.dangki',compact('data','hoten','sdt','cmnd','diachi','email','password','repassword','loaitv','makichhoat'))->with('sendmail','Đã gửi mã xác nhận tới email!!!');

        return \Redirect::route('signin',compact('hoten','sdt','cmnd','diachi','email','password','repassword','loaitv','makichhoat','data'))->with('sendmail','Đã gửi mã xác nhận tới email!!!');

        //return Redirect()->route('signin',['hoten'=>$hoten]);  // L5.5
    }

    public function getLogin()
    {
    	return view('page.dangnhap');
    }

       public function postLogin(Request $req)
    {
        $this->validate($req,
        [
            'email'=>'required|email',
            'password'=>'required|min:6|max:20'
        ],
        [
            'email.required'=>'Vui lòng nhập email!!!',
            'email.email'=>'Email không đúng định dạng!!!',
            'password.required'=>'Vui lòng nhập password!!!',
            'password.min'=>'Password phải có ít nhất 6 kí tự!!!',
            'password.max'=>'Password không quá 20 kí tự!!!'
        ]);

        //$pass = Hash::make($req->password);
        $credentials = array('email'=>$req->email ,'password'=>$req->password);
        
        //echo $credentials['email'];
        //echo $credentials['password'];
        //return \Redirect::route('login',compact('password'));
        //$password = Hash::make($req->password);
        //dd(Hash::check(123456,$password));
        
        if(Auth::attempt($credentials))
        {
            if(Auth::user()->kichhoat == 'Kích hoạt')
            //return redirect()->back()->with(['flag'=>'success','message'=>'Đăng nhập thành công !!!']);
                if(Auth::user()->loaitv == "W")
            
                    return redirect()->route('admin');
                else
                    return redirect()->route('trangchu');
            
            else
            {
                Auth::logout();
                return redirect()->back()->with(['flag'=>'danger','message'=>'Tài khoản của bạn đã bị chặn !!! Vui lòng liên hệ quản trị viên để biết thêm thông tin.']);
            }
        }
        else
        {
            return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập không thành công !!!']);
        }   
    }

    public function getIndex()
    {
        $day = Carbon::now()->day - 3;   
        $newproduct = Tin::orderBy('ngaydangtin','desc')
        ->where('kiemduyet',1)
        ->take(8)->get();
        //dd($newproduct);

        $ratetb = DB::table('rating')
        ->select(DB::raw('avg(sao) as avgsao'))
        ->groupBy('matv')
        ->get();

        $maxrate = 0;
        foreach ($ratetb as $r) {
            if($r->avgsao > $maxrate)
                $maxrate = $r->avgsao;
        }

        /*
        $productratecao = DB::table(DB::raw('tin t,rating r'))
        ->select(DB::raw('t.matv,t.tenxe,t.matin,avg(r.sao) as avgsao'))
        ->where('t.matv','r.matv')
        ->groupBy('t.matv','t.tenxe','t.matin')
        ->having('avgsao','=',$maxrate)
        ->take(3)
        ->get();
        */
        $productratecao = DB::table('tin')
        ->join('rating','tin.matv','=','rating.matv')
        ->select(DB::raw('tin.matv,tin.tenxe,tin.matin,tin.hinh1,avg(rating.sao) as avgsao'))
        ->where('kiemduyet',1)
        ->groupBy('tin.matv','tin.tenxe','tin.matin','tin.hinh1')
        ->having('avgsao','=',$maxrate)
        ->orderBy('tin.ngaydangtin','desc')
        ->take(3)
        ->get();

        $toprate = DB::table('tin')
        ->join('rating','tin.matv','=','rating.matv')
        ->select(DB::raw('tin.matv,tin.tenxe,tin.matin,tin.hinh1,tin.hinh2,tin.gia,avg(rating.sao) as avgsao'))
        ->where('kiemduyet',1)
        ->groupBy('tin.matv','tin.tenxe','tin.matin','tin.hinh1','tin.hinh2','tin.gia')
        ->having('avgsao','=',$maxrate)
        ->orderBy('tin.ngaydangtin','desc')
        ->first();

        //dd($productratecao);
        $hang = Hang::all();
        return view('page.trangchu',compact('newproduct','hang','productratecao','toprate'));
    }

    public function getProduct()
    {
        if(isset(Auth::user()->id))
        {
            $product = Tin::where('matv','!=',Auth::user()->id)
            ->where('kiemduyet',1)
            ->paginate(9);
        }
        else
        {
             $product = Tin::where('kiemduyet',1)->paginate(9);
        }   
        $hangxe = Hang::all(); 
        $loaixe = Loaixe::all(); 
        return view('page.sanpham',compact('product','hangxe','loaixe'));
    }

    public function getProducttheohang($hang)
    {
        if(isset(Auth::user()->id))
        {
            $producttheohang = Tin::where('mahang',$hang)
            ->where('matv','!=',Auth::user()->id)
            ->where('kiemduyet',1)
            ->paginate(4);
        }
        else
        {
            $producttheohang = Tin::where('mahang',$hang)
            ->where('kiemduyet',1)
            ->paginate(4);
        }  
        $hangdactrung = Hang::where('mahang',$hang)->get();

        $hangxe = Hang::all();  
        $loaixe = Loaixe::all(); 
        
        return view('page.sanpham',compact('producttheohang','hangdactrung','hangxe','loaixe'));
    }

    public function getProducttheophankhoi($phankhoi)
    {
        if(isset(Auth::user()->id))
        {
            $producttheophankhoi = Tin::where('mapk',$phankhoi)
            ->where('matv','!=',Auth::user()->id)
            ->where('kiemduyet',1)
            ->paginate(4);
        }
        else
        {
            $producttheophankhoi = Tin::where('mapk',$phankhoi)
            ->where('kiemduyet',1)
            ->paginate(4);
        }     
        $phankhoidactrung = Phankhoi::where('mapk',$phankhoi)->get();

        $hangxe = Hang::all();  
        $loaixe = Loaixe::all(); 
        return view('page.sanpham',compact('producttheophankhoi','phankhoidactrung','hangxe','loaixe'));
    }

    public function getProducttheoloaixe($loaixe)
    {
        if(isset(Auth::user()->id))
        {
            $producttheoloaixe = Tin::where('maloai',$loaixe)
            ->where('matv','!=',Auth::user()->id)
            ->where('kiemduyet',1)
            ->paginate(4); 
        }
        else
        {
            $producttheoloaixe = Tin::where('maloai',$loaixe)
            ->where('kiemduyet',1)
            ->paginate(4); 
        }    
        $loaixedactrung = Loaixe::where('maloai',$loaixe)->get();

        $hangxe = Hang::all(); 
        $loaixe = Loaixe::all(); 
        return view('page.sanpham',compact('producttheoloaixe','loaixedactrung','hangxe','loaixe'));
    }
    public function getChitietsanpham(Request $req)
    {
        $pro=tin::where('matin',$req->matin)
        ->join('users','tin.matv','=','users.id')
        ->first();
        $tenhang=tin::join('hang','tin.mahang','=','hang.mahang')->where('tin.matin',$req->matin)
        ->select('hang.tenhang','hang.mahang')
        ->first();
        $phankhoi=phankhoi::join('tin','phankhoi.mapk','=','tin.mapk')->where('tin.matin',$req->matin)->first();
        $matv=$pro->matv;
           //   $user=User::where('id',$matv)->first();
            //$five_Star=rating::where('id',$matv)->Sum('sao')
            $five_Star = rating::where([
                ['sao',5],
                ['matv',$matv]
            ])->count();

            $four_Star = rating::where([
                ['sao',4],
                ['matv',$matv]
            ])->count();

            $three_Star = rating::where([
                ['sao',3],
                ['matv',$matv]
            ])->count();

                $two_Star = rating::where([
                ['sao',2],
                ['matv',$matv]
            ])->count();

                $one_Star = rating::where([
                ['sao',1],
                ['matv',$matv]
            ])->count();

            $all_Star=$one_Star+$two_Star+$three_Star+$four_Star+$five_Star ;
            $sum_Star=$one_Star+$two_Star*2+$three_Star*3+$four_Star*4+$five_Star*5 ;
            $avarage_Star=$sum_Star/$all_Star;
            $user=User::where('id',$matv)->first();
            
            $iduser=
                  
            $relativepro = Tin::where('mahang',$tenhang->mahang)
            ->where('kiemduyet',1)
            ->get();
        return view('page.chitietsanpham',compact('relativepro','pro','user','five_Star','four_Star','three_Star','two_Star','one_Star','avarage_Star','all_Star','tenhang','phankhoi'));
    }


    public function getBuynew()
    {
        $hangxe = Hang::all();  
        $loaixe = Loaixe::all(); 
        $goitin = Goitin::all();
        
        return view('page.muatin',compact('hangxe','loaixe','goitin'));
    }
    
    public function getLuuhdmuatin(Request $req)
    {
       

        $hoadon = new Hoadon();
        $hoadon->matv = $req->matv;
        $hoadon->ngayhd = Carbon::now('Asia/Ho_Chi_Minh');
        $hoadon->loaihd = 'mua tin';
        $hoadon->tongtien = $req->tongtien;
        $hoadon->save();

        $user = User::where('id',$req->matv)->first();    
        $user->sotinton = $user->sotinton + $req->sotin;
        $user->save();

        return \Redirect::route('muatin')->with('success','Bạn đã mua tin thành công !!!');
    }
    
    public function getBuyphitv()
    {
        $hangxe = Hang::all();  
        $loaixe = Loaixe::all(); 
        $goiphithanhvien = Goiphithanhvien::all();
        
        return view('page.muaphithanhvien',compact('hangxe','loaixe','goiphithanhvien'));
    }
    
    public function getLuuhdmuaphitv(Request $req)
    {     
        $hoadon = new Hoadon();
        $hoadon->matv = $req->matv;
        $hoadon->ngayhd = Carbon::now('Asia/Ho_Chi_Minh');
        $hoadon->loaihd = 'gia hạn phí thành viên';
        $hoadon->tongtien = $req->tongtien;
        $hoadon->save();


        $user = User::where('id',$req->matv)->first();

        if($user->thoihandangtin < Carbon::now('Asia/Ho_Chi_Minh'))
        {
            $user->thoihandangtin = Carbon::now('Asia/Ho_Chi_Minh')->addDays($req->thoihan);
        }    
        else
        if($user->thoihandangtin > Carbon::now('Asia/Ho_Chi_Minh'))
        {
            $th = new Carbon($user->thoihandangtin);
            $user->thoihandangtin = $th->addDays($req->thoihan);
        }

        $user->sotinton = $user->sotinton + 3;
        $user->save();

        return \Redirect::route('muaphitv')->with('success','Bạn đã gia hạn thành công !!!');
    }
    
    public function getPostnew()
    {
        $hangxe = Hang::all();
        $loaixe = Loaixe::all(); 
        $phankhoi = Phankhoi::all();
        return view('page.dangtin',compact('hangxe','loaixe','phankhoi'));
    }

    public function postPostnew(Request $req)
    {
        $this->validate($req,
        [
            'tenxe'=>'required',
            'hang'=>'required',
            'bienso'=>'required',
            'mau'=>'required',
            'sokmdadi'=>'required|digits_between:2,10',
            'tinhtrangxe'=>'required',
            'loaixe'=>'required',
            'phankhoi'=>'required',
            'namdangky'=>'required',
            'mota'=>'required',
            'gia'=>'required|regex:/^[0-9]+(\.[0-9][0-9]?)?$/',
            'cavet'=>'image|max:5120',
            'hinh1'=>'image|max:5120',
            'hinh2'=>'image|max:5120',
            'hinh3'=>'image|max:5120'
        ],
        [
            'tenxe.required'=>'Vui lòng nhập tên xe!!!',
            'hang.required'=>'Vui lòng chọn hãng xe!!!',
            'bienso.required'=>'Vui lòng nhập biển số xe!!!',
            'mau.required'=>'Vui lòng nhập màu xe!!!',
            'sokmdadi.required'=>'Vui lòng nhập số km đã đi!!!',
            'sokmdadi.digits_between'=>'Số km đã đi phải là số!!!',
            'tinhtrangxe.required'=>'Vui lòng chọn tình trạng xe!!!',
            'loaixe.required'=>'Vui lòng chọn loại xe!!!',
            'phankhoi.required'=>'Vui lòng chọn phân khối!!!',
            'namdangky.required'=>'Vui lòng chọn năm đăng ký!!!',
            'mota.required'=>'Vui lòng nhập mô tả!!!',
            'gia.required'=>'Vui lòng nhập giá!!!',
            'gia.regex'=>'Giá phải là số!!!',
            'cavet.image'=>'File ảnh cavet không đúng định dạng!!!',
            'cavet.max'=>'File ảnh cavet không quá 5 MB!!!',
            'hinh1.image'=>'File ảnh 1 không đúng định dạng!!!',
            'hinh1.max'=>'File ảnh 1 không quá 5 MB!!!',
            'hinh2.image'=>'File ảnh 2 không đúng định dạng!!!',
            'hinh2.max'=>'File ảnh 2 không quá 5 MB!!!',
            'hinh3.image'=>'File ảnh 3 không đúng định dạng!!!',                 
            'hinh3.max'=>'File ảnh 3 không quá 5 MB!!!'
        ]);

        
     
        if(Auth::check() && Auth::user()->loaitv == 'M')
        {
            $check = User::where('id',Auth::user()->id)->first();
            if($check->thoihandangtin < Carbon::now('Asia/Ho_Chi_Minh'))
            {
                return redirect()->back()->with('fail','Bạn đã hết hạn đăng tin.Vui lòng gia hạn thêm phí thành viên !!!');
            }
            else
            if($check->sotinton == 0)
            {
                return redirect()->back()->with('fail','Bạn đã hết tin . Vui lòng mua thêm tin !!!');
            }  
            else
            {
                $tin = new Tin();
                $tin->matv = Auth::user()->id;
                $tin->tenxe = $req->tenxe;
                $tin->bienso = $req->bienso;
                $tin->mau = $req->mau;
                $tin->namdangky = $req->namdangky;
                $tin->sokmdadi = $req->sokmdadi;
                $tin->tinhtrangxe = $req->tinhtrangxe;
                $tin->mahang = $req->hang;
                $tin->hinh1 = $req->hinh1->getClientOriginalName();
                $tin->hinh2 = $req->hinh2->getClientOriginalName();
                $tin->hinh3 = $req->hinh3->getClientOriginalName();
                $tin->mota = $req->mota;
                $tin->gia = $req->gia;
                $tin->hinhcavet = $req->cavet->getClientOriginalName();
                $tin->mapk = $req->phankhoi;
                $tin->maloai = $req->loaixe;
                $tin->ngaydangtin = Carbon::now('Asia/Ho_Chi_Minh');
                $tin->kiemduyet = 0;
                $tin->save();

                $check->sotinton = $check->sotinton - 1;
                $check->save();

                $req->cavet->move(public_path().'/source/images/tin/',$req->cavet->getClientOriginalName());

                $req->hinh1->move(public_path().'/source/images/tin/',$req->hinh1->getClientOriginalName());

                $req->hinh2->move(public_path().'/source/images/tin/',$req->hinh2->getClientOriginalName());

                $req->hinh3->move(public_path().'/source/images/tin/',$req->hinh3->getClientOriginalName());
            }
            
        }       
            return redirect()->back()->with('success','Bạn đã đăng tin thành công !!!');
                         
    }

    public function getLichsugiaodich()
    {
        /*
        $productratecao = DB::table('tin')
        ->join('rating','tin.matv','=','rating.matv')
        ->select(DB::raw('tin.matv,tin.tenxe,tin.matin,tin.hinh1,avg(rating.sao) as avgsao'))
        ->where('kiemduyet',1)
        ->groupBy('tin.matv','tin.tenxe','tin.matin','tin.hinh1')
        ->having('avgsao','=',$maxrate)
        ->orderBy('tin.ngaydangtin','desc')
        ->take(3)
        ->get();*/


        if(Auth::check())
        {
            $lichsugiaodich = DB::table('donhang')
            ->join('tin','donhang.matin','=','tin.matin')
            ->join('users','donhang.nguoiban','=','users.id')
            ->where('nguoimua',Auth::user()->id)
            ->select('tin.matin','tin.hinh1','tin.tenxe','users.name','donhang.ngaydh','donhang.tongtien','donhang.tinhtrang','donhang.rate'
                    ,'users.sdt')
            ->groupBy('tin.matin','tin.hinh1','tin.tenxe','users.name','donhang.ngaydh','donhang.tongtien','donhang.tinhtrang','donhang.rate','users.sdt')
            ->orderBy('donhang.ngaydh','desc')
            ->paginate(2);

            return view('page.lichsugiaodich',compact('lichsugiaodich'));
        }
        else
        return view('page.lichsugiaodich');
    }

    public function getDanhgia(Request $req)
    {
        $nguoiban = User::where('name',$req->name)->first();

        $idnguoimua = DonHang::where('nguoiban',$nguoiban->id)
        ->where('matin',$req->matin)->first();

        $thongtinsp = Tin::where('matin',$req->matin)->first();
        $tinhtrangdh = Donhang::where('matin',$req->matin)->first();

        return view('page.danhgia',compact('nguoiban','thongtinsp','tinhtrangdh','idnguoimua'));
    }

    public function postDanhgia(Request $req)
    {
        $rating = new Rating();
        $rating->matv = $req->idnguoiban;
        $rating->sao = $req->rating;
        $rating->save();

        $hddarate = DB::table('donhang')
        ->where('matin',$req->matin)
        ->update(['rate'=> "Đã đánh giá"]);

        return redirect()->route('lichsugiaodich')->with('success','Bạn đã rating thành công !!!');
    }

     public function getQuanlybanhang()
    {
        /*
        $productratecao = DB::table('tin')
        ->join('rating','tin.matv','=','rating.matv')
        ->select(DB::raw('tin.matv,tin.tenxe,tin.matin,tin.hinh1,avg(rating.sao) as avgsao'))
        ->where('kiemduyet',1)
        ->groupBy('tin.matv','tin.tenxe','tin.matin','tin.hinh1')
        ->having('avgsao','=',$maxrate)
        ->orderBy('tin.ngaydangtin','desc')
        ->take(3)
        ->get();*/


        if(Auth::check() && Auth::user()->loaitv == 'M')
        {
            $danhsachban = DB::table('donhang')
            ->join('tin','donhang.matin','=','tin.matin')
            ->join('users','donhang.nguoimua','=','users.id')
            ->where('nguoiban',Auth::user()->id)
            ->select('tin.matin','tin.hinh1','tin.tenxe','users.name','donhang.ngaydh','donhang.tongtien','donhang.tinhtrang','donhang.rate')
            ->groupBy('tin.matin','tin.hinh1','tin.tenxe','users.name','donhang.ngaydh','donhang.tongtien','donhang.tinhtrang','donhang.rate')
            ->orderBy('donhang.ngaydh','desc')
            ->paginate(2);

            return view('page.quanlybanhang',compact('danhsachban'));
        }
        else
        return view('page.quanlybanhang');
    }

    public function getCapnhatdonhang(Request $req)
    {
        $nguoimua = User::where('name',$req->name)->first();

        $nguoiban = Donhang::where('matin',$req->matin)
        ->where('nguoimua',$nguoimua->id)
        ->first();

        $thongtinsp = Tin::where('matin',$req->matin)->first();
        $tinhtrangdh = Donhang::where('matin',$req->matin)->first();

        return view('page.capnhatdonhang',compact('nguoiban','nguoimua','thongtinsp','tinhtrangdh'));
    }

    public function postCapnhatdonhang(Request $req)
    {   
        $donhang = DB::table('donhang')
        ->where('matin',$req->matin)
        ->update(['tinhtrang'=> $req->tinhtrang]);

        if($req->tinhtrang == "Thất bại")
        {
            $tin = DB::table('tin')
            ->where('matin',$req->matin)
            ->update(['kiemduyet'=> "1"]);
        }

        return redirect()->route('quanlybanhang')->with('success','Bạn đã cập nhật đơn hàng thành công !!!');
    }

    

    public function getTimkiem(Request $keyword)
    {   
        $protheoten=hang::join('tin','hang.mahang','=','tin.mahang')->where('tenxe','like','%'.$keyword->search.'%')
        ->Where('kiemduyet',1)
        ->orWhere('tenhang','like','%'.$keyword->search.'%')
        ->paginate(3)
        ->appends(request()->query());
        $hangxe = Hang::all(); 
        $loaixe = Loaixe::all(); 
        //$protheoten=tin::where('tenxe','like','%'.$keyword->tenxe.'%')->get();
        ///$protheoten=tin::where('tenxe','like','%'.$keyword->tenxe.'%')->where('matin',1)->get();
        return view('page.sanpham',compact('protheoten','hangxe','loaixe'));

    }

    public function getLapdonhang(Request $req)
    {
        $donhang = new Donhang();
        $donhang->nguoiban = $req->nguoiban;
        $donhang->nguoimua = $req->nguoimua;
        $donhang->matin = $req->matin;
        $donhang->ngaydh = Carbon::now('Asia/Ho_Chi_Minh');
        $donhang->tongtien = $req->tongtien;
        $donhang->tinhtrang = "Đang tiến hành";
        $donhang->rate = "Chưa đánh giá";
        $donhang->save();

        $tin = DB::table('tin')
            ->where('matin',$req->matin)
            ->update(['kiemduyet'=> "-1"]);
        return redirect()->route('lichsugiaodich');
    }

    public function getFilter($id)
    {
        if($id == 1)
            $profilter=Tin::orderBy('ngaydangtin','desc')->get();
        if($id == 3)
            $profilter=Tin::orderBy('gia')->get();
        if($id == 4)
            $profilter=Tin::orderBy('gia','desc')->get();
        

        
            foreach($profilter as $filer)
            {
                echo '<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">';
                            
                    echo '<div class="block2">';
                        echo '<div class="block2-img wrap-pic-w of-hidden pos-relative">
                                    <img src="source/images/tin/'. $filer->hinh1 . '"alt="IMG-PRODUCT" height="200px">';

                            echo '<div class="block2-overlay trans-0-4">';
                                        

                                echo '<div class="block2-btn-addcart w-size1 trans-0-4">';
                                           
                                    echo '<a href="chitietsanpham?matin=' . $filer->matin . '"><button  class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                Information
                                            </button></a>';
                                        echo '</div>';
                                    echo '</div>';
                                echo '</div>';

                                echo '<div class="block2-txt p-t-20">';
                                    echo '<a href="chitietsanpham?matin=' . $filer->matin . '" class="block2-name dis-block s-text3 p-b-5">'
                                        .$filer->tenxe.'
                                    </a>';
                            
                                    echo '<span class="block2-price m-text6 p-r-5">'
                                        .number_format($filer->gia).' VNĐ
                                    </span>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
            }                                       
    }

     public function getFilterr(Request $req)
    {
        
    
        $profilter=Tin::paginate(9);

        if(Auth::check())
        {
            if($req->sorting == "1")
            $profilter=Tin::where('matv','!=',Auth::user()->id)
            ->where('kiemduyet',1)
            ->orderBy('ngaydangtin','desc')->paginate(9)->appends(request()->query());
            if($req->sorting == "3")
            $profilter=Tin::where('matv','!=',Auth::user()->id)
            ->where('kiemduyet',1)
            ->orderBy('gia')->paginate(9)->appends(request()->query());
            if($req->sorting == "4")
            $profilter=Tin::where('matv','!=',Auth::user()->id)
            ->where('kiemduyet',1)
            ->orderBy('gia','desc')->paginate(9)->appends(request()->query());
        }
        else
        {
            if($req->sorting == "1")
            $profilter=Tin::where('kiemduyet',1)
            ->orderBy('ngaydangtin','desc')->paginate(9)->appends(request()->query());
            if($req->sorting == "3")
            $profilter=Tin::where('kiemduyet',1)
            ->orderBy('gia')->paginate(9)->appends(request()->query());
            if($req->sorting == "4")
            $profilter=Tin::where('kiemduyet',1)
            ->orderBy('gia','desc')->paginate(9)->appends(request()->query());
        }
        $hangxe = Hang::all(); 
        $loaixe = Loaixe::all();

        return view('page.sanpham',compact('profilter','hangxe','loaixe'));
        
    }

    public function getContact()
    {
        return view('page.lienhe');
    }

    public function getCart()
    {
        return view('page.giohang');
    }

    public function postLogout()
    {
        Auth::logout();
        return redirect()->route('trangchu');
    }
    public function getUserpage($iduser)
    {
        $iduser = User::where('id',$iduser)->first();
        $tinuser = Tin::where('matv',$iduser->id)
        ->where('kiemduyet','1')
        ->paginate(8);
        $sumtinuser = Tin::where('matv',$iduser->id)
        ->where('kiemduyet','1')
        ->count();
        return view('page.trangcanhan',compact('iduser','tinuser','sumtinuser'));
    }

    /*public function getEdituser($iduser)
    {
        $iduser = User::where('id',$iduser)->first();
        $tinuser = Tin::where('matv',$iduser->id)->paginate(8);
        return view('page.trangcanhan',compact('iduser','tinuser'));

        DB::table('users')
            ->where('id',$iduser)
            ->update(['kiemduyet' => "1"]);
        return redirect()->back()->with('success','Bạn đã duyệt tin thành công !');
    }*/
    
    public function getEditUser($iduser)
    {
        $iduser = User::where('id',$iduser)->first();
         return view('page.suathongtin',compact('iduser'));
    }
    public function postEditUser(Request $req,$iduser)
    {
        $this->validate($req,
            [
                'hoten'=>'required',
                'cmnd'=>'required',
                'diachi'=>'required',
                'avatar'=>'image|max:5120'      
            ],
            [               
                'hoten.required'=>'Vui lòng nhập họ tên!!!',
                'cmnd.required'=>'Vui lòng nhập CMND!!!',
                'diachi.required'=>'Vui lòng nhập địa chỉ',
                'avatar.image'=>'Ảnh đại diện không đúng định dạng!!!',
                'avatar.max'=>'Ảnh đại diện không quá 5 MB!!!'
            ]);

        date_default_timezone_set('Asia/Ho_Chi_Minh');


        $updateDetails = [
            'name' => $req->hoten,
            'cmnd' => $req->cmnd,
            'diachi' => $req->diachi,
            //'password' => $req->password,
        ];
        if(isset($req->avatar)){
            $avatar = [
                'avatar' => $req->avatar->getClientOriginalName()
            ];
            DB::table('users')
            ->where('id',$iduser)
            ->update($avatar);
            $req->avatar->move(public_path().'/source/images/avatar/',$req->avatar->getClientOriginalName());
        }
        if(isset($req->password)){
            $password = [
                'password' => Hash::make($req->password)
            ];
            DB::table('users')
            ->where('id',$iduser)
            ->update($password);
        }
        DB::table('users')
            ->where('id',$iduser)
            ->update($updateDetails);


        return redirect()->route('suathongtin',$iduser)->with('thanhcong','Sửa thông tin tài khoản thành công!!!');
    }

    public function getEditProduct($iduser,$idproduct)
    {
        $iduser = User::where('id',$iduser)->first();
        $idproduct = tin::where('matin',$idproduct)->first();
         return view('page.suathongtinproduct',compact('iduser','idproduct'));
    }

    public function postEditProduct(Request $req,$iduser,$idproduct)
    {
        $this->validate($req,
            [
                'gia'=>'required|regex:/^[0-9]+(\.[0-9][0-9]?)?$/',
            ],
            [               
                'gia.required'=>'Vui lòng nhập giá!!!',
                'gia.regex'=>'Giá phải là số!!!',

            ]);
        DB::table('tin')
            ->where('matin',$idproduct)
            ->update(['gia' => $req->gia]);

        return redirect()->route('suathongtinproduct',[$iduser,$idproduct])->with('thanhcong','Sửa thông tin tài khoản thành công!!!');
    }

    public function getHideProduct($iduser,$idproduct)
    {
        $iduser = User::where('id',$iduser)->first();
        $tinuser = Tin::where('matv',$iduser->id)
        ->where('kiemduyet','1')
        ->paginate(8);
        $sumtinuser = Tin::where('matv',$iduser->id)->count();
        $idproduct = tin::where('matin',$idproduct)->first();

        DB::table('tin')
            ->where('matin',$idproduct->matin)
            ->update(['kiemduyet' => '-1']);
        return redirect()->route('userpage',$iduser)->with('thanhcong','Xóa sản phẩm thành công!!!');
    }



    public function getHistory()
    {
         return view('page.lichsugiaodich');
    }
    public function getUpload()
    {
         return view('page.dangtin');
    } 
    public function getAdmin()
    {
        $sokhachhang = DB::table('users')->count();
        $tongsanpham = DB::table('tin')->count();
        $tonghoadon = DB::table('hoadon')->count();
        $tongdonhang = DB::table('donhang')->count();
        $doanhthu = DB::table('hoadon')->sum('tongtien');
         return view('page.admin', compact('tongsanpham','sokhachhang','tonghoadon','tongdonhang','doanhthu'));
    }
    
    public function getQLUser()
    {
        $dsuser = DB::table('users')
        ->where('loaitv','!=','W')
        ->get();
         return view('page.qluser',compact('dsuser'));
    }
    
    
    public function getUrluser($linkuser)
    {
        $urluser = DB::table('users')
        ->where('id',$linkuser)
        ->first();
         return view('page.qluser',compact('urluser'));
    }
    public function getDuyet($matin)
    {
        DB::table('tin')
            ->where('matin',$matin)
            ->update(['kiemduyet' => "1"]);
        return redirect()->back()->with('success','Bạn đã duyệt tin thành công !');
    }
    public function getBlockUser($id)
    {
        DB::table('users')
            ->where('id',$id)
            ->update(['kichhoat' => "Chặn"]);
        return redirect()->back()->with('success','Tài khoản người dùng đã bị khóa !');
    }
    public function getOpenUser($id)
    {
        DB::table('users')
            ->where('id',$id)
            ->update(['kichhoat' => "Kích hoạt"]);
        return redirect()->back()->with('success','Tài khoản người dùng đã mở khóa !');
    }
    public function getResetPass($id)
    {
        $password = Hash::make('123456');
        DB::table('users')
            ->where('id',$id)
            ->update(['password' => $password]);
        return redirect()->back()->with('success','Password đã được reset về mặc định: 123456');
    }





    public function getQLDH()
    {
        $dsdh = DB::table('donhang')
        ->join('users as a','donhang.nguoiban','=','a.id')
        ->join('users as b','donhang.nguoimua','=','b.id')
        ->select('donhang.madh','donhang.ngaydh','donhang.tongtien','donhang.tinhtrang','a.name as tennguoiban','b.name as tennguoimua','donhang.nguoiban','donhang.nguoimua')
        ->get();

        //Filter
        $ngaydh_dt= DB::table('donhang')
        ->select(DB::raw('DATE_FORMAT(ngaydh,"%d-%b-%y") as ngaydhh'))
        ->distinct()
        ->get();

        $nguoiban_dt = DB::table('donhang')
        ->join('users as a','donhang.nguoiban','=','a.id')
        ->select('a.name as tennguoiban')
        ->distinct()
        ->get();

        $nguoimua_dt = DB::table('donhang')
        ->join('users as a','donhang.nguoimua','=','a.id')
        ->select('a.name as tennguoimua')
        ->distinct()
        ->get();

         return view('page.qldh',compact('dsdh','ngaydh_dt','nguoiban_dt','nguoimua_dt'));
    }
    public function getQLDH_filter($porperty)
    {
        $ngaydh_dt= DB::table('donhang')
        ->select(DB::raw('DATE_FORMAT(ngaydh,"%d-%b-%y") as ngaydhh'))
        ->distinct()
        ->get();

        $dsdh_ft = DB::table('donhang')
        ->join('users as a','donhang.nguoiban','=','a.id')
        ->join('users as b','donhang.nguoimua','=','b.id')
        ->select('donhang.madh','donhang.ngaydh','donhang.tongtien','donhang.tinhtrang','a.name as tennguoiban','b.name as tennguoimua','donhang.nguoiban','donhang.nguoimua')
        ->where('ngaydh',$porperty)
        ->get();

        $nguoiban_dt = DB::table('donhang')
        ->join('users as a','donhang.nguoiban','=','a.id')
        ->select('a.name as tennguoiban')
        ->distinct()
        ->get();

        $nguoimua_dt = DB::table('donhang')
        ->join('users as a','donhang.nguoimua','=','a.id')
        ->select('a.name as tennguoimua')
        ->distinct()
        ->get();

        $dsdh_ft_name_M = DB::table('donhang')
        ->join('users as a','donhang.nguoiban','=','a.id')
        ->join('users as b','donhang.nguoimua','=','b.id')
        ->select('donhang.madh','donhang.ngaydh','donhang.tongtien','donhang.tinhtrang','a.name as tennguoiban','b.name as tennguoimua','donhang.nguoiban','donhang.nguoimua')
        ->where('a.name',$porperty)
        ->get();

         return view('page.qldh',compact('ngaydh_dt','dsdh_ft','dsdh_ft_name_M','nguoiban_dt','nguoimua_dt'));
    }
    public function getQLDH_filter_2($porperty)
    {
        $ngaydh_dt= DB::table('donhang')
        ->select(DB::raw('DATE_FORMAT(ngaydh,"%d-%b-%y") as ngaydhh'))
        ->distinct()
        ->get();

        $nguoiban_dt = DB::table('donhang')
        ->join('users as a','donhang.nguoiban','=','a.id')
        ->select('a.name as tennguoiban')
        ->distinct()
        ->get();

        $nguoimua_dt = DB::table('donhang')
        ->join('users as a','donhang.nguoimua','=','a.id')
        ->select('a.name as tennguoimua')
        ->distinct()
        ->get();

        $dsdh_ft_name_C = DB::table('donhang')
        ->join('users as a','donhang.nguoiban','=','a.id')
        ->join('users as b','donhang.nguoimua','=','b.id')
        ->select('donhang.madh','donhang.ngaydh','donhang.tongtien','donhang.tinhtrang','a.name as tennguoiban','b.name as tennguoimua','donhang.nguoiban','donhang.nguoimua')
        ->where('b.name',$porperty)
        ->get();
        return view('page.qldh',compact('nguoimua_dt','dsdh_ft_name_C','nguoiban_dt','ngaydh_dt'));
    }
    public function getQLHD()
    {
        $dshd = DB::table('hoadon')->join('users','hoadon.matv','=','users.id')->get();
        //Filter
        $ngayhd_dt = DB::table('hoadon')
        ->select(DB::raw('DATE_FORMAT(ngayhd,"%d-%b-%y") as ngayhdd'))
        ->distinct()
        ->get();

        $nguoimua_dt = DB::table('hoadon')
        ->join('users as a','hoadon.matv','=','a.id')
        ->select('a.name as tennguoimua')
        ->distinct()
        ->get();

        $loai_dt = DB::table('hoadon')
        ->join('users','hoadon.matv','=','users.id')
        ->select('loaihd')
        ->distinct()
        ->get();

         return view('page.qlhd',compact('dshd','ngayhd_dt','nguoimua_dt','loai_dt'));
    }
    public function getQLHD_filter($porperty)
    {
        $dshd_ft = DB::table('hoadon')->join('users','hoadon.matv','=','users.id')
        ->whereDate('ngayhd',$porperty)
        ->get();

        $ngayhd_dt = DB::table('hoadon')
        ->select(DB::raw('DATE_FORMAT(ngayhd,"%d-%b-%y") as ngayhdd'))
        ->distinct()
        ->get();

        $nguoimua_dt = DB::table('hoadon')
        ->join('users as a','hoadon.matv','=','a.id')
        ->select('a.name as tennguoimua')
        ->distinct()
        ->get();

        $dshd_ft_name = DB::table('hoadon')->join('users','hoadon.matv','=','users.id')
        ->where('name',$porperty)
        ->get();

        $loai_dt = DB::table('hoadon')
        ->join('users','hoadon.matv','=','users.id')
        ->select('loaihd')
        ->distinct()
        ->get();

        $dshd_ft_loai = DB::table('hoadon')->join('users','hoadon.matv','=','users.id')
        ->where('loaihd',$porperty)
        ->get();

         return view('page.qlhd',compact('ngayhd_dt','dshd_ft','nguoimua_dt','dshd_ft_name','loai_dt','dshd_ft_loai'));
    }

    public function getQLSP()
    {
        $dssp = DB::table('tin')
        ->join('hang','tin.mahang','=','hang.mahang')
        ->join('users','tin.matv','=','users.id')
        ->select('tin.matin','tin.hinh1','tin.tenxe','tin.gia','tin.bienso','tin.kiemduyet','tin.tinhtrangxe','tin.ngaydangtin','hang.tenhang','users.name')
        ->orderBy('matin')
        ->get();

        $kd_dt = DB::table('tin')
        ->select('kiemduyet')
        ->distinct()
        ->get();

         return view('page.qlsp',compact('dssp','kd_dt'));
    }

    public function getQLSP_filter($porperty)
    {
        $dssp_ft = DB::table('tin')
        ->join('hang','tin.mahang','=','hang.mahang')
        ->join('users','tin.matv','=','users.id')
        ->select('tin.matin','tin.hinh1','tin.tenxe','tin.gia','tin.bienso','tin.kiemduyet','tin.tinhtrangxe','tin.ngaydangtin','hang.tenhang','users.name')
        ->orderBy('matin')
        ->where('kiemduyet',$porperty)
        ->get();

        $kd_dt = DB::table('tin')
        ->select('kiemduyet')
        ->distinct()
        ->get();

         return view('page.qlsp',compact('kd_dt','dssp_ft'));
    }
}
