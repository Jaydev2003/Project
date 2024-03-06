@include('layout.header')
@extends('layout.master')

@section('content')

   <div class="container  d-flex justify-content-center">
    <div class="row mt-5">
@foreach ($user as $item )
<h1 class="">  Welcome {{ $item -> name }}</h1>
@endforeach


    </div>
   </div>
@endsection
