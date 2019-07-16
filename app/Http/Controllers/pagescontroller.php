<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slide;
use App\product;
use App\producttype;
use App\Cart;
use App\customer;
use App\billdetail;
use App\bill;
use App\user;
use Session;
use Illuminate\Support\Facades\Auth;
class pagescontroller extends Controller
{
    //
    function __construct(){
    	$slide = slide::all();
    	$loaisp= producttype::all();
    	view()->share('slide',$slide);
    	view()->share('loaisp',$loaisp);
    }

    public function gettrangchu()
    {
    	# code...
    	
    	$new =product::where('new',1)->paginate(4);
    	$spkm=product::where('promotion_price','<>',0)->paginate(4);
    	return view('pages.trangchu',['newp'=>$new,'spkm'=>$spkm]);
    }
    // loại sp
    public function getloaisp($id)
    {
    	# code...
    	$pro =product::where('id_type',$id)->paginate(3);
    	return view('pages.typepro',['prod'=>$pro,'id'=>$id]);
    }
    //san pham
    public function getdetail($id)
    {
    	# code...
    	$product =product::find($id);
    	$sptt=product::where('id_type',$product->id_type)->paginate(3);
    	return view('pages.detail',['sanp'=>$product,'sptt'=>$sptt]);
    }
    public function getlienhe(){
    	return view('pages.contact');
    }
     public function getgioithieu(){
    	return view('pages.about');
    }
      public function getdathang($id)
     {
         # code...
        $product =product::find($id);
        return view('pages.dathang',['product'=>$product]);
     }
     public function getxuly(Request $req,$id){
        $custom= new customer;
       $custom->name=$req->ten;
       $custom->email=$req->email;
       $custom->address=$req->diachi;
       $custom->phone_number=$req->phone;
       $custom->note=$req->mota;
       $custom->save();
       //xử lí về hóa đơn
       $product= product::find($id);
       $bill=new bill;
       $bill->id_customer=$custom->id;
       $bill->date_order=date('Y-m-d');
       if($product->promotion_price == 0){
        $bill->total = $product->unit_price;
        }
        else{
            $bill->total=$product->promotion_price;
        }
        $bill->note= $req->mota;
        $bill->payment=$req->payment_method;
        $bill->save();
        //chi tiết từng mặt hàng trong đơn hàng
       $billdetail=new billdetail;
       $billdetail->id_bill=$bill->id;
       $billdetail->id_product=$product->id;
       $billdetail->quantity=1;
       if($product->promotion_price == 0){
        $billdetail->unit_price = $product->unit_price;
        }
        else{
            $billdetail->unit_price=$product->promotion_price;
        }
        $billdetail->save();
      return redirect('dathang/'.$id)->with('thongbao','bạn đã đặt hàng thành công');
     }
     public function getdangnhap()
     {
         return view('pages.login');
     }
      public function postdangnhap(Request $req)
     {
        if(Auth::attempt(['email' => $req->email, 'password' =>$req->matkhau])){
            return redirect('trangchu');
        }
        else{
            return redirect('dangnhap')->with('thongbao','dang nhập không thành công');
        }

     }
     public function getdangxuat()
     {
         # code...
        Auth::logout();
        return redirect('trangchu');
     }
     // đăng kí
      public function getdangki()
     {
         # code...
        return view('pages.dangki');
     }
      public function postdangki(Request  $req)
     {
         # code...
       $this->validate($req,[
            'ten'=>'required|min:5|max:30',
            'email'=>'unique:users,email|required',
            'matkhau'=>'required',
            'matkhau1'=>'same:matkhau',
            'diachi'=>'required',

       ],[
        'ten.required'=>'bạn chưa nhập tên của bạn',
        'ten.min'=>'tên ngắn nhất 5 kí tự và dài nhất 30 kí tự',
        'email.unique'=>'tên đã bị trùng',
        'matkhau.required'=>'bạn chưa nhập tên',
        'matkhau1.same'=>'nhập mật khẩu chưa khớp',
        'diachi.required'=>'bạn chưa nhập địa chỉ của bạn',
       ]);
       $user=new user;
       $user->email=$req->email;
       $user->full_name=$req->ten;
       $user->password=bcrypt($req->matkhau);
       $user->address=$req->diachi;
       $user->phone=$req->phone;
       $user->save();
       return redirect('dangki')->with('thongbao','bạn đã đăng kí thành công');

        
     }
     //tìm kiếm
     public function gettimkiem(Request $req)
     {
         # code...
        $tukhoa=$req->seach;
        $product=product::where('name','like',"%$tukhoa%")->take(10)->paginate(3);
       return view('pages.timkiem',['prod'=>$product,'tukhoa'=>$tukhoa]);
     }

}