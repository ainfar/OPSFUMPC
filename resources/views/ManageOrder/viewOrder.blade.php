@extends('layouts.appStaffP')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('View All Orders') }}</div>

                <div class="card-body">


                @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
            @endif


            <table class="table">
                <thead> <tr>
                    <th style="width:1%">Order ID</th>
                    <th style="width:10%">Matric ID</th>
                    <th style="width:50%">Product Name</th>
                    <th style="width:20%">Product Price </th>
                    <th style="width:10%">View PDF File </th>
                    <th style="width:10%">Download PDF File </th>
                    <th style="width:50%">Pickup Date</th>
                    <th style="width:1%">Quantity</th>
                    <th style="width:10%">Pickup Location</th>
                    <th style="width:10%">Total Price</th>
                    <th style="width:10%">Payment Method</th>
                    <th style="width:10%">Order status</th>
                    <th style="width:10%">Action</th>
                </tr>
                </thead>
                <tbody>

                    
                <tr>
                    @foreach($data as $orders)
                    <tr>

                        <td>{{$orders->orderID}}</td>

                        <td>{{$orders->matricID}}</td>

                        <td>{{$orders->productName}}</td>

                        <td>RM {{$orders->productPrice}}</td>

                        <td><a href="{{url('/viewPDF',$orders->orderID)}}">View</a></td>

                        <td><a href="{{url('/download',$orders->file)}}">Download</a></td>

                        <td>{{$orders->pickupDate}}</td>

                        <td>{{$orders->quantity}}</td>

                        <td>{{$orders->pickupLocation}}</td>

                        <td>{{$orders->totalPrice}}</td>

                        <td>{{$orders->payment_status}}</td>

                        <td>{{$orders->delivery_status}}</td>

                        <td>

                            @if($orders->delivery_status=='processing')

                            <a href="{{url('finished', $orders->orderID)}}" onclick="return confirm('Are you sure this product is finished?')" 
                            class="btn btn-primary">Finished</a>

                            @else

                            <p style="color: green"><b>Finished</b></p>

                            @endif
                        </td>
                        
                    </tr>
                    @endforeach
                        
                    </tr>
                    
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

