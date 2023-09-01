@extends('layouts.appStaffP')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card" style="background:#e6faff;">
                <div class="card-header">{{ __('Add Product') }}</div>

<div class="container" style="margin-top:20px">
     <div class="row">
        <div class="col-md-12">
            <!-- send a message acivity has been added succesfully or not -->
            @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
            @endif
            <!-- save the data into the activity table after click on the submit button-->
            <form method="post" action="{{url('saveProduct')}}" enctype="multipart/form-data">
                @csrf 
                <!-- activity data that has an approved status need to be fill in by the committee -->
                <div>
                    <label>Product Name</label>
                    <input class="form-control" type="text" name="productName" placeHolder="Enter Product Name" required>
                </div> <br>

                <div>
                    <label>Quantity</label>
                    <input type="number" id="product_qty" name="product_qty" required>
                </div> <br>

                <div>
                    <label for="">Select an image:</label>
                    <input  type="file"  name="productImage">
                </div> <br>

                <div>
                    <label>Product Price</label>
                    <input class="form-control" type="text" name="productPrice" placeHolder="Enter Product Price" required>
                </div> <br>


                <button type="submit" class="btn btn-primary">Submit</button>
                <!-- go to the detail activity page after click on the back button -->
                <a href="{{url('staffPProducts')}}" class="btn btn-danger">Back</a>
                <br><br>

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
@endsection

