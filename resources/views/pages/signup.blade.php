@extends('layouts.default')

@section('content')

    <div class="container">
        <div class="py-3">
            <img class="d-block mx-auto mb-1" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="0">
            <h2>Sign Up</h2>
            <p class="lead">Join us and we'll give your dog the best treatment there is!</p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <form class="needs-validation form-signin">
                    <div class="mb-3">
                        <label for="username">Username</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                            <input type="text" class="form-control" id="username" placeholder="Username" required>
                            <div class="invalid-feedback" style="width: 100%;">
                                Your username is required.
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" id="email" placeholder="you@example.com">
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email">Password</label><label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Confirm Password" required>
                    </div>
                    <div>
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <hr class="mb-4">

@endsection