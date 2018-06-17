@extends('layouts.default')

@section('content')
    <br/>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10"><h2>Messages</h2></div>
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
                    <th scope="row">MANY THANKS!!!</th>
                    <td><div class="col-sm-4"><form><button class="btn btn-primary btn-lg btn-block" type="submit">Delete</button></form></div></td>
                </tr>
                <tr>
                    <th scope="row">Call me back ASAP</th>
                    <td><div class="col-sm-4"><form><button class="btn btn-primary btn-lg btn-block" type="submit">Delete</button></form></div></td>
                </tr>
                <tr>
                    <th scope="row">Question on my bill</th>
                    <td><div class="col-sm-4"><form><button class="btn btn-primary btn-lg btn-block" type="submit">Delete</button></form></div></td>
                </tbody>
            </table>
            <hr class="mb-4">
        </div>
    </div>

@endsection