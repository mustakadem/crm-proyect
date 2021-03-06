@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-2">
            @include('layouts.panel')
        </div>
        <div id="panel"  class="col-md-10 pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <img src="{{asset('storage/'.$customer->image)}}"  alt="" height="150" width="150">
                        <img src="{{$customer->image}}"  alt="" height="150" width="150">
                        <p class="h5 pt-2"><strong>{{$customer['name']}} {{$customer['surnames']}}</strong></p>
                    </div>

                    <div class="col-md-3">
                        <p class="h5">email: <strong>{{$customer['email']}}</strong></p>
                        <p class="h5">movil: <strong>{{$customer['movil']}}</strong></p>
                        <p class="h5">address: <strong>{{$customer['address']}}</strong></p>
                    </div>
                    <div class="col-md-3 ml-5">
                        <p class="h5">Type: <strong>{{$customer['type_customers']}}</strong></p>
                        <p class="h5">company: <strong>{{$customer['company']}}</strong></p>
                        <p class="h5">job title: <strong>{{$customer['job_title']}}</strong></p>
                        <p class="h5">Total Sales: <strong>{{$totalSales}}</strong></p>

                    </div>

                    <div class="d-flex justify-content-end">
                          <a href="{{route('customer.edit',array('username' => Auth::user()->username , 'customer' => $customer))}}"><i class="fas fa-edit fa-3x"></i></a>
                    </div>
                </div>
                <div class="dropdown-divider"></div>
                <div class="row">
                    <p class="h2">Notes: <strong>{{$customer['notes']}}</strong></p>
                </div>
            </div>
        </div>
    </div>
@endsection


