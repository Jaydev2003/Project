@include('layout.header')
@extends('layout.master')

@section('content')
    <div class="container-fluid mt-5 p-3 " >
        <div class="row  mb-2 ">
            <div class="col-lg-11 mb-2 mt-2 ">
                <h2>Update Data</h2>
            </div>
            <div class="col-lg-1  mb-2  mt-2" style="padding-left: 35px">
                <a class="  btn btn-outline-primary"  href="{{ route('show') }}">back</a>
            </div>
        </div>

        <div class="container-fluid border border-dark rounded p-3 mb-3" style="background-color: #e4e9ee">

            <form class="form " action="{{ route('update', ['id' => $data->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row mt-3 mb-3">
                    <div class="col">
                        <label for="name">Name</label>
                        <input class="form-control" type="text" id="name" name="name" value="{{ $data->name }}"
                            placeholder="Name">
                        <span class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="col">
                        <label for="email">Email</label>
                        <input class="form-control" type="email" id="email" name="email"
                            value="{{ $data->email }}" placeholder="Email">
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="col">
                        <label for="mobile">Mobile</label>
                        <input class="form-control" type="text" id="mobile" name="mobile"
                            value="{{ $data->mobile }}" placeholder="Mobile">
                        <span class="text-danger">
                            @error('mobile')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="alternate_mobile">Alternate Mobile</label>
                        <input class="form-control" type="text" id="alternate_mobile"
                            value="{{ $data->alternate_mobile }}" placeholder="Alternate Mobile" name="alternate_mobile">
                        <span class="text-danger">
                            @error('alternate_mobile')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="col">
                        <label for="idproof">ID Proof</label>
                        <input class="form-control" type="text" id="idproof" name="idproof" placeholder="ID Proof"
                            value="{{ $data->idproof }}">
                        <span class="text-danger">
                            @error('idproof')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="col">
                        <label for="city">City</label>
                        <input class="form-control" type="text" id="city" name="city" placeholder="City"
                            value="{{ $data->city }}">
                        <span class="text-danger">
                            @error('city')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="row mb-3">

                    <div class="col">
                        <label for="address">Address</label>
                        <input class="form-control" type="text" id="address" name="address" class="form-control"
                            placeholder="Address" value="{{ $data->address }}">
                        <span class="text-danger">
                            @error('address')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>


                    <div class="col ">
                        <label for="address">Working Type</label>
                        <select class="form-control" id="working_type" name="working_type">
                            <option value="">Select Working Type</option>
                            <option value="0" {{ $data->working_type == 0 ? 'selected' : '' }}>Full-day</option>
                            <option value="1" {{ $data->working_type == 1 ? 'selected' : '' }}>Morning</option>
                            <option value="2" {{ $data->working_type == 2 ? 'selected' : '' }}>Afternoon</option>
                            <option value="3" {{ $data->working_type == 3 ? 'selected' : '' }}>Evening</option>
                            <option value="4" {{ $data->working_type == 4 ? 'selected' : '' }}>Night</option>
                        </select>
                        <span class="text-danger">
                            @error('working_type')
                                {{ $message }}
                            @enderror
                        </span>



                    </div>
                    <div class="col">
                        <label for="status">status</label>
                        <select class="form-control" id="status" name="status">
                            <option value="">Select Status</option>
                            <option value="0" {{ $data->status == 0 ? 'selected' : '' }}>Active</option>
                            <option value="1" {{ $data->status == 1 ? 'selected' : '' }}>Deactive</option>
                            <option value="2" {{ $data->status == 2 ? 'selected' : '' }}>Deleted</option>
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
                        <label for="hourly_rate">Hourly Rate</label>
                        <input class="form-control" type="number" id="hourly_rate" name="hourly_rate" min="0"
                            placeholder="Hourly Rate" value="{{ $data->hourly_rate }}">
                        <span class="text-danger">
                            @error('hourly_rate')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="col">
                        <label for="daily_rate">Daily Rate</label>
                        <input class="form-control" type="number" id="daily_rate" placeholder="Daily Rate"
                            min="0" name="daily_rate" value="{{ $data->daily_rate }}">
                        <span class="text-danger">
                            @error('daily_rate')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="col">
                        <label for="monthly_rate">Monthly Rate</label>
                        <input class="form-control" type="number" id="monthly_rate" placeholder="Monthly Rate"
                            min="0" name="monthly_rate" value="{{ $data->monthly_rate }}">
                        <span class="text-danger">
                            @error('monthly_rate')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col ">
                        <label for="experience">Experience</label>
                        <input class="form-control" type="text" id="experience" name="experience"
                            placeholder="Experience" value="{{ $data->experience }}">
                        <span class="text-danger">
                            @error('experience')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <!-- Center align the button -->
                <div class=" d-flex justify-content-center mb-3">
                    <button class="btn btn-primary" type="submit">UPDATE</button>
                </div>
            </form>
        </div>
    </div>
@endsection
