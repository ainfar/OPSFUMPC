@extends('layouts.appStaffP')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Edit Product') }}</div>

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

     <div class="row">
        <div class="col-md-12">
            <!-- send a message acivity has been added succesfully or not -->
            @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
            @endif
            <form method="post" action="{{url('updateProduct')}}" enctype="multipart/form-data">
                @csrf 
                <input type="hidden" name="productID" value="{{$data->productID}}">
                <div>
                    <label>Product Name</label>
                    <input class="form-control" type="text" name="productName" placeHolder="Enter Product Name" required value="{{$data->productName}}">
                </div> <br>

                <div>
                    <label>Quantity</label>
                    <input type="number" id="product_qty" name="product_qty" required value="{{$data->product_qty}}">
                </div> <br>

                <div>
                    <label>Product Price</label>
                    <input class="form-control" type="text" name="productPrice" placeHolder="Enter Product Price" required value="{{$data->productPrice}}">
                </div> <br>



                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{url('staffPProducts')}}" class="btn btn-danger">Back</a>

            </form>
        </div>
     </div>
    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

