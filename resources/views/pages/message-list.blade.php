@extends('layouts.default')

@section('content')
    <br/>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10"><h3>Messages</h3></div>
        <div class="col-sm-1"></div>
    </div>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10"><p>At Pet Center, we are committed to your dog and that brings a commitment to keeping you informed.</p></div>
        <div class="col-sm-1"></div>
    </div>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Subject</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row"><a class="nav-link" href="/message-1">MANY THANKS!!!</a></th>
                    <td><div class="col-sm-4"><form><button class="btn btn-primary btn-lg btn-block" type="submit">Delete</button></form></div></td>
                </tr>
                <tr>
                    <th scope="row"><a class="nav-link" href="/message-2">Call me back ASAP</a></th>
                    <td><div class="col-sm-4"><form><button class="btn btn-primary btn-lg btn-block" type="submit">Delete</button></form></div></td>
                </tr>
                <tr>
                    <th scope="row"><a class="nav-link" href="/message-3">Question on my bill</a></th>
                    <td><div class="col-sm-4"><form><button class="btn btn-primary btn-lg btn-block" type="submit">Delete</button></form></div></td>
                </tbody>
            </table>
        </div>
    </div>
    <hr class="mb-4">
@endsection