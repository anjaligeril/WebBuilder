@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">All Customers</div>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>store name</th>
                            <th>email</th>
                            <th>phone_no</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($contacts as $singleCustomer)
                            <tr>
                                <td>{{$singleCustomer->first_name}}</td>
                                <td>{{$singleCustomer->last_name}}</td>
                                <td>{{$singleCustomer->email}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
