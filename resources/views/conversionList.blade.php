@extends('main')

@section('title', "tomearl98/converter")

@section('pageContent')

    <div class="row">
        <div class="col-xl-3 conversionListItem">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Temperature</h5>
                    <p class="card-text">Convert between fahrenheit, celsius, and kelvin</p>
                    <a href="/convert/temperature" class="btn btn-primary">Convert</a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 conversionListItem">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Distance</h5>
                    <p class="card-text">Convert between any metric or imperial distance units</p>
                    <a href="/convert/distance" class="btn btn-primary" disabled>Convert</a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 conversionListItem">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Weight/Mass</h5>
                    <p class="card-text">Convert between units of mass</p>
                    <a href="/convert/mass" class="btn btn-primary" disabled>Convert</a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 conversionListItem">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Binary/Decimal/Hexadecimal</h5>
                    <p class="card-text">Convert between Convert between Decimal, Binary, and Hexadecimal</p>
                    <a href="/convert/number" class="btn btn-primary" disabled>Convert</a>
                </div>
            </div>
        </div>
    </div>

@endsection
