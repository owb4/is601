@extends('layouts.default')

@section('content')

    <div class="container">
        <div class="py-3">
            <img class="d-block mx-auto mb-1" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="0">
            <h3>Sign In</h3>
            <p class="lead">Type your account info below.</p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <form action="/message-list" type="get" class="form-signin">
                    {{ csrf_field() }}
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
                        <label for="inputPassword1">Password</label>
                        <div class="input-group">
                            <input type="password" id="inputPassword1" class="form-control" placeholder="Password" required>
                            <div class="invalid-feedback" style="width: 100%;">
                                Your password
                            </div>
                        </div>
                    </div>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                </form>
            </div>
        </div>
    </div>
    <hr class="mb-4">
@endsection