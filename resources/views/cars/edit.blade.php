@extends('template')

@section('content')

<h1>Edit {{ $car->id }}</h1>

<!-- if there are creation errors, they will show here -->
{{-- {{ HTML::ul($errors->all()) }} --}}

{{ Form::model($car, array('route' => array('car.update', $car->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('make', 'Make') }}
        {{ Form::text('make', old('make'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('model', 'Model') }}
        {{ Form::text('model', old('model'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('year', 'Year') }}
        {{ Form::text('year', old('year'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('engine', 'Engine') }}
        {{ Form::text('engine', old('engine'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('fuel', 'Fuel') }}
        {{ Form::text('fuel', old('fuel'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('gearbox', 'Gearbox') }}
        {{ Form::text('gearbox', old('gearbox'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Edit the car!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
@endsection
