@extends('layouts.appStaffP')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('View Information') }}</div>

                <div class="card-body">

                    @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}
                    </div>
                    @endif

                    <form method="post" action="{{url('updateuser')}}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="name" placeHolder="Enter Name" required value="{{$users->name}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="matricID" class="col-md-4 col-form-label text-md-end">{{ __('Matric ID') }}</label>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="matricID" placeHolder="Enter Matric ID" required value="{{$users->matricID}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phoneNum" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="phoneNum" placeHolder="Enter Phone Number" required value="{{$users->phoneNum}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="accountType" class="col-md-4 col-form-label text-md-end">{{ __('Account Type') }}</label>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="accountType" placeHolder="Enter Account Type" required value="{{$users->accountType}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="gender" class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="gender" placeHolder="Enter Gender" required value="{{$users->gender}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="location" class="col-md-4 col-form-label text-md-end">{{ __('Location') }}</label>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="location" placeHolder="Enter Location" required value="{{$users->location}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="email" placeHolder="Enter Email" required value="{{$users->email}}">
                            </div>
                        </div>


                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>

                                <a href="{{url('viewUsers')}}" class="btn btn-danger">Back</a>

                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection