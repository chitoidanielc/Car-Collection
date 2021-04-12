@extends('template')

@section('content')

<h1>Showing {{ $car->id }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $car->id }}</h2>
        <p>
            <strong>Make:</strong> {{ $car->make }}<br>
            <strong>Model:</strong> {{ $car->model }}<br>
            <strong>Year:</strong> {{ $car->year }}<br>
            <strong>Engine:</strong> {{ $car->engine }}<br>
            <strong>Fuel:</strong> {{ $car->fuel }}<br>
            <strong>Gearbox:</strong> {{ $car->gearbox }}<br>
        </p>
    </div>
@endsection
