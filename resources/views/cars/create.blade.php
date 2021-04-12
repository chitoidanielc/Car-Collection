@extends('template')

@section('content')

<h1>Create a car</h1>

<!-- if there are creation errors, they will show here -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{ Form::open(array('url' => 'car')) }}

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

    {{ Form::submit('Create the car!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection
