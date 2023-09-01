@extends('layouts.appStudent')

@section('content')

<!-- Displaying Products Start -->
  


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('View Cart') }}</div>



                <div class="card-body">


            @if(Session::has('message'))
            <div class="alert alert-success">

                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"> x </button>

                {{Session::get('message')}}
                
            </div>
            @endif

            <br>
            <form action="{{url('viewOrder')}}" method="post">

                <table class="table">
                <thead> <tr>
                    <th style="width:10%">Matric ID</th>
                
                    <th style="width:10%">Product Name</th>
                    <th style="width:10%">Product Price </th>
                    <th style="width:10%">View PDF File </th>
                    <th style="width:10%">Download PDF File </th>
                    <th style="width:10%">Pickup Date</th>
                    <th style="width:10%">Quantity</th>
                    <th style="width:10%">Pickup Location</th>
                    <th style="width:10%">Total Price</th>
                    <th style="width:10%">Action</th>
                    
                </tr>
                </thead>
                <tbody>
                    @php 

                    $amountPrice=0
                    

                    @endphp

                @foreach($data as $carts)
                    <tr>

                        <td>
                            {{$carts->matricID}}</td>

 
                        <td>
                            {{$carts->productName}}</td>

                        <td>
                            
                            RM {{$carts->productPrice}}</td>

                        <td><a href="{{url('/view',$carts->id)}}">View</a></td>

                        <td><a href="{{url('/download',$carts->file)}}">Download</a></td>

                        <td>
                            
                            {{$carts->pickupDate}}</td>

                        <td>
                        
                            {{$carts->quantity}}</td>

                        <td>
                        
                            {{$carts->pickupLocation}}</td>

                        <td>
                            
                            RM {{$carts->totalPrice= $carts->productPrice * $carts->quantity}}</td>


                        <!-- @php 

                        $amountPrice = $amountPrice + $carts->totalPrice

                        @endphp -->

                        <td>
                            <a href="{{url('cancelOrder/'.$carts->id)}}" onclick="return confirm('Are you sure to cancel this order?')" class="btn btn-danger" id="cancel">Cancel</a>
                        </td>
                        
                    </tr>
                    @endforeach

                    
                </tbody>
            </table>
            <br>

            <div style="text-align: center">
                <h5><b>Amount Price: RM{{$amountPrice}}</b></h5>
            </div> <br>

            <div style="text-align: center">
                <h5>Proceed to Order</h5>

                <a href="{{url('cash_order')}}"  class="btn btn-primary">Cash</a>

            </div>

            </form>


                </div>
            </div>
        </div>
    </div>
</div>
  <!-- Displaying Products End -->

@endsection