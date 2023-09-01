@extends('layouts.appStaffP')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('View Report') }}</div>

                <div class="card-body">
                    
                                <form method="post" action="/select" enctype="multipart/form-data">
                            @csrf 
                            
                            
                            <div>
                                   


                                <div>
                                    <label>From Date</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="date" name="fromdate" >
                                </div> 

                                <div>
                                    <label>To Date</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="date" name="todate" >
                                </div> <br>


                                
                                <input type="submit" value="Submit" class="btn btn-primary">
                                

                            </form>

                </div>


                
            </div>
        </div>
    </div>
</div>
@endsection