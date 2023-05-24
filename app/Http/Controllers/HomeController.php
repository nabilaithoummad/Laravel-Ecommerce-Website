<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\ProductModel;
use App\Models\Category;
use App\Models\Order;
use Stripe;
use Session;


class HomeController extends Controller
{
    //
    public function redirect(){
        $status = Auth::user()->status;
        if($status =='1'){

            $products = ProductModel::select('*')->get()->count();
            $orders = Order::select('*')->get();
            $orders_count = Order::select('*')->get()->count();
            $clients = User::select('*')->get()->count();
            $totale_revenue = 0;

            foreach ($orders as $order)
            {

                $totale_revenue = $totale_revenue + $order->product_price;

            }

            $order_delivered = Order::select('*')->where('delivery_status','=','delivered')->get()->count();
            $order_processing = Order::select('*')->where('delivery_status','=','processing')->get()->count();


            return view('admin2.crud.dashboard',compact('products','orders_count','clients','totale_revenue','order_delivered','order_processing'));

        }elseif($status=='0'){
            $id = Auth::user()->id;
            $category = Category::select('*')->get();
            $data = ProductModel::limit(15)->get();
            $phones = ProductModel::select('*')->where(['category'=>'phones'])->paginate(10);
            $clothes = ProductModel::select('*')->where(['category'=>'clothes'])->paginate(14);
            $cart = Cart::select('*')->where(['user_id'=>$id])->get()->count();
            return view('home2.userpage',['data'=>$data,'cart'=>$cart,'category'=>$category,'phones'=>$phones,'clothes'=>$clothes]);
        }
    }

    public function index(){
        $category = Category::select('*')->get();

        if(Auth::id() )
        {
            $user = Auth::user();
            $cart = Cart::select('*')->where(['user_id'=>$user->id])->get()->count();
            $data = ProductModel::limit(15)->get();
            $phones = ProductModel::select('*')->where(['category'=>'phones'])->paginate(10);
            $clothes = ProductModel::select('*')->where(['category'=>'clothes'])->paginate(14);
            return view('home2.userpage',['data'=>$data,'cart'=>$cart,'category'=>$category,'phones'=>$phones,'clothes'=>$clothes]);
        }else{
            $data = ProductModel::limit(10)->get();
            $phones = ProductModel::select('*')->where(['category'=>'phones'])->paginate(10);
            $clothes = ProductModel::select('*')->where(['category'=>'clothes'])->paginate(14);
            return view('home2.userpage',['data'=>$data,'cart'=>0,'category'=>$category,'phones'=>$phones,'clothes'=>$clothes]);
        }
    }

    public function allproducts(){
        $category = Category::select('*')->get();

        if(Auth::id() )
        {
            $user = Auth::user();
            $cart = Cart::select('*')->where(['user_id'=>$user->id])->get()->count();
            $data = ProductModel::select('*')->get();
            return view('home2.Allproducts',['data'=>$data,'cart'=>$cart ,'category'=>$category]);
        }else{
            $data = ProductModel::select('*')->get();
            return view('home2.Allproducts',['data'=>$data,'cart'=>0 ,'category'=>$category]);
        }
    }

    public function product_details($id){
        if(Auth::id())
        {
            $user = Auth::user();
            $data = ProductModel::select('*')->find($id);
            $cart = Cart::select('*')->where(['user_id'=>$user->id])->get()->count();
            return view('home2.productdetails',['data'=>$data,'cart'=>$cart]);
        }else{
            $data = ProductModel::select('*')->find($id);
            return view('home2.productdetails',['data'=>$data,'cart'=>0]);
        }

    }

    public function searchProduct(Request $request)
    {

        $phones = ProductModel::select('*')->where(['category'=>'phones'])->paginate(10);
        $clothes = ProductModel::select('*')->where(['category'=>'clothes'])->paginate(10);
        $category = Category::select('*')->get();
        if(empty($request->category)){
            $data = ProductModel::select('*')->where(['title'=>$request->title])->get();
        }else{
            if(!empty($request->category)){
                $data = ProductModel::select('*')->where(['title'=>$request->title,'category'=>$request->category])->get();
            }
            if(empty($request->title)){
                $data = ProductModel::select('*')->where(['category'=>$request->category])->get();
            }
        }

        if(Auth::id() )
        {
            $user = Auth::user();
            $cart = Cart::select('*')->where(['user_id'=>$user->id])->get()->count();

            return view('home2.userpage',['data'=>$data,'cart'=>$cart,'category'=>$category,'phones'=>$phones,'clothes'=>$clothes]);

        }else{
            return view('home2.userpage',['data'=>$data,'cart'=>0,'category'=>$category,'phones'=>$phones,'clothes'=>$clothes]);
        }

    }




