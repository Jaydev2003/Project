@include('layout.header')
@extends('layout.master')

@section('content')

    @if (!is_null($show_users) && count($show_users) > 0)
        @if (session('success'))
            <div class="d-flex justify-content-center alert alert-success w">
                {{ session('success') }}
            </div>
        @endif

        <link rel="stylesheet" href="css/table.css">

        <div class="container-fluid">
            <div class="row mt-4 d-flex justify-content-center">
                <div class="col">
                    <h2 class="mt-2">MAIDS DATA</h2>
                </div>
                <div class="col">
                    <div class="d-flex justify-content-end mb-1">
                        <a class="text-decoration-none mt-3" href="{{ route('Maidsform') }}">
                            <button class="btn btn-outline-primary">ADD MAIDS</button>
                        </a>
                    </div>
                </div>
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class="table-active text-white" style="background-color: rgb(32, 32, 32)">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Mobile</th>
                                    <th scope="col">Alternate mobile</th>
                                    <th scope="col">Idproof</th>
                                    <th scope="col">Working type</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Hourly rate</th>
                                    <th scope="col">Daily rate</th>
                                    <th scope="col">Monthly rate</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Experience</th>
                                    <th colspan="2" scope="col">Operation</th>
                                </tr>
                            </thead>
                            <tbody class="table-striped">
                                @foreach ($show_users as $key => $item)
                                    <tr>
                                        <td data-label="id">{{ $loop->iteration }}</td>
                                        <!-- Add other table cells here -->
                                        <!-- Example: -->
                                        <td data-label="Name">{{ $item->name }}</td>
                                        <td data-label="Email">{{ $item->email }}</td>
                                        <!-- Add other table cells here -->
                                        <!-- Example: -->
                                        <td data-label="Mobile">{{ $item->mobile }}</td>
                                        <td data-label="Alternate Mobile">{{ $item->alternate_mobile }}</td>
                                        <!-- Add other table cells here -->
                                        <!-- Example: -->
                                        <td data-label="Id proof">{{ $item->idproof }}</td>

                                        <td data-label="working_type">
                                            @if ($item->working_type == '0')
                                                <span class="badge badge-success">Full-day</span>
                                            @elseif($item->working_type == '1')
                                                <span class="badge badge-warning">Morning</span>
                                            @elseif($item->working_type == '2')
                                                <span class="badge badge-danger">Afternoon</span>
                                            @elseif($item->working_type == '3')
                                                <span class="badge badge-danger">Evening</span>
                                            @elseif($item->working_type == '4')
                                                <span class="badge badge-danger">Night</span>
                                            @endif
                                        </td>
                                        <td data-label="status">
                                            @if ($item->status == '0')
                                                <span class="badge badge-success">Active</span>
                                            @elseif($item->status == '1')
                                                <span class="badge badge-warning">deactive</span>
                                            @else
                                                <span class="badge badge-danger">Deleted</span>
                                            @endif
                                        </td>


                                        <td data-label="Hourly rate">{{ $item->hourly_rate }}</td>
                                        <td data-label="daily rate">{{ $item->daily_rate }}</td>
                                        <!-- Add other table cells here -->
                                        <!-- Example: -->
                                        <td data-label="Monthly rate">{{ $item->monthly_rate }}</td>
                                        <td data-label="City">{{ $item->city }}</td>
                                        <td data-label="Address">{{ $item->address }}</td>
                                        <td data-label="Experience">{{ $item->experience }}</td>
                                        <td class="button"><a href="{{ route('showupdate', $item->id) }}"
                                                class="btn btn-sm btn-dark">Edit</a></td>
                                        <td class="button"><a onclick="return confirm('Do You Want To Delete') "
                                                href="{{ route('delete.user', $item->id) }}"
                                                class="btn btn-sm btn-danger">Delete</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div style="margin: 150px">
            <div>
                <h2 class="d-flex justify-content-center" style="margin: 10px">No Data Found</h2>
            </div>
            <div class="d-flex justify-content-center" style="margin-right: 20px">
                <a class="text-decoration-none" href="{{ route('Maidsform') }}">
                    <button class="btn btn-primary" type="submit">ADD MAIDS</button>
                </a>
            </div>
        </div>
    @endif

@endsection
