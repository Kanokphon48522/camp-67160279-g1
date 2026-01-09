@extends('template.default')

@section('header1', 'Flight Data')
@section('content')
    <div class="row">
        <div class="mt-3 col-12">
            <form action="/flight/{{ $flight_update->id }}" method="post">
                @csrf
                @method('put')
                <div class="col-12">
                    <label for="name">Name</label>
                    <input class="form-control" name="name" id="name" value="{{ $flight_update->name}}">
                </div>
                <div class="col-12">
                    <label for="airline">Airline</label>
                    <input class="form-control" name="airline" id="airline" value="{{ $flight_update->airline }}">
                </div>
                <div class="col-12">
                    <label for="number_of_planes">Number of Planes</label>
                    <input class="form-control" name="number_of_seats" id="number_of_seats" value="{{ $flight_update->number_of_seats }}">
                </div>
                <div class="col-12">
                    <label for="price_per_ticket">Price per Ticket</label>
                    <input class="form-control" name="price" id="price" value="{{ $flight_update->price }}">
                </div>
                <div class="col-12">
                    <button class="btn btn-success" type="submit">บันทึก</button>
                </div>
            </form>
        </div>
        @include('flight.table')
    </div>
@endsection
