@extends('main')

@section('title','Convert Temperatures')

@section('pageContent')
<div class="container" style="text-align: center; align-content: center; -webkit-align-content: center; max-width: 75vw;">

        <form action="/convert/temperature/go" method="post">
            {{ csrf_field() }}
            <div class="input-group mb-3">
                <span class="input-group-text" id="temp-addon">Temperature</span>
                <input type="text" name="temp" maxlength="8" minlength="1" class="form-control" aria-label="Temperature" aria-describedby="temp-addon">
            </div>
            Convert From:&nbsp;
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="srcTemp" id="srcTemp-c" checked value="srcTemp-c">
                <label class="form-check-label" for="srcTemp-c">Celsius</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="srcTemp" id="srcTemp-f" value="srcTemp-f">
                <label class="form-check-label" for="srcTemp-c">Fahrenheit</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="srcTemp" id="srcTemp-k" value="srcTemp-k">
                <label class="form-check-label" for="srcTemp-c">Kelvin</label>
            </div>
            <br><br>
            <button type="submit" role="button" class="btn btn-primary">Convert</button>

        </form>

    <br>

    @if (isset($result['error']))
        <h3>{{ $result['error'] }}</h3>
    @elseif(isset($result))
        <h3>{{ $result['origTemp'] }} {{ $result['origUnit'] }} is:</h3>
        <h4>{{ $result['celsius'] }} Celsius</h4>
        <h4>{{ $result['fahrenheit'] }} Fahrenheit</h4>
        <h4>{{ $result['kelvin'] }} Kelvin</h4>
    @endif

</div>

@endsection
