@extends('layouts.appStaffP')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard Staff') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Session::has('error') )
                    <div class="alert alert-success" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    {{ __('You are successfully logged in as staff !') }} <br><br>

                    <div class="row">

                                                           
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">
                                Total Products
                                <h5>{{ $product}}</h5>
                            </div>                   
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">
                                Total Orders
                                <h5>{{ $order}}</h5>
                            </div>                       
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">
                                Total Students
                                <h5>{{ $user}}</h5>
                            </div>                       
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">
                                Total Staff
                                <h5>{{ $staff}}</h5>
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

