@extends('layouts.app')

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

                    <p>{{ __('You are successfully logged in as staff!') }}</p>
                    <p>{{ Auth::user()->name }}, you are from staff {{ Auth::user()->location }}. 
                    {{ __('Please select your registered location by clicking the image.') }}
                    </p>
                       

        <div class="row">
            <div class="column">
                <a href="{{url('staffPDashboard')}}"><img src="umppekan.jpg" alt="UMPPekan" style="width:100%; height:86%"></a>
                <div class="w3-container" style="text-align:center">
                    <h5>UMP Pekan</h5>
                </div>
            </div>
            
  
            <div class="column">
                <a href="{{url('staffPDashboard')}}"><img src="umpgambang.jpg" alt="UMPGambang" style="width:100%; height:86%"></a>
                <div class="w3-container" style="text-align:center">
                <h5>UMP Gambang</h5>
            </div>
        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