    public function searchAllProduct(Request $request)
    {


        $category = Category::select('*')->get();
        if(empty($request->category)){
            $data = ProductModel::select('*')->where(['title'=>$request->title])->get();
        }else{
            if(!empty($request->category)){
                $data = ProductModel::select('*')->where(['title'=>$request->title,'category'=>$request->category])->get();
            }
            if(empty($request->title)){
                $data = ProductModel::select('*')->where(['category'=>$request->category])->get();
            }
        }

        if(Auth::id() )
        {
            $user = Auth::user();
            $cart = Cart::select('*')->where(['user_id'=>$user->id])->get()->count();

            return view('home2.Allproducts',['data'=>$data,'cart'=>$cart,'category'=>$category]);

        }else{
            return view('home2.Allproducts',['data'=>$data,'cart'=>0,'category'=>$category]);
        }

    }





    public function add_cart(Request $request,$id){

        if(Auth::id())
        {
            $user = Auth::user();
            $product = ProductModel::find($id);

            $data['name']=$user->name;
            $data['email']=$user->email;
            $data['address']=$user->address;
            $data['phone']=$user->phone;
            $data['user_id']=$user->id;

            $data['product_title']=$product->title;
            $data['product_quantity']=$request->quantity;

            if($product->discount_price!==null){
                $data['product_price']=$product->discount_price*$request->quantity;
            }else{
                $data['product_price']=$product->price*$request->quantity;
            }

            $data['product_image']=$product->image;
            $data['product_id']=$product->id;


            Cart::create($data);

            return redirect()->back();

        }
        else
        {
            return redirect('login');
        }
    }

    public function show_cart(){
        if(Auth::id())
        {
            $user = Auth::user();
            $cart = Cart::select('*')->where(['user_id'=>$user->id])->get()->count();
            $data = Cart::select('*')->where(['user_id'=>$user->id])->get();
            return view('home2.cart',['data'=>$data,'cart'=>$cart]);
        }else{
            return redirect()->route('login');
        }
    }


    public function delete_cart($id){
        Cart::where(['id'=>$id])->delete();
        return redirect()->route('show_cart');
    }

    public function cash_order(){
        $user = Auth::user();
        $cart = Cart::select('*')->where(['user_id'=>$user->id])->get();

        foreach ($cart as $info) {
            $data['name']=$user->name;
            $data['email']=$user->email;
            $data['address']=$user->address;
            $data['phone']=$user->phone;
            $data['user_id']=$user->id;

            $data['product_title']=$info->product_title;
            $data['product_quantity']=$info->product_quantity;
            $data['product_price']=$info->product_price;
            $data['product_image']=$info->product_image;
            $data['product_id']=$info->product_id;

            $data['payment_status']='cash on delivery';
            $data['delivery_status']='processing';

            Order::create($data);
        }

        Cart::where(['user_id'=>$user->id])->delete();

        return redirect()->back()->with('message','');

    }


    public function stripe($totale){
        $user = Auth::user();
        $cart = Cart::select('*')->where(['user_id'=>$user->id])->get()->count();
        return view('home2.stripe',compact('totale','cart'));
    }



    public function stripePost(Request $request,$totale)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        Stripe\Charge::create ([
                "amount" => $totale * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from itsolutionstuff.com."
        ]);


        $user = Auth::user();
        $cart = Cart::select('*')->where(['user_id'=>$user->id])->get();

        foreach ($cart as $info) {
            $data['name']=$user->name;
            $data['email']=$user->email;
            $data['address']=$user->address;
            $data['phone']=$user->phone;
            $data['user_id']=$user->id;

            $data['product_title']=$info->product_title;
            $data['product_quantity']=$info->product_quantity;
            $data['product_price']=$info->product_price;
            $data['product_image']=$info->product_image;
            $data['product_id']=$info->product_id;

            $data['payment_status']='paid';
            $data['delivery_status']='processing';

            Order::create($data);
        }

        Cart::where(['user_id'=>$user->id])->delete();

        Session::flash('success', 'Payment successful!');
        return back();
    }




    public function show_myorders(){

        if(Auth::id())
        {
            $user = Auth::user();
            $data = Order::select('*')->where('user_id','=',$user->id)->get()->sortDesc();
            $cart = Cart::select('*')->where(['user_id'=>$user->id])->get()->count();

            return view('home2.orders',compact('data','cart'));

        }
        else
        {
            return redirect('login');
        }
    }


    public function cancel_order($id){

        $data = Order::find($id);
        $data->delivery_status='canceled order';
        $data->save();

        return redirect()->back();

    }


    public function contact(){
        return view('home2.contact');
    }

}


