@extends('layouts.appStudent')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Your order') }}</div>

                <div class="card-body">


                @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
            @endif
            <br>
            <table class="table">
                <thead> <tr>
                    <th style="width:30%">Product Name</th>
                    <th style="width:20%">Product Price </th>
                    <th style="width:1%">View PDF File </th>
                    <th style="width:20%">Pickup Date</th>
                    <th style="width:1%">Quantity</th>
                    <th style="width:10%">Pickup Location</th>
                    <th style="width:10%">Total Price</th>
                    <th style="width:3%">Payment Method</th>
                    <th style="width:30%">Order status</th>
                    <th style="width:10%">Action</th>
                </tr>
                </thead>
                <tbody>

                    @foreach($orders as $orders)
                    <tr>
                        <td>{{$orders->productName}}</td>

                        <td>RM {{$orders->productPrice}}</td>

                        <td><a href="{{url('/viewPDF',$orders->orderID)}}">View</a></td>


                        <td>{{$orders->pickupDate}}</td>

                        <td>{{$orders->quantity}}</td>

                        <td>{{$orders->pickupLocation}}</td>

                        <td>{{$orders->totalPrice}}</td>
                        
                        <td>{{$orders->payment_status}}</td>

                        <td>{{$orders->delivery_status}}</td>

                        <td>
                            @if($orders->delivery_status=='processing')

                            <a onclick="return confirm('Are you sure to cancel the order?')" 
                            class="btn btn-danger" href="{{url('cancel_order', $orders->orderID)}}">Cancel Order</a>

                            @else

                            <p style="color:red">No Cancellation</p>

                            @endif
                        </td>
                    </tr>

                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection