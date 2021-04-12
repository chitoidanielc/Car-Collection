@extends('template')

@section('content')

<h1>Cars List</h1>


@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Id</td>
            <td>Make</td>
            <td>Model</td>
            <td>Year</td>
            <td>Engine</td>
            <td>Fuel</td>
            <td>Gearbox</td>
        </tr>
    </thead>
    <tbody>
    @foreach($cars as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->make }}</td>
            <td>{{ $value->model }}</td>
            <td>{{ $value->year }}</td>
            <td>{{ $value->engine }}</td>
            <td>{{ $value->fuel }}</td>
            <td>{{ $value->gearbox }}</td>
            <td>
                <div class="inline">
                    <a class="mgr-5 btn btn-small btn-success" href="{{ URL::to('car/' . $value->id) }}">Show Car</a>
                    <a class="mgr-5 btn btn-small btn-info" href="{{ URL::to('car/' . $value->id . '/edit') }}">Edit Car</a>
                    <form action="{{ URL::route('car.destroy', $value->id) }}" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button class="btn btn-small btn-danger">Delete Car</button>
                    </form>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection


