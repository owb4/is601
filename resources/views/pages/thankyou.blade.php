@extends('layouts.default')

@section('content')

    <div class="container">
        <div class="py-3">
            <img class="d-block mx-auto mb-1" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt=""
                 width="72" height="5">
            <h3>Thank you {{$name}}</h3>
            <p class="lead">We'll reach back to you shortly!</p>
        </div>
    </div>
    <hr class="mb-4">
@endsection