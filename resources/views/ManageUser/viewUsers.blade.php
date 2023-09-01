@extends('layouts.appStaffP')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('View User List') }}</div>

                <div class="card-body">

                <!-- search bar right align -->
                <form action="{{url('search')}}" method="get" class="form-inline" style="float:left; padding: 10px;">
                @csrf
                  <input class="form-control" type="search" name="search" placeholder="Search Staff or User">

                  <input type="submit" value="Search" class="btn btn-success">

                </form>

            <br>
            <table class="table">
                <thead> <tr>

                    <th style="width:100%">Name</th>
                    <th style="width:10%">Matric ID</th>
                    <th style="width:10%">Phone Number</th>
                    <th style="width:10%">Account Type </th>
                    <th style="width:10%">Gender</th>
                    <th style="width:10%">Location</th>
                    <th style="width:10%">Email</th>
                    <th style="width:10%">Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->matricID}}</td>
                        <td>{{$user->phoneNum}}</td>
                        <td>{{$user->accountType}}</td>
                        <td>{{$user->gender}}</td>
                        <td>{{$user->location}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            <a href="{{url('viewuser/'.$user->id)}}" class="btn btn-primary">View</a>    
                            <a href="{{url('deleteuser/'.$user->id)}}" onclick="return confirm('Are you sure to delete this user?')" class="btn btn-danger">Delete</a>                                              

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