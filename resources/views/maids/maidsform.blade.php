@include('layout.header')
@extends('layout.master')

@section('content')



<div class="container-fluid mt-5 p-3 " >
    <div class="row  mb-2 ">
        <div class="col-lg-11 mb-2 mt-2 ">
            <h2>Maids Form</h2>
        </div>
        <div class="col-lg-1  mb-2  mt-2" style="padding-left: 35px">
            <a class="  btn btn-outline-primary"  href="{{ route('show') }}">back</a>
        </div>
    </div>
    <div class="container-fluid border border-dark rounded p-3 mb-3" style="background-color: #e4e9ee">

        <form class="form " action="{{ Route('data_display') }}" method="POST">
            @csrf
            <div class="row mb-3">
                <div class="col">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" id="name" name="name"  value="{{ old('name') }}" placeholder="Name">
                    <span class="text-danger">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="col">
                    <label for="email">Email</label>
                    <input  class="form-control" type="email" id="email" name="email"  value="{{ old('email') }}" placeholder="Email">
                    <span class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>
                </div >
                <div class="col">
                    <label for="mobile">Mobile</label>
                    <input  class="form-control"  type="text" id="mobile" name="mobile"  value="{{ old('mobile') }}" placeholder="Mobile">
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
                    <input  class="form-control" type="text" id="alternate_mobile"  value="{{ old('alternate_mobile') }}" placeholder="Alternate Mobile" name="alternate_mobile">
                    <span class="text-danger">
                        @error('alternate_mobile')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="col">
                    <label for="idproof">ID Proof</label>
                    <input  class="form-control"  type="text" id="idproof" name="idproof" placeholder="ID Proof" value="{{ old('idproof') }}" >
                    <span class="text-danger">
                        @error('idproof')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="col">
                    <label for="city">City</label>
                    <input   class="form-control"  type="text" id="city" name="city" placeholder="City" value="{{ old('idproof') }}">
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
                    <input  class="form-control"  type="text" id="address" name="address" class="form-control" placeholder="Address" value="{{ old('address') }}">
                    <span class="text-danger">
                        @error('address')
                            {{ $message }}
                        @enderror
                    </span>
                </div>


                <div class="col ">

                        <label for="working_type">Working Type</label>
                        <select  class="form-control"  id="working_type" name="working_type" value="{{ old('working_type') }}">
                            <option value="">Select Working Type</option>
                            <option value="0">Full-day</option>
                            <option value="1">Morning</option>
                            <option value="2">Afternoon</option>
                            <option value="3">Evening</option>
                            <option value="4">Night</option>
                        </select>
                        <span class="text-danger">
                            @error('working_type')
                                {{ $message }}
                            @enderror
                        </span>


                </div>
                <div class="col">
                    <label for="status">Status</label>
                    <select  class="form-control"  id="status" name="status" value="{{ old('status') }}">
                        <option value="">Select Status</option>
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
                    <label for="hourly_rate">Hourly Rate</label>
                    <input  class="form-control"  type="number" id="hourly_rate" name="hourly_rate"  min="0" placeholder="Hourly Rate" value="{{ old('hourly_rate') }}">
                    <span class="text-danger">
                        @error('hourly_rate')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="col">
                    <label for="daily_rate">Daily Rate</label>
                    <input   class="form-control" type="number" id="daily_rate" placeholder="Daily Rate"   min="0" name="daily_rate" value="{{ old('daily_rate') }}">
                    <span class="text-danger">
                        @error('daily_rate')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="col">
                    <label for="monthly_rate">Monthly Rate</label>
                    <input  class="form-control"  type="number" id="monthly_rate" placeholder="Monthly Rate"  min="0" name="monthly_rate" value="{{ old('monthly_rate') }}">
                    <span class="text-danger">
                        @error('monthly_rate')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row mb-3">
                  <div class="col">
                    <label for="experience">Experience</label>
                    <input  class="form-control"  type="number"  min="0" id="experience" name="experience" placeholder="Experience" value="{{ old('experience') }}">
                    <span class="text-danger">
                        @error('experience')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <!-- Center align the button -->
            <div class="d-flex justify-content-center mb-3 ">
                <button class="btn btn-primary" type="submit">Add Maids</button>
            </div>
        </form>
    </div>
</div>
@endsection
