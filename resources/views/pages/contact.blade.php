@extends('layouts.default')

@section('content')

    <div class="container">
        <div class="py-3">
            <img class="d-block mx-auto mb-1" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="0">
            <h2>Contact Us</h2>
            <p class="lead">Leave your info below and we'll get back to you as soon as we can.</p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form class="needs-validation" novalidate>
                    <div class="col-sm-5">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="you@example.com">
                        <div class="invalid-feedback">
                            Please enter a valid email address.
                        </div>
                    </div>
                    <br/>
                    <div class="col-sm-5">
                        <label for="address">Subject</label>
                        <input type="text" class="form-control" id="address" placeholder="Enter subject" required>
                        <div class="invalid-feedback">
                            Please enter your shipping address.
                        </div>
                    </div>
                    <br/>
                    <div class="col-sm-5">
                        <label for="address2">Message</label>
                        <input type="text" class="form-control" id="address2" placeholder="Enter details">
                    </div>
                    <br/>
                    <div class="col-sm-5">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <hr class="mb-4">


@endsection