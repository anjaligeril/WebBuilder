@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

               <a href="addProducts">Add products</a>
                <a href="showAllProducts">Show products</a>
                <a href="addCustomers">Customer Registration</a>
                <a href="showAllCustomers">Show All Customers</a>
                <a href="ContactSupport">Contact For Help</a>
                <a href="showtHelp">Show all request for help</a>
            </div>
        </div>
    </div>
</div>
@endsection
