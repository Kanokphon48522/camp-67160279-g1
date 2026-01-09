@extends('template.default')

@section('header1', 'Flight Data')
@section('content')
    <div class="row">

            <form action="/flights" method="post">
                @csrf
                <div class="col-12">
                    <label for="name">Name</label>
                    <input class="form-control" name="name" id="name">
                </div>
                <div class="col-12">
                    <label for="airline">Airline</label>
                    <input class="form-control" name="airline" id="airline">
                </div>
                <div class="col-12">
                    <label for="number_of_seats">Number of Seats</label>
                    <input class="form-control" name="number_of_seats" id="number_of_seats">
                </div>
                <div class="col-12">
                    <label for="price">Price</label>
                    <input class="form-control" name="price" id="price">
                </div>
                <div class="col-12">
                    <button class="btn btn-success" type="submit">บันทึก</button>
                </div>
            </form>
        </div>
        @include('flight.table')
    </div>
@endsection
