<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
</head>
<body>
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

    
</body>
</html>