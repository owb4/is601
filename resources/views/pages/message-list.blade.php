@extends('layouts.default')

@section('content')
    <br/>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10"><h2>Message List</h2></div>
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
                    <th scope="col">Message #</th>
                    <th scope="col">Position</th>
                    <th scope="col">Company</th>
                    <th scope="col">City</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Business Analyst</td>
                    <td>Telecom, USA</td>
                    <td>Reston, VA</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Management Consultant</td>
                    <td>Trai-All</td>
                    <td>Seattle, VA</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>General Manager</td>
                    <td>Fidelia</td>
                    <td>Jersey City, NJ</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Real Estate Lawyser</td>
                    <td>Joint-Eff Firm</td>
                    <td>Dallas, TX</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-sm-1"></div>
    </div>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10"><b>Bill Gates</b></div>
        <div class="col-sm-1"></div>
    </div>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10"><p><i>"Develops products by identifying potential products; conducting market research; generating product requirements; determining specifications, production timetables, pricing, and time-integrated plans for product introduction; developing marketing strategies."</i></p></div>
        <div class="col-sm-1"></div>
    </div>
@endsection