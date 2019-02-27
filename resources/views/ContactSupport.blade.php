@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Contact For Help</div>
                    <form method="GET" action="/contactHelp">
                        <div class="form-group col-lg-8">
                            <label >Store Name</label>
                            <input type="text" class="form-control" id="storeName"  name="storeName">
                        </div>
                        <div class="form-group col-lg-8">
                            <label >Email</label>
                            <input type="email" class="form-control" id="email"  name="email">
                        </div>
                        <div class="form-group col-lg-8">
                            <label >Phone Number</label>
                            <input type="text" class="form-control" id="phone_no"  name="phone_no">
                        </div>
                        <div class="form-group col-lg-8 ">
                            <label >Subject</label>
                            <input type="text" class="form-control" id="subject"  name="subject">
                        </div>

                        <div class="form-group col-lg-8">
                            <label >Meassage</label>
                            <textarea type="text" class="form-control" id="message"  name="message"></textarea>
                        </div>


                        <button type="submit" class="btn btn-default"  >Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection