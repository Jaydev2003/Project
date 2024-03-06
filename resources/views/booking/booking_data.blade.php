@include('layout.header')
@extends('layout.master')

@section('content')
<link rel="stylesheet" href="css/table.css">
    @if (count($show_data) > 0)


    @if (session('success'))
    <div class="d-flex justify-content-center alert alert-success w" >
        {{ session('success') }}
    </div>
    @endif
    <div class="container-fluid">
        <div class="row mt-4 d-flex justify-content-center">
            <div class="col">
                <h2 class="mt-2">BOOKING DATA</h2>
            </div>
            <div class="col">
                <div class="d-flex justify-content-end mb-1">
                    <a class="text-decoration-none mt-3" href="{{ route('booking_form') }}">
                        <button class="btn btn-outline-primary">ADD CLIENT</button>
                    </a>
                </div>
            </div>
        <div class="container-fluid mt-2">
            <div class="table-responsive">
                <table class="table border border-dark table-striped">
                    <thead class="table-active text-white" style="background-color: rgb(32, 32, 32)">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Client Name</th>
                            <th scope="col">Client Address</th>
                            <th scope="col">Client Landmark</th>
                            <th scope="col">Booking Date</th>
                            <th scope="col">Start_date_time</th>
                            <th scope="col">End_date_time</th>
                            <th scope="col">Maid_id</th>
                            <th scope="col">Booking_type</th>
                            <th scope="col">Booking_rate</th>
                            <th scope="col">Status</th>
                            <th scope="col">Remarks</th>
                            <th colspan="2" scope="col">Operation</th>
                        </tr>
                    </thead>
                    <tbody class="table-striped">
                        @foreach ($show_data as $key => $item)
                            <tr>
                                 <td data-label="id">{{ $loop->iteration }}</td>
                                <td data-label="client_name">{{ $item->client_name }}</td>
                                <td data-label="client_address">{{ $item->client_address }}</td>
                                <td data-label="client_landmark">{{ $item->client_landmark }}</td>
                                <td data-label="booking_date ">{{ $item->booking_date }}</td>
                                <td data-label="start_date_time">{{ $item->start_date_time }}</td>
                                <td data-label="end_date_time">{{ $item->end_date_time }}</td>
                                <td data-label="maid_id">

                                    {{ $item->maid_id }}
                                </td>
                                <td data-label="booking type">
                                    @if ($item->booking_type == '0')
                                        <span class="badge badge-success">Hourly</span>
                                    @elseif($item->booking_type  == '1')
                                        <span class="badge badge-warning">Daily</span>
                                    @elseif($item->booking_type  == '2')
                                        <span class="badge badge-danger">Monthly</span>
                                    @endif
                                </td>
                                <td>{{ $item->booking_rate }}</td>
                                <td data-label="status">
                                    @if ($item->status == '0')
                                        <span class="badge badge-success">Active</span>
                                    @elseif($item->status == '1')
                                        <span class="badge badge-warning">deactive</span>
                                    @else
                                        <span class="badge badge-danger">Deleted</span>
                                    @endif
                                </td>
                                <td data-label="remarks">{{ $item->remarks }}</td>
                                <td ><a href="{{ route('showbookingupdate', $item->id) }}" <i class=" btn btn-sm btn-dark">Edit</i></a></td>
                                <td><a onclick="confirm('Do You Want To Delete')" href="{{ route('booking.delete', $item->id) }}" <i class=" btn btn-sm btn-danger">Delete</i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @else
    <div style="margin: 150px">
        <div>
            <h2 class="d-flex  justify-content-center " style="margin: 10px">No Data Found</h2>
        </div>
        <div class =" d-flex justify-content-center" style="margin-right: 20px">
            <a class="text-decoration-none " href="{{ route('booking_form') }}"> <button class=" btn btn-primary "
                    type="submit">
                    ADD CLIENT</button></a>
        </div>
    </div>
    @endif
@endsection
