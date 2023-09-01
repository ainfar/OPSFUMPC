<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $data = Product::get();

        return view('home', compact('data'));
    }

    public function staffHome(){
        return view('staffHome');
    }

    //search product for customer
    public function searchproduct(Request $request){
        $search=$request->search;

        $data=Product::where('productName', 'Like', '%'.$search.'%')->get();

        return view('home', compact('data'));
    }

    
  
}
