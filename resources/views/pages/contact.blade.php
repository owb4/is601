@extends('layouts.default')

@section('content')

    <div class="container">
        <div class="py-3">
            <img class="d-block mx-auto mb-1" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt=""
                 width="72" height="5">
            <h3>Contact Us</h3>
            <p class="lead">Leave your info below and we'll get back to you as soon as we can.</p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="/" class="needs-validation" novalidate>
                    {{ csrf_field() }}
                    <div class="col-sm-5">
                        <label for="email">Email</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="you@example.com">
                        <div class="invalid-feedback">
                            Please enter a valid email address.
                        </div>
                    </div>
                    <br/>
                    <div class="col-sm-5">
                        <label for="subject">Subject</label>
                        <input name="subject" type="text" class="form-control" id="subject" placeholder="Enter subject"
                               required>
                        <div class="invalid-feedback">
                            Please enter your message.
                        </div>
                    </div>
                    <br/>
                    <div class="col-sm-5">
                        <label for="message">Message</label>
                        <textarea name="message" type="text" class="form-control" id="message"
                                  placeholder="Enter details"></textarea>
                    </div>
                    <br/>
                    <div class="col-sm-5">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <hr class="mb-4">
@endsection