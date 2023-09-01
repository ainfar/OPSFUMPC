<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class ManageProductController extends Controller
{

    //////////////////STAFF PEKAN/////////////
    public function staffP(){

        $product = Product::count();
        $order = Order::count();
        $user = User::where('accountType', 'user')->count();
        $staff = User::where('accountType', 'staff')->count();

        return view('staff.staffPDashboard', compact('product', 'order', 'user', 'staff'));
    }

    

    //list of products
    public function productsP(){
        $data = Product::get();
        return view('ManageProduct.staffPProducts', compact('data'));
    }


    //list of product
    public function addProduct(){
       
        return view('ManageProduct.addProduct');
        
    }

    //save product into product table
    public function saveProduct(Request $request){       

        $product = new Product();
        $product->productName = $request->input('productName');
        $product->product_qty = $request->input('product_qty');

        if($request->hasfile('productImage'))
        {
            $file = $request->file('productImage');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/', $filename);
            $product->productImage = $filename;
        }
        $product->productPrice = $request->input('productPrice');
        $product->save();

        return redirect('/staffPProducts')->with('success', 'Product Added Successfully');
    }

        //edit product
        public function editProduct($productID)
        {
            $data = Product::where('productID', '=', $productID)->first();
            return view('ManageProduct.EditProduct', compact('data'));
    
        }
    
        //update product based on selected product id
        public function updateProduct(Request $request)
        {

            $request->validate([
                'productName' => 'required',
                'product_qty' => 'required',
                'productPrice' => 'required',
            ]);
    
            $productID = $request->productID;
            $productName = $request->productName;
            $product_qty = $request->product_qty;
            $productPrice = $request->productPrice;

    
            Product::where('productID','=',$productID)->update([
                'productName'=>$productName,
                'product_qty'=>$product_qty,
                'productPrice'=>$productPrice,

            ]);
    
            return redirect('/staffPProducts')->with('success', 'Product Updated Successfully');
    
        }

    //delete product based on selected activity id
    public function DeleteProduct($productID)
    {
        Product::where('productID','=',$productID)->delete();
        return redirect()->back()->with('success', 'Product Deleted Successfully');

    }

    //search product for staff
    public function searchP(Request $request){
        $searchP=$request->searchP;

        $data=Product::where('productName', 'Like', '%'.$searchP.'%')->get();

        return view('ManageProduct.staffPProducts', compact('data'));
    }


    


    ///////////STAF GAMBANG////////////
    public function staffG(){
        return view('staff.staffGDashboard');
    }

    public function delete($productID)
    {
        return "delete";
    }
}
