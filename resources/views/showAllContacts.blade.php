@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">List All supportRequests</div>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>first name</th>
                            <th>last name</th>
                            <th>email</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($contacts as $singleContacts)
                            <tr>
                                <td>{{$singleContacts->store_name}}</td>
                                <td>{{$singleContacts->email}}</td>
                                <td>{{$singleContacts->phone_no}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
