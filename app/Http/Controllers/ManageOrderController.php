<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
//pdf
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Fecades\Storage;

class ManageOrderController extends Controller
{
    // public function addOrder(Request $request, $productID){
    //     if(Auth::id())
    //     {
    //         return redirect()->back;
    //     }
    //     else
    //     {
    //         return redirect('login');
    //     }
    // }

    public function viewOrder(){

        $data=Order::all();

        return view('ManageOrder.viewOrder', compact('data'));
    }

    public function viewCart($productID){

        $data = Product::where('productID', '=', $productID)->first();
            return view('ManageOrder.cart', compact('data'));
    }

    public function statusOrder(){
        return view('ManageOrder.orderStatus');
    }

    //addcart
    public function savecart(Request $request, $productID){

        if(Auth::id())
        {
            $users=Auth::user();

            $product=Product::find($productID);
            $carts = new Cart();
            $carts->productName=$product->productName;
            $carts->productPrice=$product->productPrice;

            $carts->matricID=$users->matricID;

            if($request->hasfile('file'))
            {
            $file = $request->file('file');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/', $filename);
            $carts->file = $filename;
            }
            

            $carts->pickupDate=$request->input('pickupDate');
            $carts->quantity=$request->input('quantity');
            $carts->pickupLocation=$request->input('pickupLocation');
            $carts->totalPrice=$request->input('totalPrice');
            
            
            $carts->save();
            return redirect('/showcart')->with('success', 'Cart Added Successfully');
        }

        else
        {
            return redirect ('login');
        }

        
    
        }
    

    // public function addtocart(){
    //     return view('ManageOrder.addcart');
    // }

    //show cart
    public function showcart()
    {
        $data=Cart::all();

        return view('ManageOrder.showcart', compact('data'));
    }

    // public function order()
    // {
    //     $data=Cart::all();

    //     return view('ManageOrder.viewOrder', compact('data'));
    // }

    //download pdf cust
    public function download(Request $request,$file)
    {
        return response()->download(public_path('uploads/'.$file));
    }

    //view pdf
    public function view($id)
    {
        $data=Cart::find($id);
        return view('ManageOrder.view',compact('data'));
    }

    /////////staff view pdf////////
    //view pdf
    public function viewPDF($orderID)
    {
        $orders=Order::find($orderID);
        return view('ManageOrder.viewPDF',compact('orders'));
    }

    /////////////student//////////////////

    //delete cart based on selected activity id
    public function cancelOrder($id)
    {
        Cart::where('id','=',$id)->delete();
        return redirect()->back()->with('success', 'Cart Deleted Successfully');

    }

    //move cart to ordee
    public function cash_order(Request $request)
    {
        $users=Auth::user();

        $users=$users->matricID;

        $data=Cart::where('matricID', '=', $users)->get();

        foreach($data as $data)
        {
            $orders=new Order;

            $orders->matricID=$data->matricID;

            $orders->productName=$data->productName;
            $orders->productPrice=$data->productPrice;

            if($request->hasfile('file'))
            {
            $file = $request->file('file');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/', $filename);
            $orders->file = $filename;
            }

            $orders->file=$data->file;

            

            $orders->pickupDate=$data->pickupDate;
            $orders->quantity=$data->quantity;
            $orders->pickupLocation=$data->pickupLocation;
            
            

            $orders->payment_status='cash';

            $orders->delivery_status='processing';

            $orders->save();

            //delete cart
            $cart_id=$data->id;

            $carts=Cart::find($cart_id);

            $carts->delete();

        }

        return redirect()->back()->with('message', 'We received your order. We will connect with you soon');


    }

    //show stud order
    public function studorder(){

        $users=Auth::user();

        $users=$users->matricID;

        $orders=Order::where('matricID', '=', $users)->get();

        return view('ManageOrder.studorder', compact('orders'));
    }

    public function finished($orderID)
    {
        $orders=Order::find($orderID);

        $orders->delivery_status="finished";

        $orders->save();

        return redirect()->back();
    }

    public function cancel_order($orderID)
    {
        $orders=Order::find($orderID);

        $orders->delivery_status='Cancelled';

        $orders-> save();

        return redirect()->back();
    }
    

    


    
}
