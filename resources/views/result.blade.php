@extends('layouts.appStaffP')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('View Slected Report') }}</div>

                <div class="card-body">

                <div>

                <a href="{{url('viewReport')}}" class="btn btn-primary">Back</a>

                <a class="btn btn-success" href="{{route('exportpdf')}}">Export PDF</a>
                </div> <br><br>
                 
                @if(count($order)>0)
                <table class="table table-bordered table-striped">
                    <thead>
                        <th>Date</th>
                        <th style="width:1%">Order ID</th>
                        <th style="width:10%">Matric ID</th>
                        <th style="width:50%">Product Name</th>
                        <th style="width:20%">Product Price </th>
                        <th style="width:50%">Pickup Date</th>
                        <th style="width:1%">Quantity</th>
                        <th style="width:10%">Pickup Location</th>
                        <!-- <th style="width:10%">Total Price</th> -->
                        <th style="width:10%">Payment Method</th>
                    </thead>
                    <tbody>
                        @foreach($order as $orders)
                            <tr>
                                <td>{{$orders->updated_at}}</td>
                                <td>{{$orders->orderID}}</td>
                                <td>{{$orders->matricID}}</td>
                                <td>{{$orders->productName}}</td>
                                <td>RM{{$orders->productPrice}}</td>
                                <td>{{$orders->pickupDate}}</td>
                                <td>{{$orders->quantity}}</td>
                                <td>{{$orders->pickupLocation}}</td>
                                <!-- <td>{{$orders->totalPrice}}</td> -->
                                <td>{{$orders->payment_status}}</td>

                            </tr>
                        @endforeach
                    </tbody>

                </table>

                @else
                <h3 class="text-center">No post from selected range</h3>
                @endif


                </div>


                
            </div>
        </div>
    </div>
</div>
@endsection