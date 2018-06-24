@extends('layouts.default')

@section('content')
    <br/>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <h4>Messages</h4>
            <div class="card">
                <div class="card-header">
                    From: kenny_g12@gmail.com
                </div>
                <div class="card-body">
                    <h5 class="card-title">Question on my bill</h5>
                    <p class="card-text">There seems to be a few charges I'm not aware off.</p>
                    <a href="{{route('message-list')}}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>
    <hr class="mb-4">

@endsection