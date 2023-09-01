@extends('layouts.appStudent')

@section('content')


  <!-- Displaying Products Start -->
  


  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Order now') }}</div>

                <div class="card-body">
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Session::has('error') )
                    <div class="alert alert-success" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="container" style="margin-top:30px">

                    <div class="container" style="margin-top:20px">

                    <div class="container" style="margin-top:20px"> -->

                    <div class="container">
                    <div class="row">
        <div class="col-md-12">
            <!-- send a message acivity has been added succesfully or not -->
            @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
            @endif
            <form method="post" action="{{url('savecart', $data->productID)}}" enctype="multipart/form-data">
            @csrf 
            
            <input type="hidden" name="productID" value="{{$data->productID}}">

            
            <div>
                    <img src="{{ asset('uploads/'.$data->productImage)}}" width="70px" height="70px" alt="Image">                       

                </div> <br>
                <div>
                    <h5>{{$data->productName}}</h5>
                </div> <br>

                <div>
                    <h5>{{$data->productPrice}}</h5>
                </div>
                

                <div>
                    <label>Select file</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="file" name="file" placeHolder="Enter Select File" >
                    <p style="font-color:red;">*Please upload in pdf format</p>
                    
                </div> <br>


                <div>
                    <label>Pickup Date</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="date" name="pickupDate" >
                </div> <br>

                <div>
                    <label>Quantity</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="number" name="quantity" value="" min="0"> 
                </div> <br>

                <div>
                <label>Pickup Location</label>
                <select id="pickupLocation"   name="pickupLocation" >
                                <option selected></option>
                                <option value="UMP-Pekan">UMP Pekan</option>
                                <option value="UMP-Gambang">UMP Gambang</option>
                                </select>
                </div>
                <br>
                
                <!-- <form action="{{url('addcart', $data->productID)}}" method="post">
                @csrf -->
                    <!-- <input class="btn btn-primary" type="submit" value="Buy Now"> -->
                    <button type="submit" class="btn btn-primary">Buy</button>

                    <a href="{{url('home')}}" class="btn btn-danger">Back</a>

                <!-- </form> -->

            </form>
        </div>
     </div>
    </div>

</div>

                </div>
            </div>
        </div>
    </div>
</div>
  <!-- Displaying Products End -->
@endsection

