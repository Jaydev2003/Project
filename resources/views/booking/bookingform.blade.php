@include('layout.header')

@extends('layout.master')

@section('content')
    <div class="container-fluid mt-5 p-3 ">
        <div class="row  mb-2 ">
            <div class="col-lg-11 mb-2 mt-2 ">
                <h2>Booking Form</h2>
            </div>
            <div class="col-lg-1  mb-2  mt-2" style="padding-left: 35px">
                <a class="  btn btn-outline-primary" href="{{ route('booking.index') }}">back</a>
            </div>
        </div>
        <div class="container-fluid border border-dark rounded p-3 mb-3" style="background-color: #e4e9ee">
            <form class="form" action="{{ route('booking.store') }}" method="POST">
                @csrf
                <div class="row mb-3">
                    <div class="col">
                        <label for="client_name">Client Name</label>
                        <input class="form-control" type="text" id="client_name" placeholder="Client Name"
                            name="client_name">
                        <span class="text-danger">
                            @error('client_name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="col">
                        <label for="client_address">Client Address</label>
                        <input class="form-control" type="text" id="client_address" placeholder="Client Address"
                            name="client_address">
                        <span class="text-danger">
                            @error('client_address')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="col">
                        <label for="client_landmark">Client Landmark</label>
                        <input class="form-control" type="text" id="client_landmark" placeholder="Client Landmark"
                            name="client_landmark">
                        <span class="text-danger">
                            @error('client_landmark')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="booking_date">Booking Date</label>
                        <input class="form-control" type="date" id="booking_date" placeholder="Booking Date"
                            name="booking_date">
                        <span class="text-danger">
                            @error('booking_date')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="col">
                        <label for="start_date_time">Start Date & Time</label>
                        <input class="form-control" type="datetime-local" placeholder="Start Date & Time"
                            id="start_date_time" name="start_date_time">
                        <span class="text-danger">
                            @error('start_date_time')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="col">
                        <label for="end_date_time">End Date & Time</label>
                        <input class="form-control" type="datetime-local" placeholder="End Date & Time" id="end_date_time"
                            name="end_date_time">
                        <span class="text-danger">
                            @error('end_date_time')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="maid_id">Maid Name</label>

                        <select class="form-control" id="booking_type" name="maid_id">
                            @foreach ($data as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        <span class="text-danger">
                            @error('maid_id')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="col">
                        <label for="booking_type">Booking Type</label>
                        <select class="form-control" id="booking_type" name="booking_type">
                            <option value="">Select Type</option>
                            <option value="0">Hourly</option>
                            <option value="1">Daily</option>
                            <option value="2">Monthly</option>
                        </select>
                        <span class="text-danger">
                            @error('booking_type')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="col">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option value="">Select status</option>
                            <option value="0">Active</option>
                            <option value="1">Deactive</option>
                            <option value="2">Deleted</option>
                        </select>
                        <span class="text-danger">
                            @error('status')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="booking_rate">Booking Rate</label>
                        <input class="form-control" type="number" id="booking_rate" placeholder="Booking Rate"
                            min="0" name="booking_rate">
                        <span class="text-danger">
                            @error('booking_rate')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="col">
                        <label for="remarks">Remarks</label><br>
                        <input class="form-control" type="text" id="remarks" placeholder="Remark" name="remarks">
                    </div>
                </div>

                <!-- Center align the button -->
                <div class="mb-2 d-flex justify-content-center">
                    <button class="btn btn-primary" type="submit">ADD CLIENT</button>
                </div>
            </form>
        </div>
    </div>
    @endsection
