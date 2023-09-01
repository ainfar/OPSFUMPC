@extends('layouts.appStudent')

@section('content')


  <!-- Displaying Products Start -->
  


  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('View Product') }}</div>

                <br>

                <form action="{{url('searchproduct')}}" method="get" class="form-inline" style="float:right; padding: 10px;">
                @csrf
                  <input class="form-control" type="search" name="search" placeholder="search">

                  <input type="submit" value="Search" class="btn btn-success">

                </form>


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
    <div id="message"></div>
    <div class="row mt-2 pb-3">
    @foreach($data as $product)
      <div class="col-sm- col-md-4 col-lg-3 mb-2">
        <div class="card-deck">
          <div class="card p-2 border-secondary mb-2">
          <img src="{{ asset('uploads/'.$product->productImage)}}"  class="card-img-top" height="150" alt="Image">                       

            <div class="card-body p-1">
              <h5 class="card-title text-center" style="font-size:16px;">{{$product->productName}}</h5>
              <h6 class="card-text text-center "><b>RM {{$product->productPrice}} </b></h6>
            </div>
            <div class="card-footer p-1">
              <form action="" class="form-submit">
                
              <a href="{{url('cart/'.$product->productID)}}" class="btn btn-primary">Add to Cart</a>
                
              </form>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>

                </div>
            </div>
        </div>
    </div>
</div>
  <!-- Displaying Products End -->
@endsection

